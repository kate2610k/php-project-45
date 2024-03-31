<?php

namespace PhpProject\Games\Calc;

use function PhpProject\Engine\start;

use const PhpProject\Engine\ROUNDS;

function playCalc()
{
    $minValue = 0;
    $maxValue = 10;
    $signs = ['+', '-', '*'];
    $challenge = 'What is the result of the expression?';
    $answers = [];
    $questions = [];
    for ($i = 1; $i <= ROUNDS; $i += 1) {
        $numberSign = rand(0, count($signs)-1);
        $number1 = rand($minValue, $maxValue);
        $number2 = rand($minValue, $maxValue);
        $questions[] = "{$number1} {$signs[$numberSign]} {$number2}";
        $answers[] = match($signs[$numberSign]) {
            '+' => $number1 + $number2,
            '-' => $number1 - $number2,
            '*' => $number1 * $number2,
        };
    }
    start($challenge, $questions, $answers);
}
