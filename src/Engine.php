<?php

namespace PhpProject\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS = 3;

function start(string $challenge, array $questions, array $answers)
{
//    const ROUNDS = 3;
    line('Welcome to the Brain Games!');
    $name = prompt("May I have your name?");
    line("Hello, %s!", $name);
    line($challenge);
    for ($count = 0; $count < ROUNDS; $count += 1) {
        line("Question: {$questions[$count]}");
        $answer = prompt("Your answer");
        if ($answer == $answers[$count]) {
            line('Correct!');
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$answers[$count]}'.");
            line("Let's try again, %s!", $name);
            break;
        }
    }
    if ($count === ROUNDS) {
        line("Congratulations, %s!", $name);
    }

}
