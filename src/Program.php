<?php
declare(strict_types=1);

namespace diconvergence\workshop\meeting;

final class Program
{
    /** @var array */
    private $program;

    /**
     * @param ProgramSlot[] $program
     */
    public function __construct(array $program) {
        $this->program = $program;
        $this->programSlotsCannotOverlap();
    }

    /**
     * @return void
     */
    private function programSlotsCannotOverlap(): void
    {
        foreach ($this->program as $i => $thisSlot) {
            foreach (array_slice($this->program, $i + 1) as $thatSlot) {
                if ($thisSlot->getRoom() !== $thatSlot->getRoom()) {
                    continue;
                }
                if ($thisSlot->getDate() !== $thatSlot->getDate()) {
                    continue;
                }
                if ($thatSlot->getEndTime() > $thisSlot->getStartTime() && $thatSlot->getEndTime() < $thisSlot->getEndTime()) {
                    throw InvalidProgram::becauseSlotsOverlap();
                }
                if ($thatSlot->getStartTime() > $thisSlot->getStartTime() && $thatSlot->getStartTime() < $thisSlot->getEndTime()) {
                    throw InvalidProgram::becauseSlotsOverlap();
                }
                if ($thisSlot->getStartTime() >= $thatSlot->getStartTime() && $thisSlot->getEndTime() <= $thatSlot->getEndTime()) {
                    throw InvalidProgram::becauseSlotsOverlap();
                }
            }
        }
    }
}
