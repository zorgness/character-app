<?php

namespace App\Entity;

class Character
{
  public int $id;
  public string $name;
  public bool $sex;
  public int $age;
  public array $skills;

  public static $players = [];


  public function __construct($id, $name, $sex, $age, $skills)
  {
    $this->id = $id;
    $this->name = $name;
    $this->sex = $sex;
    $this->age = $age;
    $this->skills = $skills;

    self::$players[] = $this;

  }

  public static function createCharacter()
  {
    $p1 = new Character(1,'marc', true, 24, [
      "force" => 5,
      "speed" => 4,
      "mind" => 3,
    ]);
    $p2 = new Character(2,'milo', true, 23, [
      "force" => 4,
      "speed" => 4,
      "mind" => 4,
    ]);
    $p3 = new Character(3, 'tya', false, 22, [
      "force" => 2,
      "speed" => 3,
      "mind" => 5,
    ]);
  }

  public static function getCharacterById($id)
  {
    foreach(self::$players as $player)
    {
      # code...
      if ($player->id == $id)
      {
        return $player;

      }
    }
  }
}
