<?php

namespace App\Entity;

class Weapon
{
  public int $id;
  public string $name;
  public string $description;
  public int $power;

  public static array $weapons = [];

  public function __construct($id, $name, $description, $power)
  {
    $this->id = $id;
    $this->name = $name;
    $this->description = $description;
    $this->power = $power;

    self::$weapons[] = $this;

  }

  public static function createWeapon()
  {
    $w1 = new Weapon(1, 'arrow', 'great arrow', 5);
    $w2 = new Weapon(2, 'sword', 'knight sword', 7);
    $w3 = new Weapon(3, 'axe', 'viking axe', 6);

  }
  public static function getWeaponById($id)
  {
    foreach(self::$weapons as $weapon)
    {
      # code...
      if ($weapon->id == $id)
      {
        return $weapon;

      }
    }
  }
}
