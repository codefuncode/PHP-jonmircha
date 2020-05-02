 <?php

class PrivateClass
{
  private $name;
  private $color;
  private $weight;

  private function setName($n)
  {
    // a private function (default)
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
