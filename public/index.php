<?php
require_once('_config.php');
use Yatzy\Dice;
use Yatzy\YatzyGame;

echo "TESTING DICE <br><br>";
$d = new Dice(1,6);

for ($i=1; $i<=5; $i++) {
  echo "ROLL {$i}: {$d->roll()}<br>";
}

echo "<br>TESTING REROLLS <br><br>";
$game = new YatzyGame();

for ($i=1; $i<=4; $i++) {
  $game->rerollDice();
  echo "REROLL {$i}: "; 
  print_r($game->getDiceValues()); 
  echo "<br>";
}


echo "<br>TESTING REROLL STATE <br><br>";
$game = new YatzyGame();

$game->rerollDice();
echo "first roll: ";
print_r($game->getDiceValues());
$game->updateRerollState([1,0,1,1,0]);
echo "<br> reroll state:";
print_r($game->getRerollState());
echo "<br> 1st reroll"; 
$game->rerollDice();
print_r($game->getDiceValues());
echo "<br> 2nd reroll"; 
$game->rerollDice();
print_r($game->getDiceValues());

