<?php
declare(strict_types=1);

namespace diconvergence\workshop\meeting\test;

use DateTimeImmutable;
use diconvergence\workshop\meeting\Meeting;
use diconvergence\workshop\meeting\Program;
use diconvergence\workshop\meeting\ProgramSlot;
use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\Uuid;

final class MeetingTest extends TestCase
{
    public function testThatValidMeetingsCanBeInstantiated()
    {
        $this->assertInstanceOf(Meeting::class, new Meeting(
            Uuid::uuid4(),
            '(Di|con)vergent mob refactoring',
            'This is a silly workshop, don\'t come',
            new DateTimeImmutable('2017-11-21 19:00'),
            new DateTimeImmutable('2017-11-21 21:00'),
            new Program([
                new ProgramSlot(
                    new DateTimeImmutable('2017-11-21 19:00'),
                    new DateTimeImmutable('2017-11-21 20:00'),
                    'Divergence',
                    'Main room'
                ),
                new ProgramSlot(
                    new DateTimeImmutable('2017-11-21 20:00'),
                    new DateTimeImmutable('2017-11-21 21:00'),
                    'Convergence',
                    'Main room'
                ),
            ])
        ));
    }
}
