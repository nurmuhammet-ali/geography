window.Vue = require('vue');

require('./bootstrap.js');

require('materialize-css');

Vue.component('flag-game', require('./components/FlagGame.vue'));
Vue.component('capital-game', require('./components/CapitalGame.vue'));
Vue.component('quiz', require('./components/Quiz.vue'));

const app = new Vue({
    el: '#app',
});
