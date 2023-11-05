<?php

require_once "../Model/ToDoList.php";
require_once "../BusinessLogic/ShowToDoList.php";
require_once "../BusinessLogic/AddToDoList.php";
require_once "../BusinessLogic/RemoveToDoList.php";



addToDoList("Bram");
addToDoList("Tio");
addToDoList("Domes");
addToDoList("Kirana");
addToDoList("Nova");
 
showToDoList();

removeToDoList(3);

showToDoList();

removeToDoList(2);

showToDoList();

 $succes = removeToDoList(4);
 var_dump($succes);
 
 showToDoList();