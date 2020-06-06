<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
    </head>
    <body>

      <div id="task-demo">
        <h1>Hello Vue component</h1>

        <task>Go to the bank</task>
        <task>Go to the store</task>
        <task>Go to work</task>

      </div>

        <div id="root">
          <h1>Hello Chart.js</h1>

          <graph></graph>
        </div>

        <div id="hello">
          <h1>Hello Vue</h1>
          <ul>
            <li v-for="name in names" v-text="name"></li>
            {{-- <li v-for="name in names">@{{ name }}</li> --}}
          </ul>

          <input type="text" v-model="newName">

          <button @click="addName">Add Name</button>
          {{-- <button v-on:click="addName">Add Name</button> --}}

        </div>

        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

        <script src="/js/app.js"></script>
    </body>
</html>
