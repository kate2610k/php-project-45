<?php

namespace Php\Project\Engine;

use function cli\line;
use function cli\prompt;

function start($challenge, $questionAll, $answerAll)
{
    $count = 0;
    $numberOfRounds = 3;
    line('Welcome to the Brain Games!');
    $name = prompt("May I have your name?");
    line("Hello, %s!", $name);
    line($challenge);
    while ($count <= $numberOfRounds) {
        if ($count === $numberOfRounds) {
            line("Congratulations, %s!", $name);
            break;
        }
        line("Question: {$questionAll[$count]}");
        $answer = prompt("Your answer");
        if ($answer == $answerAll[$count]) {
            $count += 1;
            line('Correct!');
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$answerAll[$count]}'.");
            line("Let's try again, %s!", $name);
            break;
        }
    }
}
