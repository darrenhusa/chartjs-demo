<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.2/css/bulma.css">
    </head>
    <body>

      <div class="container" id="root">
        <modal v-if="showModal" @close="showModal = false">
          <p>We insert any text here.</p>
        </modal>

        <button @click="showModal = true">Show Modal</button>
      </div>


      <div id="message-ex" class="container">

        <message title="Hello World" body="Lorem ipsum dolor sit amet, mollit anim id est laborum."></message>
        <message title="Hello Laura" body="Lorem ipsum dolor sit amet, mollit anim id est laborum."></message>

      </div>

      <div id="task-demo">
        <h1>Hello Vue component</h1>

        <task-list></task-list>
        {{-- <task>Go to the bank</task>
        <task>Go to the store</task>
        <task>Go to work</task> --}}

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
