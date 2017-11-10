<?php
declare(strict_types=1);

namespace diconvergence\workshop\meeting;

use DateTimeImmutable;
use Ramsey\Uuid\UuidInterface;

final class Meeting
{
    /** @var UuidInterface */
    private $meetingId;
    /** @var string */
    private $title;
    /** @var string */
    private $description;
    /** @var DateTimeImmutable */
    private $start;
    /** @var DateTimeImmutable */
    private $end;
    /** @var Program */
    private $program;

    /**
     * @param UuidInterface $meetingId
     * @param string $title
     * @param string $description
     * @param DateTimeImmutable $start
     * @param DateTimeImmutable $end
     * @param Program $program
     */
    public function __construct(
        UuidInterface $meetingId,
        string $title,
        string $description,
        DateTimeImmutable $start,
        DateTimeImmutable $end,
        Program $program
    ) {
        $this->meetingId = $meetingId;
        $this->title = $title;
        $this->description = $description;
        $this->start = $start;
        $this->end = $end;
        $this->program = $program;
    }
}
