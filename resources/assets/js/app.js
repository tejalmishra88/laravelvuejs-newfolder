
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router'

Vue.use(VueRouter)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
//const example= require('./components/ExampleComponent.vue');
const sample= require('./components/samplecomponent.vue');
const task= require('./components/taskcomponent.vue');
const task1= require('./components/footballcomponent/taskcomponent.vue');
const task9= require('./components/reliancecomponent/taskcomponent.vue');
const routes = [
    { path : '/football',
    component: task1,
    },
    { path : '/reliance',
    component: task9,
    },
    { path : '/example',
    component: task,
    },
  
    {
        path:'/sample',
        component:sample,
    }
]
//Vue.component('example-component', require('./components/ExampleComponent.vue'));
//Vue.component('task', require('./components/taskcomponent.vue'));
const router= new VueRouter({
    routes
})
const app = new Vue({
    el: '#app',
    router,
});
