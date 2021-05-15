<?php

declare(strict_types=1);

namespace Yatzy;

use Exception;

class Dice
{
    private int $dice;

    /**
     * Dice constructor.
     * @throws Exception
     */
    public function __construct(int $dice)
    {
        $this->mustBeValidDice($dice);
    }

    public function getDice(): int
    {
        return $this->dice;
    }

    /**
     * @throws Exception
     */
    private function mustBeValidDice(int $dice): void
    {
        if (! $this->isSixSidedDice($dice)) {
            throw new Exception('Dice must be an integer between one and six');
        }

        $this->dice = $dice;
    }

    private function isSixSidedDice(int $dice): bool
    {
        return $dice >= 1 && $dice <= 6;
    }
}
