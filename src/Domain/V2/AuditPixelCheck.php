<?php

namespace Koma136\MyTarget\Domain\V2;

use Koma136\MyTarget\Mapper\Annotation\Field;

class AuditPixelCheck
{
    /**
     * @var string
     * @Fiald (name="audit_pixel", type="string")
     */
    private $auditPixel;
    /**
     * @var bool
     * @Fiald (name="used", type="bool")
     */
    private $used;

    /**
     * @return string
     */
    public function getAuditPixel(): string
    {
        return $this->auditPixel;
    }

    /**
     * @param string $auditPixel
     */
    public function setAuditPixel(string $auditPixel): void
    {
        $this->auditPixel = $auditPixel;
    }

    /**
     * @return bool
     */
    public function isUsed(): bool
    {
        return $this->used;
    }

    /**
     * @param bool $used
     */
    public function setUsed(bool $used): void
    {
        $this->used = $used;
    }
}