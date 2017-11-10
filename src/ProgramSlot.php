<?php
declare(strict_types=1);

namespace diconvergence\workshop\meeting;

use DateTimeImmutable;

final class ProgramSlot
{
    /** @var DateTimeImmutable */
    private $start;
    /** @var DateTimeImmutable */
    private $end;
    /** @var string */
    private $title;
    /** @var string */
    private $room;

    /**
     * @param DateTimeImmutable $start
     * @param DateTimeImmutable $end
     * @param string $title
     * @param string $room
     */
    public function __construct(DateTimeImmutable $start, DateTimeImmutable $end, string $title, string $room)
    {
        $this->start = $start;
        $this->end = $end;
        $this->title = $title;
        $this->room = $room;
    }
}
