<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\start;

use const BrainGames\Engine\ROUNDS;

function play()
{
    $minNumber = -18;
    $maxNumber = 50;
    $challenge = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $answers = [];
    $questions = [];
    for ($i = 1; $i <= ROUNDS; $i += 1) {
        $number = rand($minNumber, $maxNumber);
        $questions[] = $number;
        $answers[] = isPrimeNumber($number) ? 'yes' : 'no';
    }
    start($challenge, $questions, $answers);
}

function isPrimeNumber(int $num)
{
    if ($num >= 2) {
        for ($i = 2; $i <= sqrt($num); $i += 1) {
            if ($num % $i === 0) {
                return false;
            }
        }
        return true;
    }
    return false;
}
