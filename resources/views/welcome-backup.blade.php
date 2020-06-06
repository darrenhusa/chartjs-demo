<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
    </head>
    <body>
        <div class="container">
            <graph :labels="['January', 'February', 'March']"
                   :values="[10, 42, 4]"
                   color="blue"
             ></graph>
        </div>

        <div class="container">
            <graph :labels="['April', 'May', 'June']"
                   :values="[100, 420, 99]"
                   color="red"
             ></graph>
        </div>

        <script src="/js/main.js"></script>
    </body>
</html>
