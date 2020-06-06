/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./components/Graph');
// import Graph from './components/Graph';


require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

// Vue.component('graph', require('./components/Graph.vue').default);

Vue.component('task-list', {
  template: `
    <div>
      <task v-for="task in tasks">{{ task.description }}</task>
    </div>
  `,

  data() {
    return {
      tasks: [
        { description: 'Go to Best Buy', complete: false },
        { description: 'Go to the store', complete: true },
        { description: 'Go to work', complete: false },
        { description: 'Go to the bank', complete: true },
        { description: 'Go to Walgreens', complete: true },
        { description: 'Go to Strack & Van Tils', complete: false },
      ]
    }
  }
});

// new Vue({
//   el: '#task-demo',
//
// });


Vue.component('task', {
  template: '<li><slot></slot></li>'
});

new Vue({
  el: '#task-demo',

});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 // const app = new Vue({
 //     el: '#app',
 //
 //     components: { Graph }
 // });


// const app = new Vue({
//     el: '#root',
//
//     // components: { Graph }
// });

// Vue.component('task', {
//   template: '<li>FooBar</li>'
// });

new Vue({
    el: "#hello",

    data: {
      newName: '',

      names: ['Joe', 'Mary', 'Jane', 'Jack'],

    },

    methods: {

      addName() {
        // alert("adding name");
        this.names.push(this.newName);
        this.newName = '';
      }
    },

    // mounted(): {
    //
    // }

  });
