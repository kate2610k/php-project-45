<?php

namespace Php\Project\Engine;

use function cli\line;
use function cli\prompt;

function start($challenge, $questionAll, $answerAll)
{
    line('Welcome to the Brain Games!');
    $name = prompt("May I have your name?");
    line("Hello, %s!", $name);
    line($challenge);

    $count = 0;
    while ($count <= 3) {
        if ($count === 3) {
            line("Congratulations, %s!", $name);
            break;
        }

        $answer = prompt('Question: ' . $questionAll[$count]);
        if ($answer == $answerAll[$count]) {
            $count += 1;
            line('Correct!');
        } else {
            line($answer . "  is wrong answer ;(. Correct answer was " . $answerAll[$count]);
            line("Let's try again, %s!", $name);
            break;
        }
    }
}
