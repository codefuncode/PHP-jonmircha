 <?php

namespace

class PrivateClass
{
  private $name;
  private $color;
  private $weight;
  private function setName($n)
  {

    $this->name = $n;
  }
  protected function setColor($n)
  {
    // a protected function
    $this->color = $n;
  }
  private function setWeight($n)
  {
    // a private function
    $this->weight = $n;
  }
}
