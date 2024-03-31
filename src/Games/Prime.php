<?php

namespace PhpProject\Games\Prime;

use function PhpProject\Engine\start;

use const PhpProject\Engine\ROUNDS;

function playPrime()
{
    $minNumber = -18;
    $maxNumber = 50;
    $challenge = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $answers = [];
    $questions = [];
    for ($i = 1; $i <= ROUNDS; $i += 1) {
        $number = rand($minNumber, $maxNumber);
        $questions[] = $number;
        if (isPrimeNumber($number)) {
            $answers[] = 'yes';
        } else {
            $answers[] = 'no';
        }
    }
    start($challenge, $questions, $answers);
}

function isPrimeNumber(int $num)
{
    if ($num >= 4) {
        for ($i = 2; $i <= sqrt($num); $i += 1) {
            if ($num % $i === 0) {
                return false;
            }
        }
        return true;
    } elseif ($num === 2 || $num === 3) {
        return true;
    } else {
        return false;
    }
}
