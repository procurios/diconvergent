<?php
declare(strict_types=1);

namespace diconvergence\workshop\meeting\test;

use DateTimeImmutable;
use diconvergence\workshop\meeting\InvalidDuration;
use diconvergence\workshop\meeting\Meeting;
use diconvergence\workshop\meeting\MeetingDuration;
use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\Uuid;

final class DurationTest extends TestCase
{
    public function testThatMeetingsCannotEndBeforeTheyStart()
    {
        $this->expectException(InvalidDuration::class);
        new Meeting(
            Uuid::uuid4(),
            'This is a test',
            'This is a test description',
            'M01',
            new MeetingDuration(new DateTimeImmutable('2016-09-29 09:00'), new DateTimeImmutable('2016-09-29 08:00')),
            false,
            'This is a test sub title',
            [
                [
                    'date' => '2016-09-29',
                    'startTime' => '09:00',
                    'endTime' => '09:30',
                    'title' => 'Opening',
                    'room' => 'White room',
                ],
                [
                    'date' => '2016-09-29',
                    'startTime' => '09:30',
                    'endTime' => '10:30',
                    'title' => 'Intro OOP',
                    'room' => 'Black room',
                ],
                [
                    'date' => '2016-09-29',
                    'startTime' => '09:30',
                    'endTime' => '10:00',
                    'title' => 'Intro FP',
                    'room' => 'White room',
                ],
            ]
        );
    }
}
