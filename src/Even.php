<?php

namespace Php\Project\Even;

use function cli\line;
use function cli\prompt;

function start()
{
    line('Welcome to the Brain Games!');
    $name = prompt("May I have your name?");
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $count = 0;
    while ($count <= 3) {
        if ($count === 3) {
            line("Congratulations, %s!", $name);
            break;
        }
        $num = rand(1, 100);
        $answer = prompt('Question: ' . $num);
        if ($answer == 'no') {
            if ($num % 2 !== 0) {
                $count += 1;
                line('Correct!');
            } else {
                line("'no' is wrong answer ;(. Correct answer was 'yes'");
                line("Let's try again, %s!", $name);
                break;
            }
        } elseif ($answer == 'yes') {
            if ($num % 2 === 0) {
                $count += 1;
                line('Correct!');
            } else {
                line("'yes' is wrong answer ;(. Correct answer was 'no'");
                line("Let's try again, %s!", $name);
                break;
            }
        }
    }
}
