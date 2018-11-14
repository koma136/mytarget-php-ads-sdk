<?php

namespace Koma136\MyTarget\Domain\V2\Banner;

use Koma136\MyTarget\Mapper\Annotation\Field;

class VideoParams
{
    /**
     * @var bool
     * @Field(name="autoplay", type="bool")
     */
    private $autoplay;
    /**
     * @var int
     * @Field(name="height", type="int")
     */
    private $height;
    /**
     * @var bool
     * @Field(name="loop", type="bool")
     */
    private $loop;
    /**
     * @var bool
     * @Field(name="over_video", type="bool")
     */
    private $overVideo;
    /**
     * @var bool
     * @Field(name="sound_delay", type="bool")
     */
    private $soundDelay;
    /**
     * @var int
     * @Field(name="video_x", type="int")
     */
    private $videoX;
    /**
     * @var int
     *  @Field(name="video_y", type="int")
     */
    private $videoY;
    /**
     * @var int
     *  @Field(name="width", type="int")
     */
    private $width;

    /**
     * @return bool
     */
    public function isAutoplay(): bool
    {
        return $this->autoplay;
    }

    /**
     * @param bool $autoplay
     */
    public function setAutoplay(bool $autoplay): void
    {
        $this->autoplay = $autoplay;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight(int $height): void
    {
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getVideoX(): int
    {
        return $this->videoX;
    }

    /**
     * @param int $videoX
     */
    public function setVideoX(int $videoX): void
    {
        $this->videoX = $videoX;
    }

    /**
     * @return int
     */
    public function getVideoY(): int
    {
        return $this->videoY;
    }

    /**
     * @param int $videoY
     */
    public function setVideoY(int $videoY): void
    {
        $this->videoY = $videoY;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $width
     */
    public function setWidth(int $width): void
    {
        $this->width = $width;
    }

    /**
     * @return bool
     */
    public function isLoop(): bool
    {
        return $this->loop;
    }

    /**
     * @param bool $loop
     */
    public function setLoop(bool $loop): void
    {
        $this->loop = $loop;
    }

    /**
     * @return bool
     */
    public function isOverVideo(): bool
    {
        return $this->overVideo;
    }

    /**
     * @param bool $overVideo
     */
    public function setOverVideo(bool $overVideo): void
    {
        $this->overVideo = $overVideo;
    }

    /**
     * @return bool
     */
    public function isSoundDelay(): bool
    {
        return $this->soundDelay;
    }

    /**
     * @param bool $soundDelay
     */
    public function setSoundDelay(bool $soundDelay): void
    {
        $this->soundDelay = $soundDelay;
    }
}
