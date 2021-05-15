<?php

declare(strict_types=1);

namespace Yatzy;

use Exception;

class Yatzy
{
    /**
     * @var Dice[]
     */
    private array $dice = [];

    /**
     * @var int[]
     */
    private array $counts;

    /**
     * @throws Exception
     */
    public function __construct(Dice $dice1, Dice $dice2, Dice $dice3, Dice $dice4, Dice $dice5)
    {
        $this->dice[0] = $dice1;
        $this->dice[1] = $dice2;
        $this->dice[2] = $dice3;
        $this->dice[3] = $dice4;
        $this->dice[4] = $dice5;

        $this->calculateCounts();
    }

    public function chance(): int
    {
        return array_reduce($this->dice, static function (int $acc, Dice $dice) {
            return $dice->getDice() + $acc;
        }, 0);
    }

    public function yatzyScore(): int
    {
        return in_array(5, $this->counts, true) ? 50 : 0;
    }

    public function ones(): int
    {
        return $this->getDiceCountOf(1);
    }

    public function twos(): int
    {
        return $this->getDiceCountOf(2);
    }

    public function threes(): int
    {
        return $this->getDiceCountOf(3);
    }

    public function fours(): int
    {
        return $this->getDiceCountOf(4);
    }

    public function fives(): int
    {
        return $this->getDiceCountOf(5);
    }

    public function sixes(): int
    {
        return $this->getDiceCountOf(6);
    }

    public function onePair(): int
    {
        if (! in_array(2, $this->counts, true)) {
            return 0;
        }

        $counts = array_reverse($this->counts);
        foreach ($counts as $dice => $count) {
            if ($count === 2) {
                return (6 - $dice) * 2;
            }
        }
        return 0;
    }

    public function twoPair(): int
    {
        $counts = array_filter($this->counts, static function ($count) {
            return $count >= 2;
        });

        if (count($counts) !== 2) {
            return 0;
        }

        $score = 0;
        foreach ($counts as $dice => $count) {
            $score += $dice;
        }

        return $score * 2;
    }

    public function three_of_a_kind(): int
    {
        $counts = array_filter($this->counts, static function ($count) {
            return $count >= 3;
        });

        if (count($counts) === 0) {
            return 0;
        }

        return array_key_first($counts) * 3;
    }

    public function smallStraight(): int
    {
        $smallStraight = $this->counts;
        array_pop($smallStraight);

        return $this->isStraight($smallStraight) ? 15 : 0;
    }

    public function largeStraight(): int
    {
        $largeStraight = $this->counts;
        array_shift($largeStraight);

        return $this->isStraight($largeStraight) ? 20 : 0;
    }

    public function fullHouse(): int
    {
        $counts = array_filter($this->counts, static function ($count) {
            return $count === 2 || $count === 3;
        });

        if (count($counts) !== 2) {
            return 0;
        }

        $sum = 0;
        foreach ($counts as $dice => $count) {
            $sum += $count * $dice;
        }

        return $sum;
    }

    private function getDiceCountOf(int $dice): int
    {
        return $this->counts[$dice] * $dice;
    }

    /**
     * @param int[] $straight
     */
    private function isStraight(array $straight): bool
    {
        return array_reduce($straight, static function ($acc, $count) {
            return $count === 1 ? ++$acc : $acc;
        }, 0) === 5;
    }

    private function calculateCounts(): void
    {
        $this->counts = array_fill(1, 6, 0);
        ++$this->counts[$this->dice[0]->getDice()];
        ++$this->counts[$this->dice[1]->getDice()];
        ++$this->counts[$this->dice[2]->getDice()];
        ++$this->counts[$this->dice[3]->getDice()];
        ++$this->counts[$this->dice[4]->getDice()];
    }
}
