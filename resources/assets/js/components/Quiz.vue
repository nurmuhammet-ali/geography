<template>
    <div class="container">
        <div class="category-selector">
            <div class="center">
                <h2 class="red-text text-lighten-1">Testler</h2>
                <h4 class="red-text text-lighten-1">{{ current_question }}/{{ quiz.length }}</h4>
                <template v-if="quizFinished">
                    <p>
                        Dogry jogaplar: {{ trueAnswers }}
                    </p>
                    <p>
                        Ýalňyş jogaplar: {{ falseAnswers }}
                    </p>
                    <p>
                        <button class="btn waves-effect waves-darken white grey-text text-darken-1" @click="restart">
                            Täzeden başla
                        </button>
                    </p>
                </template>
            </div>
            <div class="row" v-if="!quizFinished">
                <div class="quiz">
                    <div class="col s12 m12 l8 offset-l2">
                        <div class="card">
                            <div class="card-image">
                                <img :src="image">
                            </div>
                            <div class="card-content">
                                <span class="card-title grey-text text-darken-1">
                                    {{ question }}
                                </span>
                            </div>
                        </div>

                        <div class="col s12 m12 l12">
                            <div class="buttons">
                                <button class="btn" v-for="answer in answers" @click="checkAnswer(answer, $event)">
                                    {{ answer }}
                                </button>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['questions'],
        data() {
            return {
                quiz: '',
                current_question: 1,
                answers: [],
                trueAnswers: 0,
                falseAnswers: 0,
                quizFinished:false,
            }
        },
        mounted() {
            this.quiz = JSON.parse(this.questions);
            this.setAnswers();
        },
        computed: {
            image() {
                if (this.quiz[this.current_question-1] != undefined) {
                    return this.quiz[this.current_question-1].image.replace('public', '/storage');
                }
            },
            question() {
                if (this.quiz[this.current_question-1] != undefined) {
                    return this.quiz[this.current_question-1].question;
                }
            }
        },
        methods: {
            checkAnswer(answer, event) {
                if (this.nextButton) {
                    return;
                }
                if (answer == this.quiz[this.current_question-1].answer) {
                    this.trueAnswers++;
                    alert('Jogabyňyz dogry!');
                } else {
                    this.falseAnswers++;
                    alert('Jogap ýalňyş. Dogry jogap: ' + this.quiz[this.current_question-1].answer);
                }

                if (this.current_question == this.quiz.length && this.quiz.length < 20) {
                    this.quizFinished = true;
                    return;
                } else if (this.current_question == 20) {
                    this.quizFinished = true;
                    return;
                }

                this.nextButton = false;
                this.current_question++;
                this.setAnswers();
            },
            setAnswers() {
                this.answers = [];
                this.answers.push(this.quiz[this.current_question-1].falsy_answer1);
                this.answers.push(this.quiz[this.current_question-1].falsy_answer2);
                this.answers.push(this.quiz[this.current_question-1].falsy_answer3);
                this.answers.push(this.quiz[this.current_question-1].answer);
                let rand = Math.floor(Math.random()*this.answers.length);
                let replace = this.answers[rand];
                this.answers[rand] = this.quiz[this.current_question-1].answer;
                this.answers[3] = replace;
            },
            restart() {
                location.reload();
            }
        }
    }
</script>