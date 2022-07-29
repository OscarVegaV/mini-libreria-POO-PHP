<?php
require 'book.php';
class Comic extends Book{
  // propiedades: caracteristicas de nuetros objetos
  //métodos: definen el comportamiento de nuestros objetos
  //métos: ?qué es lo que puede hacer nuetro objeto?

  //metodos: mágico
  public function __construct(
    $author,
    $title,
    $price,
    $stock,
    $id,
    
    private array $illustrators,
    private int $vol
  )
  { 
    //propiedades que vienen del constructor padre
    parent::__construct($author, $title, $price, $stock, $id);
  }
  #
  public function getInfo()
    {
      $result = "Volumen: $this->vol <br>";

      $ul = "<ul> -- Ilustradores --";
      foreach( $this->illustrators as $illustrator ) {
        $ul .="<li> $illustrator </li>";
      }
      $ul .="</ul> \n\n";
      echo parent::getInfo();

      echo $result .= $ul;
    }
}

$comic1= new Comic(
  'Allan Moore',
  'Batman: The Killin Joke',
  120.00,
  90,
  1,
  ['Brian Bolland','John H.'],
  1
);

#imprime los resultados adjunte referecia
echo $comic1->getInfo()."proyecto tomado de <a href='https://www.youtube.com/watch?v=Ben_VC2rm10'>Mini Curso: POO con PHP (básico)</a>";

?>