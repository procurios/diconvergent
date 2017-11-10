<?php
declare(strict_types=1);

namespace diconvergence\workshop\meeting;

use Webmozart\Assert\Assert;

final class Program
{
    /** @var ProgramSlot[] */
    private $programSlots;

    /**
     * @param ProgramSlot[] $programSlots
     */
    public function __construct(array $programSlots)
    {
        Assert::allIsInstanceOf($programSlots, ProgramSlot::class);
        $this->programSlots = $programSlots;
    }
}
