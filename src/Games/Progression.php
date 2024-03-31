<?php

namespace PhpProject\Games\Progression;

use function PhpProject\Engine\start;

use const PhpProject\Engine\ROUNDS;

function playProgression()
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
        $pos = rand($edgePosition, $length - 1 - $edgePosition);
        $answers[] = $progression[$pos];
        $progression[$pos] = '..';
        $questions[] = implode(' ', $progression);
    }
    start($challenge, $questions, $answers);
}
