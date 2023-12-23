<?php

namespace Php\Project\Games\Even;

use function Php\Project\Engine\start;

function playEven()
{
    $numberOfRounds = 3;
    $minValue = 0;
    $maxValue = 100;

    $challenge = 'Answer "yes" if the number is even, otherwise answer "no".';
    $answer = [];
    $question = [];

    for ($i = 1; $i <= $numberOfRounds; $i += 1) {
        $number = rand($minValue, $maxValue);

        $question[] = $number;
        if ($number % 2 == 0) {
            $answer[] = 'yes';
        } else {
            $answer[] = 'no';
        }
    }
    start($challenge, $question, $answer);
}
