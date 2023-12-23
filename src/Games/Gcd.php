<?php

namespace Php\Project\Games\Gcd;

use function Php\Project\Engine\start;

function playGcd()
{
    $numberOfRounds = 3;
    $minValue = 1;
    $maxValue = 100;
    $challenge = 'Find the greatest common divisor of given numbers.';
    $answer = [];
    $question = [];
    for ($i = 1; $i <= $numberOfRounds; $i += 1) {
        $number1 = rand($minValue, $maxValue);
        $number2 = rand($minValue, $maxValue);
        $question[] = "{$number1} {$number2}";
        for ($j = 1; $j <= min($number1, $number2); $j += 1) {
            if ($number1 % $j === 0 && $number2 % $j === 0) {
                $ans = $j;
            }
        }
        $answer[] = $ans;
    }
    start($challenge, $question, $answer);
}
