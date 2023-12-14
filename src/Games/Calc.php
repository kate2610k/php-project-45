<?php

namespace Php\Project\Games\Calc;

use function Php\Project\Engine\start;

function playCalc()
{
    $challenge = 'What is the result of the expression?';
    $answer = [];
    $question = [];

    for ($i = 1; $i <= 3; $i += 1) {
        $numberSign = rand(0, 2);
        $signs = array('+', '-', '*');
        if ($numberSign == 2) {
            $number1 = rand(0, 10);
            $number2 = rand(0, 10);
        } else {
            $number1 = rand(0, 100);
            $number2 = rand(0, 100);
        }
        $question[] = $number1 . ' ' . $signs[$numberSign] . ' ' . $number2;
        if ($signs[$numberSign] === '+') {
            $answer[] = $number1 + $number2;
        } elseif ($signs[$numberSign] === '-') {
            $answer[] = $number1 - $number2;
        } else {
            $answer[] = $number1 * $number2;
        }
    }
    start($challenge, $question, $answer);
}
