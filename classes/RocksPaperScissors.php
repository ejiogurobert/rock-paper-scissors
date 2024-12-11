<?php

namespace classes;

class RocksPaperScissors
{
    public $weapons = [
        1 => 'scissors',
        2 => 'rock',
        3 => 'paper'
    ];

    private $list = [
        1 => 3,
        2 => 1,
        3 => 2
    ];

    public function check_winner($player_one_weapon, $player_two_weapon)
    {
        $player_one_index = array_search($player_one_weapon, self::$weapons);
        $player_two_index = array_search($player_two_weapon, self::$weapons);

        if (self::$list[$player_one_index] === $player_two_index) {
            return 'PLAYER ONE WINS!';
        } elseif (self::$list[$player_two_index] === $player_one_index) {
            return 'PLAYER TWO';
        } else {
            return 'DRAW!';
        }
    }
}
