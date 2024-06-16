<?php
// index.php

require_once 'controllers/calculator.contr.php';

$controller = new CalculatorController();
$controller->handleRequest();
