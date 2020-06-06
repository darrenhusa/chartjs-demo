<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
    </head>
    <body>
        <h1>Hello Vue</h1>

        <div id="hello">
          <ul>
            <li v-for="name in names" v-text="name"></li>
            {{-- <li v-for="name in names">@{{ name }}</li> --}}
          </ul>

          <input type="text" v-model="newName">

          <button @click="addName">Add Name</button>
          {{-- <button v-on:click="addName">Add Name</button> --}}

        </div>

        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <script>

      var app = new Vue({
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

    </script>
    </body>
</html>
