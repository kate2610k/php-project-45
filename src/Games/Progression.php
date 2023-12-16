<?php

namespace Php\Project\Games\Progression;

use function Php\Project\Engine\start;

function playProgression()
{
    $challenge = 'What number is missing in the progression?';
    $answer = [];
    $question = [];
    for ($i = 1; $i <= 3; $i += 1) {
        $numberSign = rand(0, 2);
        $length = rand(5, 10);
        $start = rand(1, 100);
        $step = rand(1, 15);
        $progression = range($start, $start + ($length - 1) * $step, $step);
        $pos = rand(2, $length - 3);

        $answer[] = $progression[$pos];

        $progression[$pos] = '..';
        $question[] = implode(' ', $progression);
    }
    start($challenge, $question, $answer);
}
