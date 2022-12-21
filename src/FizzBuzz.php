<?php

namespace Kata;

class FizzBuzz
{
    public function isMultipleOfThree(int $number): bool
    {
        return $number % 3 === 0;
    }

    public function isMultipleOfFive(int $number): bool
    {
        return $number % 5 === 0;
    }

    public function buildSentence(int $number, string $word): string
    {
        return $number . ' = ' . $word . PHP_EOL;
    }

    public function run(int $start, int $end): void
    {
        $i = $start;
        do {
            if($this->isMultipleOfThree($i) && $this->isMultipleOfFive($i)) {
                echo $this->buildSentence($i, 'FizzBuzz');
            } else if($this->isMultipleOfThree($i)) {
                echo $this->buildSentence($i,'Fizz');
            } else if($this->isMultipleOfFive($i)) {
                echo $this->buildSentence($i, 'Buzz');
            }

            $i++;
        } while($i <= $end);
    }
}

(new FizzBuzz())->run(1, 200);