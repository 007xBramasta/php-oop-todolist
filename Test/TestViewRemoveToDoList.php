<?php

require_once  "../Model/ToDoList.php";
require_once  "../View/ViewRemoveToDoList.php";
require_once "../BusinessLogic/AddToDoList.php";
require_once  "../BusinessLogic/ShowToDoList.php";

addToDoList("Bramasta");
addToDoList("Albatio");
addToDoList("Haryono");
addToDoList("Programmer");
addToDoList("Zaman");
addToDoList("Now");

showToDoList();

viewRemoveToDoList();

showToDoList();