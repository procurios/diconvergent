<?php
declare(strict_types=1);

namespace diconvergence\workshop\meeting;

use DomainException;

final class InvalidProgramSlot extends DomainException
{
    public static function becauseEndComesBeforeStart(): InvalidProgramSlot
    {
        return new self();
    }

    public static function becauseItStartsAndEndsOnDifferentDays(): InvalidProgramSlot
    {
        return new self();
    }
}
