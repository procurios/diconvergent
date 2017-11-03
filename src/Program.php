<?php
declare(strict_types=1);

namespace diconvergence\workshop\meeting;

final class Program
{
    /** @var array */
    private $program;

    /**
     * @param array $program
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
                if ($thisSlot['room'] !== $thatSlot['room']) {
                    continue;
                }
                if ($thisSlot['date'] !== $thatSlot['date']) {
                    continue;
                }
                if ($thatSlot['endTime'] > $thisSlot['startTime'] && $thatSlot['endTime'] < $thisSlot['endTime']) {
                    throw InvalidProgram::becauseSlotsOverlap();
                }
                if ($thatSlot['startTime'] > $thisSlot['startTime'] && $thatSlot['startTime'] < $thisSlot['endTime']) {
                    throw InvalidProgram::becauseSlotsOverlap();
                }
                if ($thisSlot['startTime'] >= $thatSlot['startTime'] && $thisSlot['endTime'] <= $thatSlot['endTime']) {
                    throw InvalidProgram::becauseSlotsOverlap();
                }
            }
        }
    }
}
