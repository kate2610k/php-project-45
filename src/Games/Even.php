<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\start;

use const BrainGames\Engine\ROUNDS;

function play()
{
    $minValue = 0;
    $maxValue = 100;
    $challenge = 'Answer "yes" if the number is even, otherwise answer "no".';
    $answers = [];
    $questions = [];
    for ($i = 1; $i <= ROUNDS; $i += 1) {
        $number = rand($minValue, $maxValue);
        $questions[] = $number;
        $answers[] = $number % 2 === 0 ? 'yes' : 'no';
    }
    start($challenge, $questions, $answers);
}
