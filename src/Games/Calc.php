<?php

namespace Php\Project\Games\Calc;

use function Php\Project\Engine\start;

function playCalc()
{
    $numberOfRounds = 3;
    $minValueAddition = 0;
    $minValueMultiplication = 0;
    $maxValueAddition = 100;
    $maxValueMultiplication = 10;

    $challenge = 'What is the result of the expression?';
    $answer = [];
    $question = [];

    for ($i = 1; $i <= $numberOfRounds; $i += 1) {
        $numberSign = rand(0, 2);
        $signs = array('+', '-', '*');
        if ($numberSign == 2) {
            $number1 = rand($minValueMultiplication, $maxValueMultiplication);
            $number2 = rand($minValueMultiplication, $maxValueMultiplication);
        } else {
            $number1 = rand($minValueAddition, $maxValueAddition);
            $number2 = rand($minValueAddition, $maxValueAddition);
        }

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
