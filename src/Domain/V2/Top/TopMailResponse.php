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
     * @var int
     * @Field (name="id", type="int")
     */
    private $id;
    /**
     * @var string
     * @Field (name="result", type="string")
     */
    private $result;

    /**
     * @return string|null
     */
    public function getError()
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
    public function getId()
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
    public function getResult()
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