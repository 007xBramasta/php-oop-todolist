<?php

require_once "../View/ViewAddToDoList.php";
require_once "../BusinessLogic/ShowToDoList.php";
require_once "../BusinessLogic/AddToDoList.php";

addToDoList("Bramasta");
addToDoList("Albatio");
addToDoList("Haryono");

viewAddToDoList();

showToDoList();

viewAddToDoList();

showToDoList();