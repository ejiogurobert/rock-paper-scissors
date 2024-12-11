<?php

use classes\RocksPaperScissors;

$rocks_paper_scissors = new RocksPaperScissors();


$player_one_weapon = readline('Enter first player weapon: ');
if (!array_search($player_one_weapon, $rocks_paper_scissors->weapons)) {
    return 'Weapon should be rock, paper or scissors';
}

$player_two_weapon = readline('Enter second player weapon: ');
if (!array_search($player_two_weapon, $rocks_paper_scissors->weapons)) {
    return 'Weapon should be rock, paper or scissors';
}

$result = $rock_paper_scissors->check_winner($player_one_weapon, $player_two_weapon);

echo $result;
