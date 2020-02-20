<?php

// //////////////////////////////////////////////////////////////////////////////
// Ejemplo 1 mas  comoentarios
// -------------------------------------------------
//  Clase abstracta  como modelo para herencia
// -------------------------------------------------
abstract class ClaseAbstracta1
{
  // Forzar la extensión de clase para definir este método
  abstract protected function getValor();
  abstract protected function valorPrefijo($prefijo);

  // Método común
  public function imprimir()
  {
    echo $this->getValor() . "\n";
  }
}
// -------------------------------------------------

//

//  ------------------------------------------------
// Clase que hereda #1
// --------------------------------------------------
class ClaseConcreta1_ejemplo_1 extends ClaseAbstracta1
{
  protected function getValor()
  {
    return "ClaseConcreta1";
  }

  public function valorPrefijo($prefijo)
  {
    return "{$prefijo}ClaseConcreta1";
  }
}
//  ------------------------------------------------

//

// -------------------------------------------------
// Clase que hereda #2
// ------------------------------------------------
class ClaseConcreta1_ejemplo_2 extends ClaseAbstracta1
{
  public function getValor()
  {
    return "ClaseConcreta2";
  }

  public function valorPrefijo($prefijo)
  {
    return "{$prefijo}ClaseConcreta2";
  }
}
// -------------------------------------------------

$clase1 = new ClaseConcreta1_ejemplo_1;
$clase1->imprimir();
echo $clase1->valorPrefijo('FOO_') . "\n";

$clase2 = new ClaseConcreta1_ejemplo_2;
$clase2->imprimir();
echo $clase2->valorPrefijo('FOO_') . "\n";

// /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// /Ejemplo 2 mas comentarios

// -------------------------------------------------------------------------
abstract class ClaseAbstracta2
{
  // El método abstracto sólo necesita definir los argumentos requeridos
  abstract protected function nombrePrefijo($nombre);

}
// -------------------------------------------------------------------------

// -----------------------------------------------------------------------
class ClaseConcreta2_ejemlo_1 extends ClaseAbstracta2
{

  // La clase derivada puede definir parámetros
  // opcionales que no estén en la estructura del prototipo
  public function nombrePrefijo($nombre, $separador = ".")
  {
    if ($nombre == "Pacman") {
      $prefijo = "Mr";
    } elseif ($nombre == "Pacwoman") {
      $prefijo = "Mrs";
    } else {
      $prefijo = "";
    }
    return "{$prefijo}{$separador} {$nombre}";
  }
}
// -----------------------------------------------------------------------

$clase = new ClaseConcreta2_ejemlo_1;
echo $clase->nombrePrefijo("Pacman"), "\n";
echo $clase->nombrePrefijo("Pacwoman"), "\n";
