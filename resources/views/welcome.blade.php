<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
    </head>
    <body>
        <h1>Hello Vue</h1>

        <div id="hello">
          <input type="text" name="input" v-model="message">

          <p>The value of the input is @{{ message }}.</p>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <script>

      new Vue({
        el: "#hello",

        data: {
          message: 'Hello World',

        }
      });

    </script>
    </body>
</html>
