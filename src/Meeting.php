<?php
declare(strict_types=1);

namespace diconvergence\workshop\meeting;

use Ramsey\Uuid\Uuid;

final class Meeting
{
    /** @var Uuid */
    private $meetingId;
    /** @var string */
    private $title;
    /** @var string */
    private $description;
    /** @var string */
    private $code;
    /** @var MeetingDuration */
    private $duration;
    /** @var bool */
    private $isPublished;
    /** @var string */
    private $subTitle;
    /** @var Program */
    private $program;

    /**
     * @param Uuid $meetingId
     * @param string $title
     * @param string $description
     * @param string $code
     * @param MeetingDuration $duration
     * @param bool $isPublished
     * @param string $subTitle
     * @param Program $program
     */
    public function __construct(Uuid $meetingId, string $title, string $description, string $code,
        MeetingDuration $duration, bool $isPublished, string $subTitle, Program $program) {
        $this->meetingId = $meetingId;
        $this->title = $title;
        $this->description = $description;
        $this->code = $code;
        $this->duration = $duration;
        $this->isPublished = $isPublished;
        $this->subTitle = $subTitle;
        $this->program = $program;
    }

    /**
     * @return Uuid
     */
    public function getMeetingId(): Uuid
    {
        return $this->meetingId;
    }

    /**
     * @param Uuid $meetingId
     * @return Meeting
     */
    public function setMeetingId(Uuid $meetingId): Meeting
    {
        $this->meetingId = $meetingId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Meeting
     */
    public function setTitle(string $title): Meeting
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Meeting
     */
    public function setDescription(string $description): Meeting
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return Meeting
     */
    public function setCode(string $code): Meeting
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return MeetingDuration
     */
    public function getDuration(): MeetingDuration
    {
        return $this->duration;
    }

    /**
     * @param MeetingDuration $duration
     * @return Meeting
     */
    public function setDuration(MeetingDuration $duration): Meeting
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPublished(): bool
    {
        return $this->isPublished;
    }

    /**
     * @param bool $isPublished
     * @return Meeting
     */
    public function setIsPublished(bool $isPublished): Meeting
    {
        $this->isPublished = $isPublished;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubTitle(): string
    {
        return $this->subTitle;
    }

    /**
     * @param string $subTitle
     * @return Meeting
     */
    public function setSubTitle(string $subTitle): Meeting
    {
        $this->subTitle = $subTitle;
        return $this;
    }

    /**
     * @return Program
     */
    public function getProgram(): Program
    {
        return $this->program;
    }

    /**
     * @param Program $program
     * @return Meeting
     */
    public function setProgram(Program $program): Meeting
    {
        $this->program = $program;
        return $this;
    }
}

