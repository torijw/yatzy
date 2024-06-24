<?php
namespace Yatzy;

class Dice {
    public $min;
    public $max;

    function __construct($min, $max)
    {
        $this->min = $min;
        $this->max = $max;
    }

    function roll() {
        return rand($this->min, $this->max);
    }
}
