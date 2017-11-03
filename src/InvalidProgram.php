<?php
declare(strict_types=1);

namespace diconvergence\workshop\meeting;

use DomainException;

final class InvalidProgram extends DomainException
{
    public static function becauseSlotsOverlap()
    {
        return new self();
    }
}
