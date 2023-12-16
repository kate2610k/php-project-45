<?php

namespace Php\Project\Games\Even;

use function Php\Project\Engine\start;

function playEven()
{
    $challenge = 'Answer "yes" if the number is even, otherwise answer "no".';
    $answer = [];
    $question = [];

    for ($i = 1; $i <= 3; $i += 1) {
        $number = rand(0, 100);
        $question[] = $number;
        if ($number % 2 == 0) {
            $answer[] = 'yes';
        } else {
            $answer[] = 'no';
        }
    }
    start($challenge, $question, $answer);
}
