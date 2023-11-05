<?php

require_once "../Model/ToDoList.php";
require_once "../BusinessLogic/AddToDoList.php";

addToDoList("Bramasta");
addToDoList("Albatio");
addToDoList("Haryono");

var_dump($todolist);