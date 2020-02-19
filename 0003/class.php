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
