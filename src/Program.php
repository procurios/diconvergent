<?php
declare(strict_types=1);

namespace diconvergence\workshop\meeting;

final class Program
{
    /** @var ProgramSlot[] */
    private $program;

    /**
     * @param ProgramSlot[] $program
     * @throws InvalidProgram
     */
    public function __construct(array $program) {
        $this->program = $program;
        $this->programSlotsCannotOverlap();
    }

    /**
     * @return void
     * @throws InvalidProgram
     */
    private function programSlotsCannotOverlap(): void
    {
        foreach ($this->program as $i => $thisSlot) {
            foreach (array_slice($this->program, $i + 1) as $thatSlot) {
                if ($thisSlot->overlapsWith($thatSlot)) {
                    throw InvalidProgram::becauseSlotsOverlap();
                }
            }
        }
    }
}
