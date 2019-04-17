import Vue from 'vue';
import Records from './components/Records.vue';

Vue.component('records', Records);

let app = new Vue({
    el: '#app',
});