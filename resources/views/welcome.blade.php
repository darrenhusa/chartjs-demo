<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
    </head>
    <body>
        <h1>Hello Vue</h1>

        <div id="hello">
          <input type="text" name="input" v-model="message">
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
