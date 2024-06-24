<?php
namespace Yatzy\Test;

use Yatzy\Dice;
use PHPUnit\Framework\TestCase;

class DiceTest extends TestCase
{

    public function testConstructor()
    {
        $d = new Dice(1, 6);
        $this->assertEquals(1, $d->min);
        $this->assertEquals(6, $d->max);

        $d = new Dice(10, 20);
        $this->assertEquals(10, $d->min);
        $this->assertEquals(20, $d->max);
    }

    public function testRolls() {
        $d = new Dice(1,6);
        $val = $d->roll();
        $this->assertLessThanOrEqual(6, $val);
        $this->assertGreaterThanOrEqual(1, $val);
    }
}