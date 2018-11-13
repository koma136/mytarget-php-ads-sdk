<?php

namespace Koma136\MyTarget\Domain\V2\Campaign;

use Koma136\MyTarget\Mapper\Annotation\Field;

class AuditPixel
{
    /**
     * @var string
     * @Fiald (name="audit_pixel", type="string")
     */
    private $auditPixel;

    /**
     * @var string
     * @Fiald (name="role", type="string")
     */
    private $role;

    /**
     * @var string[]
     * @Fiald (name="roles", type="dict<string>")
     */
    private $roles;

    /**
     * @return string
     */
    public function getAuditPixel()
    {
        return $this->auditPixel;
    }

    /**
     * @param string $auditPixel
     */
    public function setAuditPixel($auditPixel)
    {
        $this->auditPixel = $auditPixel;
    }

    /**
     * @return string
     */
    public function getRole(){
        return $this->role;
    }

    /**
     * @param string $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * @return string[]
     */
    public function getRoles(): array
    {
        return $this->roles;
    }

    /**
     * @param string[] $roles
     */
    public function setRoles(array $roles): void
    {
        $this->roles = $roles;
    }

}