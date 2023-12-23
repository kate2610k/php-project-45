<?php

namespace Php\Project\Games\Progression;

use function Php\Project\Engine\start;

function playProgression()
{
    $numberOfRounds = 3;
    $minLength = 5;
    $maxLength = 10;
    $minFirstValue = 1;
    $maxFirstValue = 100;
    $minStep = 1;
    $maxStep = 15;
    $edgePosition = 2;
    $challenge = 'What number is missing in the progression?';
    $answer = [];
    $question = [];
    for ($i = 1; $i <= $numberOfRounds; $i += 1) {
        $length = rand($minLength, $maxLength);
        $start = rand($minFirstValue, $maxFirstValue);
        $step = rand($minStep, $maxStep);
        $progression = range($start, $start + ($length - 1) * $step, $step);
        $pos = rand($edgePosition, $length - 1 - $edgePosition);
        $answer[] = $progression[$pos];
        $progression[$pos] = '..';
        $question[] = implode(' ', $progression);
    }
    start($challenge, $question, $answer);
}
