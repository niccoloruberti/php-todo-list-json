<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP ToDo List JSON</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>
    <body>
        <div id="app">
           <div class="container mt-5">
                <!-- titolo -->
                <div class="row">
                    <div class="col-6 offset-3">
                        <h1 class="text-center">To Do List</h1>
                    </div>
                </div>
                <!-- lista -->
                <div class="row mt-5">
                    <div class="col-6 offset-3">
                        <ul class="list-group">
                            <li v-for="(item, index) in toDoList" class="list-group-item" :key="index">
                                {{ item.text }}
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- input -->
                <div class="row mt-3">
                    <div class="col-6 offset-3">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Inerisci un nuovo task" @keyup.enter="addTask" v-model="toDoItem">
                            <button class="btn btn-success" type="button" @click="addTask">Aggiungi</button>
                        </div>
                    </div>
                </div>
           </div>
        </div>

        <script type="text/javascript" src="./js/script.js"></script>
    </body>
</html>