<?php
namespace Yatzy\Test;

use Yatzy\YatzyGame;
use PHPUnit\Framework\TestCase;

class YatzyGameTest extends TestCase
{

    public function testConstructor()
    {
        $game = new YatzyGame();
        $this->assertEquals([0,0,0,0,0], $game->getDiceValues());
        $this->assertEquals([0,0,0,0,0], $game->getRerollState());
    }
}