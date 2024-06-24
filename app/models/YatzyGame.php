<?php
namespace Yatzy;

class YatzyGame {
    private $numberOfRolls;
    private $dice;
    private $diceValues;
    private $reroll;

    function __construct()
    {
        $this->numberOfRolls = 0;
        $this->dice = new Dice(1,6);
        $this->diceValues = [0,0,0,0,0];
        $this->reroll = [0,0,0,0,0];
    }

    function rerollDice() {
        if ($this->numberOfRolls < 3){
            foreach($this->reroll as $key => $flag) {
                if ($flag==0) {
                    $this->diceValues[$key] = $this->dice->roll();
                }
            }
            $this->numberOfRolls += 1;
        } else {
            echo "No more rerolls left<br>";
        }

    }

    function getDiceValues() {
        return $this->diceValues;
    }

    function updateRerollState($rerollState) {
        $this->reroll = $rerollState;
    }

    function getRerollState() {
        return $this->reroll;
    }
}

