<?php

require_once  __DIR__ . '/Entity/Todolist.php';
require_once  __DIR__ . '/Helper/InputHelper.php';
require_once  __DIR__ . '/Repository/TodoListRepository.php';
require_once  __DIR__ . '/Service/TodolistService.php';
require_once  __DIR__ . '/View/TodolistView.php';

use Repository\TodoListRepositoryImpl;
use Service\TodolistServiceImpl;
use View\TodolistView;

echo "Aplikasi Todolist" . PHP_EOL;

$todolistRepository =  new TodoListRepositoryImpl();
$todolistService = new TodolistServiceImpl($todolistRepository);
$todolistView = new TodolistView($todolistService);

$todolistView->showTodoList();