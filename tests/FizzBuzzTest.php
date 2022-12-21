<?php

namespace Tests;

use Kata\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function testIsMultipleOfThreeReturnTrue(): void
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals(true, $fizzBuzz->isMultipleOfThree(3));
    }

    public function testMultipleOfThreeReturnFalse(): void
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals(false, $fizzBuzz->isMultipleOfThree(1));
    }

    public function testIsMultipleOfFiveReturnTrue(): void
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals(true, $fizzBuzz->isMultipleOfFive(5));
    }

    public function testMultipleOfFiveReturnFalse(): void
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals(false, $fizzBuzz->isMultipleOfFive(1));
    }

    public function testBuildReturnCorrectSentence(): void
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals('3 = Fizz' . PHP_EOL, $fizzBuzz->buildSentence(3, 'Fizz'));
    }

    public function testBuildReturnIncorrectSentence(): void
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertNotEquals('3 = Fizz' . PHP_EOL, $fizzBuzz->buildSentence(1, 'Fizz'));
    }
}