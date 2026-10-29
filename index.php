<?php


$action = $_GET["action"];
$controller = $_GET["controller"];

require "src/controllers/{$controller}.php";

$controllerObject = new $controller;
$controllerObject->$action();
