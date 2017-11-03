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
    /** @var string */
    private $startDate;
    /** @var string */
    private $endDate;
    /** @var string */
    private $startTime;
    /** @var string */
    private $endTime;
    /** @var bool */
    private $isPublished;
    /** @var string */
    private $subTitle;
    /** @var array */
    private $program;

    /**
     * @param Uuid $meetingId
     * @param string $title
     * @param string $description
     * @param string $code
     * @param string $startDate
     * @param string $endDate
     * @param string $startTime
     * @param string $endTime
     * @param bool $isPublished
     * @param string $subTitle
     * @param array $program
     */
    public function __construct(Uuid $meetingId, string $title, string $description, string $code, string $startDate,
        string $endDate, string $startTime, string $endTime, bool $isPublished, string $subTitle, array $program) {
        $this->meetingId = $meetingId;
        $this->title = $title;
        $this->description = $description;
        $this->code = $code;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->startTime = $startTime;
        $this->endTime = $endTime;
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
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->startDate;
    }

    /**
     * @param string $startDate
     * @return Meeting
     */
    public function setStartDate(string $startDate): Meeting
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndDate(): string
    {
        return $this->endDate;
    }

    /**
     * @param string $endDate
     * @return Meeting
     */
    public function setEndDate(string $endDate): Meeting
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartTime(): string
    {
        return $this->startTime;
    }

    /**
     * @param string $startTime
     * @return Meeting
     */
    public function setStartTime(string $startTime): Meeting
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndTime(): string
    {
        return $this->endTime;
    }

    /**
     * @param string $endTime
     * @return Meeting
     */
    public function setEndTime(string $endTime): Meeting
    {
        $this->endTime = $endTime;
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
     * @return array
     */
    public function getProgram(): array
    {
        return $this->program;
    }

    /**
     * @param array $program
     * @return Meeting
     */
    public function setProgram(array $program): Meeting
    {
        $this->program = $program;
        return $this;
    }
}

