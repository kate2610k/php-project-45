<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\start;

use const BrainGames\Engine\ROUNDS;

function play()
{
    $minLength = 5;
    $maxLength = 10;
    $minFirstValue = 1;
    $maxFirstValue = 100;
    $minStep = 1;
    $maxStep = 15;
    $edgePosition = 2;
    $challenge = 'What number is missing in the progression?';
    $answers = [];
    $questions = [];
    for ($i = 1; $i <= ROUNDS; $i += 1) {
        $length = rand($minLength, $maxLength);
        $start = rand($minFirstValue, $maxFirstValue);
        $step = rand($minStep, $maxStep);
        $progression = range($start, $start + ($length - 1) * $step, $step);
        $position = rand($edgePosition, $length - 1 - $edgePosition);
        $answers[] = $progression[$position];
        $progression[$position] = '..';
        $questions[] = implode(' ', $progression);
    }
    start($challenge, $questions, $answers);
}
