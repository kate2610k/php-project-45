<?php

namespace Php\Project\Games\Prime;

use function Php\Project\Engine\start;

function playPrime()
{
    $numberOfRounds = 3;
    $minNumber = -18;
    $maxNumber = 50;

    $challenge = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $answer = [];
    $question = [];

    for ($i = 1; $i <= $numberOfRounds; $i += 1) {
        $number = rand($minNumber, $maxNumber);

        $question[] = $number;
        if (isPrimeNumber($number)) {
            $answer[] = 'yes';
        } else {
            $answer[] = 'no';
        }
    }
    start($challenge, $question, $answer);
}

function isPrimeNumber($num)
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
