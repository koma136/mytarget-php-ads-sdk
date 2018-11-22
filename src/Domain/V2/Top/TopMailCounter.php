<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 22.11.18
 * Time: 12:28
 */

namespace Koma136\MyTarget\Domain\V2\Top;
use Koma136\MyTarget\Mapper\Annotation\Field;
use Koma136\MyTarget\Domain\V2\Top\TopMailCategory;
use Koma136\MyTarget\Domain\V2\Enum\YesNo;
use Koma136\MyTarget\Domain\V2\Enum\YesNoInt;

class TopMailCounter
{
    /**
     * @var TopMailCategory
     * @Field (name="category", type="Koma136\MyTarget\Domain\V2\Top\TopMailCategory")
     */
    private $category;
    /**
     * @var string
     * @Field (name="email", type="string")
     */
    private $email;
    /**
     * @var YesNo
     * @Field (name="ignore_url_warn", type="Koma136\MyTarget\Domain\V2\Enum\YesNo")
     */
    private $ignoreUrlWarn;
    /**
     * @var string
     * @Field (name="password", type="string")
     */
    private $password;
    /**
     * @var YesNoInt
     * @Field (name="public", type="Koma136\MyTarget\Domain\V2\Enum\YesNoInt")
     */
    private $public;
    /**
     * @var YesNoInt
     * @Field (name="rating", type="Koma136\MyTarget\Domain\V2\Enum\YesNoInt")
     */
    private $rating;
    /**
     * @var string
     * @Field (name="title", type="string")
     */
    private $title;
    /**
     * @var string
     * @Field (name="url", type="string")
     */
    private $url;

    /**
     * @return TopMailCounter
     */
    public function create()
    {
        return new self();
    }

    /**
     * @return \Koma136\MyTarget\Domain\V2\Top\TopMailCategory
     */
    public function getCategory(): \Koma136\MyTarget\Domain\V2\Top\TopMailCategory
    {
        return $this->category;
    }

    /**
     * @param \Koma136\MyTarget\Domain\V2\Top\TopMailCategory $category
     * @return $this
     */
    public function setCategory(\Koma136\MyTarget\Domain\V2\Top\TopMailCategory $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return YesNo
     */
    public function getIgnoreUrlWarn(): YesNo
    {
        return $this->ignoreUrlWarn;
    }

    /**
     * @param YesNo $ignoreUrlWarn
     * @return $this
     */
    public function setIgnoreUrlWarn(YesNo $ignoreUrlWarn)
    {
        $this->ignoreUrlWarn = $ignoreUrlWarn;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return $this
     */
    public function setPassword(string $password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return YesNoInt
     */
    public function getPublic(): YesNoInt
    {
        return $this->public;
    }

    /**
     * @param YesNoInt $public
     * @return $this
     */
    public function setPublic(YesNoInt $public)
    {
        $this->public = $public;
        return $this;
    }

    /**
     * @return YesNoInt
     */
    public function getRating(): YesNoInt
    {
        return $this->rating;
    }

    /**
     * @param YesNoInt $rating
     * @return $this
     */
    public function setRating(YesNoInt $rating)
    {
        $this->rating = $rating;
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
     * @return $this
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return $this
     */
    public function setUrl(string $url)
    {
        $this->url = $url;
        return $this;
    }

}