<?php
class Provincie
{
    public $id;
    public $naam;

    public function __construct()
    {
        settype($this->id, 'integer');
    }
}