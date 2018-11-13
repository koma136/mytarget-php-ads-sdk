<?php

namespace Koma136\MyTarget\Domain\V2\Banner;

use Koma136\MyTarget\Mapper\Annotation\Field;

class ModerationReason
{
    /**
     * @var string
     * @Field(name="code", type="string")
     */
    private $code;

    /**
     * @var string
     * @Field(name="message", type="string")
     */
    private $message;

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }
}
