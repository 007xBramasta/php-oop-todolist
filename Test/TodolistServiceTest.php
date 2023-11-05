<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";

use Entity\Todolist;
use Service\TodolistServiceImpl;
use Repository\TodoListRepositoryImpl;

function testShowTodolist(){

    $todolistRepository =  new TodoListRepositoryImpl();
    $todolistRepository->todolist[1] = new Todolist("Belajar PHP");
    $todolistRepository->todolist[2] = new Todolist("Belajar PHP OOP");
    $todolistRepository->todolist[3] = new Todolist("Belajar PHP Database");

    $todolistService = new TodolistServiceImpl($todolistRepository);

    $todolistService->showTodoList();

}

function testAddTodolist(): void
{

    $todolistRepository =  new TodoListRepositoryImpl();

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodoList("Belajar PHP");
    $todolistService->addTodoList("Belajar OOP");
    $todolistService->addTodoList("Belajar Database");

    $todolistService->showTodoList();

}

function testRemoveTodolist(): void
{

    $todolistRepository =  new TodoListRepositoryImpl();

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodoList("Belajar PHP");
    $todolistService->addTodoList("Belajar OOP");
    $todolistService->addTodoList("Belajar Database");

    $todolistService->showTodoList();

    $todolistService->removeTodoList(1);
    $todolistService->showTodoList();

    $todolistService->removeTodoList(7);
    $todolistService->showTodoList();

    $todolistService->removeTodoList(2);
    $todolistService->showTodoList();

}

testRemoveTodolist();
