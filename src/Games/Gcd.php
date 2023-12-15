<?php

namespace Php\Project\Games\Gcd;

use function Php\Project\Engine\start;

function playGcd()
{
    $challenge = 'Find the greatest common divisor of given numbers.';
    $answer = [];
    $question = [];

    for ($i = 1; $i <= 3; $i += 1) {
        $number1 = rand(1, 100);
        $number2 = rand(1, 100);
        $question[] = $number1 . ' ' . $number2;

        for ($j = 1; $j <= min($number1, $number2); $j += 1) {
            if ($number1 % $j === 0 && $number2 % $j === 0) {
                $ans = $j;
            }
        }
        $answer[] = $ans;
    }
    start($challenge, $question, $answer);
}
