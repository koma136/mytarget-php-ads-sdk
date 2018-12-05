<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 27.11.18
 * Time: 15:00
 */

namespace Koma136\MyTarget\Domain\V2\Enum;

use Koma136\MyTarget\Domain\AbstractEnum;

class ContentType extends AbstractEnum
{
    const STATIC = 'static';
    const NIMATED = 'animated';
    const ROLLOVERED = 'rollovered';
    const VIDEO = 'video';
    const HTML5 = 'html5';
    const AUDIO = 'audio';
}