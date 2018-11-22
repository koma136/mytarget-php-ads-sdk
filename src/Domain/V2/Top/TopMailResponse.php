<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 22.11.18
 * Time: 14:45
 */

namespace Koma136\MyTarget\Domain\V2\Top;
use Koma136\MyTarget\Mapper\Annotation\Field;


class TopMailResponse
{
    /**
     * @var string
     * @Field (name="error", type="string")
     */
    private $error;
    /**
     * @var integer
     * @Field (name="id", type="integer")
     */
    private $id;
    /**
     * @var string
     * @Field (name="result", type="string")
     */
    private $result;

    /**
     * @return string
     */
    public function getError(): string
    {
        return $this->error;
    }

    /**
     * @param string $error
     * @return $this
     */
    public function setError(string $error)
    {
        $this->error = $error;
        return $this;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return $this
     */
    public function setId(int $id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getResult(): string
    {
        return $this->result;
    }

    /**
     * @param string $result
     * @return $this
     */
    public function setResult(string $result)
    {
        $this->result = $result;
        return $this;
    }



}