<template>
    <section class="game">
        <div class="container">
            <div class="flag-game">
                <template v-if="finished">
                    <div class="center">
                        <p>
                            <b>Dogry jogaplar: {{ trueAnswers }}</b>
                            <b>Ýalňyş jogaplar: {{ wrongAnswers }}</b>
                        </p>
                        <div class="buttons">
                            <button class="btn-flag" @click="restartGame">
                                Täzeden başla
                            </button>
                        </div>
                    </div>
                </template>
                <template v-if="!finished">
                    <div class="content">
                        <h2 class="red-text text-lighten-1">Paýtagt oýny</h2>
                        <h4 class="red-text text-lighten-1">{{ currentQuestion }}/{{ questionsLength }}</h4>
                    </div>

                    <div class="flag">
                        <img :src="parseImage(questions[currentQuestion-1])" alt="">
                    </div>

                    <div class="buttons">
                        <button class="btn btn-large waves-effect waves-light btn-flag" v-for="answer in answers" @click="giveAnswer(answer, $event)">
                            {{ answer }}
                        </button>
                    </div>
                    <a href="#" class="btn waves-effect waves-light" @click.prevent="nextQuestion" v-if="nextButton">Indiki</a>
                </template>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        data() {
            return {
                questions: [],
                countries: [],
                trueAnswers: 0,
                wrongAnswers: 0,
                currentQuestion: 1,
                answers: [],
                nextButton: false,
                _event: '',
                finished: false,
            }
        },
        mounted() {
            this.getQuestions();
        },
        watch: {
            currentQuestion() {
                this.answers = [];
                this.setQuestions();
            }
        },
        methods: {
            restartGame() {
                this.trueAnswers = 0;
                this.wrongAnswers = 0;
                this.currentQuestion = 1;
                this.answers = [];
                this.nextButton = false;
                this._event = '';
                this.finished = false;
                this.getQuestions();
            },
            giveAnswer(answer, event) {
                if (this.questions[this.currentQuestion-1].answered == true) {
                    return;
                }
                this.questions[this.currentQuestion-1].answered = true;
                if (this.questions[this.currentQuestion-1].capital == answer) {
                    this.trueAnswers += 1;
                    event.target.classList.toggle('true')
                } else {
                    this.wrongAnswers += 1;
                    event.target.classList.toggle('wrong')
                }
                if (this.currentQuestion == 20) {
                    this.nextButton = false;
                    this._event = event;
                    this.finished = true;
                } else {
                    this.nextButton = true;
                    this._event = event;
                }
            },
            nextQuestion() {
                this.currentQuestion += 1;
                this._event.target.classList.remove('true')
                this._event.target.classList.remove('wrong')
                this.nextButton = false;
            },
            setQuestions() {
                this.answers = [];
                this.countries[this.currentQuestion-1].forEach(question => {
                    this.answers.push(question);
                });
                this.answers.push(this.questions[this.currentQuestion-1].capital);
                let rand = Math.floor(Math.random()*this.answers.length);
                let replace = this.answers[rand];
                this.answers[rand] = this.questions[this.currentQuestion-1].capital;
                this.answers[3] = replace;
            },
            getQuestions() {
                axios.post('/api/capital/questions')
                    .then(response => {
                        this.questions = response.data.questions;
                        this.countries = response.data.all;
                        this.setQuestions();
                    });
            },
            parseImage(country) {
                if (country.flag == '') {
                    return `/storage/countries/${country.code.toLowerCase()}.png`;   
                }

                return country.flag.replace('public', '/storage');
            }
        },
        computed: {
            questionsLength() {
                return this.questions.length;
            }
        }
    }
</script>
