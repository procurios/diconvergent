<?php
declare(strict_types=1);

namespace diconvergence\workshop\meeting;

use DateTimeImmutable;

final class MeetingDuration
{
    /** @var DateTimeImmutable */
    private $start;
    /** @var DateTimeImmutable */
    private $end;

    /**
     * @param DateTimeImmutable $start
     * @param DateTimeImmutable $end
     * @throws InvalidDuration
     */
    public function __construct(DateTimeImmutable $start, DateTimeImmutable $end)
    {
        $this->start = $start;
        $this->end = $end;
        $this->meetingsCannotEndBeforeTheyStart();
    }

    /**
     * @return void
     * @throws InvalidDuration
     */
    private function meetingsCannotEndBeforeTheyStart(): void
    {
        if ($this->start > $this->end) {
            throw InvalidDuration::becauseEndIsBeforeStart();
        }
    }
}
