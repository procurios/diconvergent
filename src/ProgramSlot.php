<?php
declare(strict_types=1);

namespace diconvergence\workshop\meeting;

final class ProgramSlot
{
    /** @var ProgramSlotDuration */
    private $duration;
    /** @var string */
    private $title;
    /** @var string */
    private $room;

    /**
     * @param ProgramSlotDuration $duration
     * @param string $title
     * @param string $room
     */
    public function __construct(ProgramSlotDuration $duration, string $title, string $room)
    {
        $this->duration = $duration;
        $this->title = $title;
        $this->room = $room;
    }

    /**
     * @param ProgramSlot $that
     * @return bool
     */
    public function overlapsWith(ProgramSlot $that): bool
    {
        return $this->room === $that->room
            && $this->duration->overlapsWith($that->duration);
    }

    /**
     * @return ProgramSlotDuration
     */
    public function getDuration(): ProgramSlotDuration
    {
        return $this->duration;
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
