<?php


class Application
{
    private $name;
    public static $count = 0;

    public function __construct($name)
    {
        $this->name = $name;
        self::$count++;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return "application name : " . $this->name;
    }
}

