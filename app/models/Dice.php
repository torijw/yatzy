<?php
class Dice {

    public $value;

    function __construct()
    {
        $this->value = 0;
    }

    function roll() {
        $this->value = rand(1, 5);
        return $this->value;
    }
}
