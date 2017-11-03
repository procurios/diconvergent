<?php
declare(strict_types=1);

namespace diconvergence\workshop\meeting\test;

use DateTimeImmutable;
use diconvergence\workshop\meeting\InvalidProgram;
use diconvergence\workshop\meeting\Meeting;
use diconvergence\workshop\meeting\MeetingDuration;
use Generator;
use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\Uuid;

final class ProgramTest extends TestCase
{
    /**
     * @return Generator
     */
    public function overlappingProgramSlotTimeProvider(): Generator
    {
        yield ['9:00', '10:30', 'Ends during'];
        yield ['10:30', '13:00', 'Starts during'];
        yield ['10:00', '11:00', 'Same'];
        yield ['10:10', '10:50', 'Is encompassed by'];
        yield ['09:00', '13:00', 'Encompasses'];
    }

    /**
     * @param string $startTime
     * @param string $endTime
     * @param string $reason
     * @return void
     * @dataProvider overlappingProgramSlotTimeProvider
     */
    public function testThatItDoesNotAcceptOverlappingProgramSlots(string $startTime, string $endTime, string $reason): void
    {
        $this->expectException(InvalidProgram::class);
        new Meeting(
            Uuid::uuid4(),
            'This is a test',
            'This is a test description',
            'M01',
            new MeetingDuration(new DateTimeImmutable('2016-09-29 09:00'), new DateTimeImmutable('2016-09-29 18:00')),
            false,
            'This is a test sub title',
            [
                [
                    'date' => '2016-09-29',
                    'startTime' => '10:00',
                    'endTime' => '11:00',
                    'title' => 'Opening',
                    'room' => 'White room',
                ],
                [
                    'date' => '2016-09-29',
                    'startTime' => $startTime,
                    'endTime' => $endTime,
                    'title' => 'Intro OOP',
                    'room' => 'White room',
                ],
            ]
        );
    }

    /**
     * @param string $startTime
     * @param string $endTime
     * @param string $reason
     * @return void
     * @dataProvider overlappingProgramSlotTimeProvider
     */
    public function testThatItAcceptsOverlappingProgramSlotsInDifferentRooms(string $startTime, string $endTime, string $reason): void
    {
        try {
            new Meeting(
                Uuid::uuid4(),
                'This is a test',
                'This is a test description',
                'M01',
                new MeetingDuration(new DateTimeImmutable('2016-09-29 09:00'), new DateTimeImmutable('2016-09-29 18:00')),
                false,
                'This is a test sub title',
                [
                    [
                        'date' => '2016-09-29',
                        'startTime' => '10:00',
                        'endTime' => '11:00',
                        'title' => 'Opening',
                        'room' => 'White room',
                    ],
                    [
                        'date' => '2016-09-29',
                        'startTime' => $startTime,
                        'endTime' => $endTime,
                        'title' => 'Intro OOP',
                        'room' => 'Black room',
                    ],
                ]
            );
        } catch (InvalidProgram $e) {
            $this->fail($reason);
        }
    }

    /**
     * @return Generator
     */
    public function nonOverlappingProgramSlotTimeProvider(): Generator
    {
        yield ['9:00', '10:00', 'Starts before'];
        yield ['11:00', '12:00', 'Starts after'];
    }

    /**
     * @param string $startTime
     * @param string $endTime
     * @param string $reason
     * @return void
     * @dataProvider nonOverlappingProgramSlotTimeProvider
     */
    public function testThatItDoesAcceptsProgramSlotsThatDoNotOverlap(string $startTime, string $endTime, string $reason): void
    {
        try {
            new Meeting(
                Uuid::uuid4(),
                'This is a test',
                'This is a test description',
                'M01',
                new MeetingDuration(new DateTimeImmutable('2016-09-29 09:00'), new DateTimeImmutable('2016-09-29 18:00')),
                false,
                'This is a test sub title',
                [
                    [
                        'date' => '2016-09-29',
                        'startTime' => '10:00',
                        'endTime' => '11:00',
                        'title' => 'Opening',
                        'room' => 'White room',
                    ],
                    [
                        'date' => '2016-09-29',
                        'startTime' => $startTime,
                        'endTime' => $endTime,
                        'title' => 'Intro OOP',
                        'room' => 'White room',
                    ],
                ]
            );
        } catch (InvalidProgram $e) {
            $this->fail($reason);
        }
    }
}
