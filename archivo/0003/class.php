<?php

class Fruta
{
  // Properties
  public $name;
  public $color;

  // Methods
  public function set_name($name)
  {
    $this->name = $name;
  }
  public function get_name()
  {
    return $this->name;
  }
}

class HerenciaFruta extends Fruta
{

  public function __construct()
  {

  }

  public function set_color($color)
  {
    $this->color = $color;
  }
  public function get_color()
  {
    return $this->color;
  }
}

$apple  = new Fruta();
$banana = new Fruta();
$apple->set_name('Apple');
$banana->set_name('Banana');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();

// -------------------------
echo "<br>";
// -------------------------

$here = new HerenciaFruta();
$here->set_name('Herencia');
$here->set_color('Verde');

echo $here->get_name();
echo "<br>";
echo $here->get_color();

// -------------------------
echo "<br>";
// -------------------------

$apple2 = new HerenciaFruta();
$apple2->set_name('Nuevo');
$apple2->set_color('color');

echo $apple2->get_name();
echo "<br>";
echo $apple2->get_color();
