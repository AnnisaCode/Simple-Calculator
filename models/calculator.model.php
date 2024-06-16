<?php
// models/CalculatorModel.php

class CalculatorModel {
    public function calculate($num1, $num2, $operation) {
        switch ($operation) {
            case 'add':
                return $num1 + $num2;
            case 'subtract':
                return $num1 - $num2;
            case 'multiply':
                return $num1 * $num2;
            case 'divide':
                if ($num2 == 0) {
                    return 'Error: Division by zero';
                }
                return $num1 / $num2;
            default:
                return 'Invalid operation';
        }
    }
}
