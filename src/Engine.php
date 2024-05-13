<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS = 3;

function start(string $challenge, array $questions, array $answers)
{
    line('Welcome to the Brain Games!');
    $name = prompt("May I have your name?");
    line("Hello, %s!", $name);
    line($challenge);
    $count = 0;
    for ($count; $count < ROUNDS; $count += 1) {
        line("Question: {$questions[$count]}");
        $answer = prompt("Your answer");
        if ($answer != $answers[$count]) {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$answers[$count]}'.");
            line("Let's try again, %s!", $name);
            return;
        }
        line('Correct!');
    }
    line("Congratulations, %s!", $name);
}
