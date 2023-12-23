<?php

namespace Php\Project\Games\Calc;

use function Php\Project\Engine\start;

function playCalc()
{
    $numberOfRounds = 3;
    $minValue = 0;
    $maxValue = 10;
    $challenge = 'What is the result of the expression?';
    $answer = [];
    $question = [];
    for ($i = 1; $i <= $numberOfRounds; $i += 1) {
        $numberSign = rand(0, 2);
        $signs = array('+', '-', '*');
        $number1 = rand($minValue, $maxValue);
        $number2 = rand($minValue, $maxValue);
        $question[] = "{$number1} {$signs[$numberSign]} {$number2}";
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
