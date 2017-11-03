<?php
declare(strict_types=1);

namespace diconvergence\workshop\meeting;

final class ProgramSlot
{
    /** @var string */
    private $date;
    /** @var string */
    private $startTime;
    /** @var string */
    private $endTime;
    /** @var string */
    private $title;
    /** @var string */
    private $room;

    /**
     * @param string $date
     * @param string $startTime
     * @param string $endTime
     * @param string $title
     * @param string $room
     */
    public function __construct(string $date, string $startTime, string $endTime, string $title, string $room)
    {
        $this->date = $date;
        $this->startTime = $startTime;
        $this->endTime = $endTime;
        $this->title = $title;
        $this->room = $room;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @return string
     */
    public function getStartTime(): string
    {
        return $this->startTime;
    }

    /**
     * @return string
     */
    public function getEndTime(): string
    {
        return $this->endTime;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getRoom(): string
    {
        return $this->room;
    }
}
