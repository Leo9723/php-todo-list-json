<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.0/axios.min.js" integrity="sha512-A6BG70odTHAJYENyMrDN6Rq+Zezdk+dFiFFN6jH1sB+uJT3SYMV4zDSVR+7VawJzvq7/IrT/2K3YWVKRqOyN0Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
</head>

<body>
    <div id="app">
        <h1>Lista Linguaggi</h1>
        <ul>
            <li v-for="task in todoList">
                {{ task.language }}
            </li>
        </ul>
        <input type="text" v-model="language" placeholder="inserisci nuovo linguaggio">
        <button @click="addTodo">AGGIUNGI</button>
    </div>
    <script src="./js/script.js"></script>
</body>

</html>