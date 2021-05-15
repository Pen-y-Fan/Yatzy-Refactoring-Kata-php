<?php

declare(strict_types=1);

namespace Yatzy\Tests;

use Exception;
use PHPUnit\Framework\TestCase;
use Yatzy\Dice;
use Yatzy\Yatzy;

class YatzyTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function testChanceScoresSumOfAllDice(): void
    {
        self::assertSame(
            15,
            (
            new Yatzy(
                new Dice(2),
                new Dice(3),
                new Dice(4),
                new Dice(5),
                new Dice(1)
            )
            )
                ->chance()
        );
        self::assertSame(
            16,
            (
            new Yatzy(
                new Dice(3),
                new Dice(3),
                new Dice(4),
                new Dice(5),
                new Dice(1)
            )
            )
                ->chance()
        );
    }

    /**
     * @throws Exception
     */
    public function testOnesScoreSumOfOnes(): void
    {
        self::assertSame(
            0,
            (
            new Yatzy(
                new Dice(6),
                new Dice(2),
                new Dice(2),
                new Dice(4),
                new Dice(5)
            )
            )
                ->ones()
        );
        self::assertSame(
            1,
            (
            new Yatzy(
                new Dice(1),
                new Dice(2),
                new Dice(3),
                new Dice(4),
                new Dice(5)
            )
            )
                ->ones()
        );
        self::assertSame(
            2,
            (
            new Yatzy(
                new Dice(2),
                new Dice(2),
                new Dice(2),
                new Dice(1),
                new Dice(1)
            )
            )
                ->ones()
        );
        self::assertSame(
            4,
            (
            new Yatzy(
                new Dice(1),
                new Dice(1),
                new Dice(1),
                new Dice(1),
                new Dice(2)
            )
            )
                ->ones()
        );
    }

    /**
     * @throws Exception
     */
    public function testTwosScoreSumOfTwos(): void
    {
        self::assertSame(
            0,
            (
            new Yatzy(
                new Dice(1),
                new Dice(1),
                new Dice(3),
                new Dice(3),
                new Dice(3)
            )
            )
                ->twos()
        );
        self::assertSame(
            4,
            (
            new Yatzy(
                new Dice(1),
                new Dice(2),
                new Dice(3),
                new Dice(2),
                new Dice(6)
            )
            )
                ->twos()
        );
        self::assertSame(
            10,
            (
            new Yatzy(
                new Dice(2),
                new Dice(2),
                new Dice(2),
                new Dice(2),
                new Dice(2)
            )
            )
                ->twos()
        );
    }

    /**
     * @throws Exception
     */
    public function testThreesScoreSumOfThrees(): void
    {
        self::assertSame(
            0,
            (
            new Yatzy(
                new Dice(1),
                new Dice(2),
                new Dice(4),
                new Dice(5),
                new Dice(6)
            )
            )
                ->threes()
        );
        self::assertSame(
            6,
            (
            new Yatzy(
                new Dice(1),
                new Dice(2),
                new Dice(3),
                new Dice(2),
                new Dice(3)
            )
            )
                ->threes()
        );
        self::assertSame(
            12,
            (
            new Yatzy(
                new Dice(3),
                new Dice(3),
                new Dice(3),
                new Dice(3),
                new Dice(1)
            )
            )
                ->threes()
        );
    }

    /**
     * @throws Exception
     */
    public function testFoursScoreSumOfFours(): void
    {
        self::assertSame(
            0,
            (
            new Yatzy(
                new Dice(1),
                new Dice(5),
                new Dice(5),
                new Dice(5),
                new Dice(5)
            )
            )
                ->fours()
        );
        self::assertSame(
            4,
            (
            new Yatzy(
                new Dice(4),
                new Dice(5),
                new Dice(5),
                new Dice(5),
                new Dice(5)
            )
            )
                ->fours()
        );
        self::assertSame(
            8,
            (
            new Yatzy(
                new Dice(4),
                new Dice(4),
                new Dice(5),
                new Dice(5),
                new Dice(5)
            )
            )
                ->fours()
        );
        self::assertSame(
            12,
            (
            new Yatzy(
                new Dice(4),
                new Dice(4),
                new Dice(4),
                new Dice(5),
                new Dice(5)
            )
            )
                ->fours()
        );
    }

    /**
     * @throws Exception
     */
    public function testFivesScoreSumOfFives(): void
    {
        self::assertSame(
            0,
            (
            new Yatzy(
                new Dice(1),
                new Dice(1),
                new Dice(1),
                new Dice(1),
                new Dice(1)
            )
            )
                ->fives()
        );
        self::assertSame(
            15,
            (
            new Yatzy(
                new Dice(4),
                new Dice(4),
                new Dice(5),
                new Dice(5),
                new Dice(5)
            )
            )
                ->fives()
        );
        self::assertSame(
            10,
            (
            new Yatzy(
                new Dice(4),
                new Dice(4),
                new Dice(4),
                new Dice(5),
                new Dice(5)
            )
            )
                ->fives()
        );
        self::assertSame(
            20,
            (
            new Yatzy(
                new Dice(4),
                new Dice(5),
                new Dice(5),
                new Dice(5),
                new Dice(5)
            )
            )
                ->fives()
        );
    }

    /**
     * @throws Exception
     */
    public function testSixesScoreSumOfSixes(): void
    {
        self::assertSame(
            0,
            (
            new Yatzy(
                new Dice(4),
                new Dice(4),
                new Dice(4),
                new Dice(5),
                new Dice(5)
            )
            )
                ->sixes()
        );
        self::assertSame(
            6,
            (
            new Yatzy(
                new Dice(4),
                new Dice(4),
                new Dice(6),
                new Dice(5),
                new Dice(5)
            )
            )
                ->sixes()
        );
        self::assertSame(
            18,
            (
            new Yatzy(
                new Dice(6),
                new Dice(5),
                new Dice(6),
                new Dice(6),
                new Dice(5)
            )
            )
                ->sixes()
        );
    }

    /**
     * @throws Exception
     */
    public function testOnePairScoresSumOfBestPair(): void
    {
        self::assertSame(
            0,
            (
            new Yatzy(
                new Dice(1),
                new Dice(2),
                new Dice(3),
                new Dice(4),
                new Dice(5)
            )
            )
                ->onePair()
        );
        self::assertSame(
            2,
            (
            new Yatzy(
                new Dice(1),
                new Dice(1),
                new Dice(3),
                new Dice(5),
                new Dice(6)
            )
            )
                ->onePair()
        );
        self::assertSame(
            10,
            (
            new Yatzy(
                new Dice(5),
                new Dice(3),
                new Dice(3),
                new Dice(3),
                new Dice(5)
            )
            )
                ->onePair()
        );
        self::assertSame(
            12,
            (
            new Yatzy(
                new Dice(6),
                new Dice(6),
                new Dice(5),
                new Dice(5),
                new Dice(4)
            )
            )
                ->onePair()
        );
        self::assertSame(
            12,
            (
            new Yatzy(
                new Dice(5),
                new Dice(5),
                new Dice(6),
                new Dice(6),
                new Dice(4)
            )
            )
                ->onePair()
        );
    }

    /**
     * @throws Exception
     */
    public function testTwoDifferentPairsOfDiceScoresSumOfDiceInThoseTwoPairs(): void
    {
        self::assertSame(
            0,
            (
            new Yatzy(
                new Dice(3),
                new Dice(3),
                new Dice(6),
                new Dice(5),
                new Dice(4)
            )
            )
                ->twoPair()
        );
        // 4 of a kind is not 2 *different* pairs
        self::assertSame(
            0,
            (
            new Yatzy(
                new Dice(1),
                new Dice(1),
                new Dice(1),
                new Dice(1),
                new Dice(2)
            )
            )
                ->twoPair()
        );
        self::assertSame(
            6,
            (
            new Yatzy(
                new Dice(1),
                new Dice(1),
                new Dice(2),
                new Dice(2),
                new Dice(5)
            )
            )
                ->twoPair()
        );
        self::assertSame(
            22,
            (
            new Yatzy(
                new Dice(1),
                new Dice(5),
                new Dice(5),
                new Dice(6),
                new Dice(6)
            )
            )
                ->twoPair()
        );
    }

    /**
     * @throws Exception
     */
    public function testThreeOfAKindScoreSumOfThreeDice(): void
    {
        self::assertSame(
            0,
            (
            new Yatzy(
                new Dice(3),
                new Dice(3),
                new Dice(4),
                new Dice(4),
                new Dice(5)
            )
            )
                ->three_of_a_kind()
        );
        self::assertSame(
            9,
            (
            new Yatzy(
                new Dice(3),
                new Dice(3),
                new Dice(3),
                new Dice(4),
                new Dice(5)
            )
            )
                ->three_of_a_kind()
        );
        self::assertSame(
            9,
            (
            new Yatzy(
                new Dice(3),
                new Dice(3),
                new Dice(3),
                new Dice(2),
                new Dice(1)
            )
            )
                ->three_of_a_kind()
        );
        self::assertSame(
            15,
            (
            new Yatzy(
                new Dice(5),
                new Dice(3),
                new Dice(5),
                new Dice(4),
                new Dice(5)
            )
            )
                ->three_of_a_kind()
        );
        self::assertSame(
            15,
            (
            new Yatzy(
                new Dice(5),
                new Dice(5),
                new Dice(5),
                new Dice(4),
                new Dice(5)
            )
            )
                ->three_of_a_kind()
        );
        self::assertSame(
            15,
            (
            new Yatzy(
                new Dice(5),
                new Dice(5),
                new Dice(5),
                new Dice(5),
                new Dice(5)
            )
            )
                ->three_of_a_kind()
        );
    }

    /**
     * @throws Exception
     */
    public function testSmallStraightScoresFifteen(): void
    {
        self::assertSame(
            0,
            (
            new Yatzy(
                new Dice(1),
                new Dice(2),
                new Dice(2),
                new Dice(4),
                new Dice(5)
            )
            )
                ->smallStraight()
        );
        self::assertSame(
            15,
            (
            new Yatzy(
                new Dice(1),
                new Dice(2),
                new Dice(3),
                new Dice(4),
                new Dice(5)
            )
            )
                ->smallStraight()
        );
        self::assertSame(
            15,
            (
            new Yatzy(
                new Dice(2),
                new Dice(3),
                new Dice(4),
                new Dice(5),
                new Dice(1)
            )
            )
                ->smallStraight()
        );
        self::assertSame(
            15,
            (
            new Yatzy(
                new Dice(5),
                new Dice(4),
                new Dice(3),
                new Dice(2),
                new Dice(1)
            )
            )
                ->smallStraight()
        );
    }

    /**
     * @throws Exception
     */
    public function testLargeStraightScoresTwenty(): void
    {
        self::assertSame(
            0,
            (
            new Yatzy(
                new Dice(1),
                new Dice(2),
                new Dice(2),
                new Dice(4),
                new Dice(5)
            )
            )
                ->largeStraight()
        );
        self::assertSame(
            20,
            (
            new Yatzy(
                new Dice(2),
                new Dice(3),
                new Dice(4),
                new Dice(5),
                new Dice(6)
            )
            )
                ->largeStraight()
        );
        self::assertSame(
            20,
            (
            new Yatzy(
                new Dice(6),
                new Dice(2),
                new Dice(3),
                new Dice(4),
                new Dice(5)
            )
            )
                ->largeStraight()
        );
    }

    /**
     * @throws Exception
     */
    public function testFullHouseSumOfOnePairAndThreeDice(): void
    {
        self::assertSame(
            0,
            (
            new Yatzy(
                new Dice(2),
                new Dice(3),
                new Dice(4),
                new Dice(5),
                new Dice(6)
            )
            )
                ->fullHouse()
        );
        self::assertSame(
            8,
            (
            new Yatzy(
                new Dice(1),
                new Dice(1),
                new Dice(2),
                new Dice(2),
                new Dice(2)
            )
            )
                ->fullHouse()
        );
        self::assertSame(
            27,
            (
            new Yatzy(
                new Dice(6),
                new Dice(6),
                new Dice(5),
                new Dice(5),
                new Dice(5)
            )
            )
                ->fullHouse()
        );
    }

    /**
     * @throws Exception
     */
    public function testYatzyScoresFifty(): void
    {
        self::assertSame(
            0,
            (
            new Yatzy(
                new Dice(6),
                new Dice(6),
                new Dice(6),
                new Dice(6),
                new Dice(3)
            )
            )
                ->yatzyScore()
        );
        self::assertSame(
            50,
            (
            new Yatzy(
                new Dice(1),
                new Dice(1),
                new Dice(1),
                new Dice(1),
                new Dice(1)
            )
            )
                ->yatzyScore()
        );
        self::assertSame(
            50,
            (
            new Yatzy(
                new Dice(4),
                new Dice(4),
                new Dice(4),
                new Dice(4),
                new Dice(4)
            )
            )
                ->yatzyScore()
        );
        self::assertSame(
            50,
            (
            new Yatzy(
                new Dice(6),
                new Dice(6),
                new Dice(6),
                new Dice(6),
                new Dice(6)
            )
            )
                ->yatzyScore()
        );
    }

    /**
     * @throws Exception
     */
    public function testASevenSidedDiceThrowsException(): void
    {
        $this->expectExceptionMessage('Dice must be an integer between one and six');

        self::assertSame(
            0,
            (
            new Yatzy(
                new Dice(7),
                new Dice(6),
                new Dice(6),
                new Dice(6),
                new Dice(3)
            )
            )
                ->yatzyScore()
        );
    }

    /**
     * @throws Exception
     */
    public function testAZeroSidedDiceThrowsException(): void
    {
        $this->expectExceptionMessage('Dice must be an integer between one and six');

        self::assertSame(
            0,
            (
            new Yatzy(
                new Dice(0),
                new Dice(6),
                new Dice(6),
                new Dice(6),
                new Dice(3)
            )
            )
                ->yatzyScore()
        );
    }

    /**
     * @throws Exception
     */
    public function testANegativeSidedDiceThrowsException(): void
    {
        $this->expectExceptionMessage('Dice must be an integer between one and six');

        self::assertSame(
            0,
            (
            new Yatzy(
                new Dice(-1),
                new Dice(6),
                new Dice(6),
                new Dice(6),
                new Dice(3)
            )
            )
                ->yatzyScore()
        );
    }

    /**
     * @throws Exception
     */
    public function testAStringDiceThrowsException(): void
    {
        $this->expectExceptionMessage('Argument #1 ($dice) must be of type int, string given');

        /** @noinspection PhpStrictTypeCheckingInspection */
        self::assertSame(
            0,
            (new Yatzy(
                new Dice('1'),
                new Dice(6),
                new Dice(6),
                new Dice(6),
                new Dice(3)
            )
            )
                ->yatzyScore()
        );
    }
}
