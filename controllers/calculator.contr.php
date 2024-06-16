<?php
// controllers/calculator_controller.php

require_once 'models/calculator.model.php';

class CalculatorController {
    private $model;

    public function __construct() {
        $this->model = new CalculatorModel();
    }

    public function handleRequest() {
        $result = '';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = $_POST['operation'];

            // Validasi input
            if ($this->validateInput($num1, $num2, $operation)) {
                $result = $this->model->calculate($num1, $num2, $operation);
            } else {
                $result = 'Invalid input';
            }
        }
        include 'views/calculator_view.php';
    }

    private function validateInput($num1, $num2, $operation) {
        // Memastikan input tidak kosong
        if (empty($num1) || empty($num2) || empty($operation)) {
            return false;
        }

        // Memastikan input adalah angka
        if (!is_numeric($num1) || !is_numeric($num2)) {
            return false;
        }

        // Memastikan operasi valid
        if (!in_array($operation, ['add', 'subtract', 'multiply', 'divide'])) {
            return false;
        }

        return true;
    }
}
