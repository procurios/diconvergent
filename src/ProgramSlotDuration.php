<?php
declare(strict_types=1);

namespace diconvergence\workshop\meeting;

use DateTimeImmutable;

final class ProgramSlotDuration
{
    /** @var DateTimeImmutable */
    private $start;
    /** @var DateTimeImmutable */
    private $end;

    /**
     * @param DateTimeImmutable $start
     * @param DateTimeImmutable $end
     * @throws InvalidProgramSlot
     */
    public function __construct(DateTimeImmutable $start, DateTimeImmutable $end)
    {
        $this->start = $start;
        $this->end = $end;
        $this->slotsCannotEndBeforeTheyStart();
        $this->slotsEndOnTheSameDayTheyStart();
    }

    /**
     * @return void
     * @throws InvalidProgramSlot
     */
    private function slotsCannotEndBeforeTheyStart(): void
    {
        if ($this->end < $this->start) {
            throw InvalidProgramSlot::becauseEndComesBeforeStart();
        }
    }

    /**
     * @return void
     * @throws InvalidProgramSlot
     */
    private function slotsEndOnTheSameDayTheyStart(): void
    {
        if ($this->start->format('Y-m-d') !== $this->end->format('Y-m-d')) {
            throw InvalidProgramSlot::becauseItStartsAndEndsOnDifferentDays();
        }
    }

    /**
     * @param ProgramSlotDuration $that
     * @return bool
     */
    public function overlapsWith(ProgramSlotDuration $that): bool
    {
        return !$this->before($that) && !$that->before($this);
    }

    /**
     * @param ProgramSlotDuration $that
     * @return bool
     */
    private function before(ProgramSlotDuration $that): bool
    {
        return $this->end <= $that->start;
    }
}
