<?php

namespace PhpProject\Games\Gcd;

use function PhpProject\Engine\start;

use const PhpProject\Engine\ROUNDS;

function playGcd()
{
    $minValue = 1;
    $maxValue = 100;
    $challenge = 'Find the greatest common divisor of given numbers.';
    $answers = [];
    $questions = [];
    for ($i = 1; $i <= ROUNDS; $i += 1) {
        $number1 = rand($minValue, $maxValue);
        $number2 = rand($minValue, $maxValue);
        $questions[] = "{$number1} {$number2}";
        $answers[] = findGcd($number1, $number2);
    }
    start($challenge, $questions, $answers);
}

function findGcd(int $number1, int $number2)
{
    $ans = 1;
    for ($j = 2; $j <= min($number1, $number2); $j += 1) {
        if ($number1 % $j === 0 && $number2 % $j === 0) {
            $ans = $j;
        }
    }
    return $ans;
}
