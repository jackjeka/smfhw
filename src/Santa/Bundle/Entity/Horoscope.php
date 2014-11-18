<?php
/**
 * Created by PhpStorm.
 * User: santa
 * Date: 18.11.14
 * Time: 2:02
 */

namespace Santa\Bundle\Entity;


class Horoscope
{
    protected  $day;

    protected  $sign;

    protected  $text;

    public function getDay()
    {
        return $this->day;
    }

    public function setDay($day)
    {
        $this->day = $day;
    }

    public function getSign()
    {
        return $this->sign;
    }

    public function setSign($sign)
    {
        $this->sign = $sign;
    }

    public function getText()
    {
        return $this->text;
    }

    public function setText($text)
    {
        $this->text = $text;
    }
}