<?php
declare(strict_types=1);

namespace diconvergence\workshop\meeting;

use DomainException;

final class InvalidDuration extends DomainException
{
    public static function becauseEndIsBeforeStart()
    {
        return new self();
    }
}
