<?php
#se define el nombre de la clase
class Book {
  // propiedades: caracteristicas de nuetros objetos
  //métodos: definen el comportamiento de nuestros objetos
  //métos: ?qué es lo que puede hacer nuetro objeto?

  // métodos : magíco
  public function __construct(
    private string $author,
    private string $title,
    private float $price,
    private int $stock,
    private int $id
  ){}

  //
  public function getInfo()
  {
    //
    $info = "<b> $this->title </b> escrito por: <i> $this->author </i> <br>
    precio: $this->price <br>
    existencias: $this->stock <br>
    ID: $this->id <br>"; //puede o no usarse las llaves
    if( $this->stock > 0 ){
      $info .= " unidades disponibles: <span style='color:green'>{ $this->stock } </span>";
    }else{
      $info .= "<span style='color:red'> NO hay disponibles </span> </span> \n\n";
    }
    return $info;
  }
}
#instancia de la clase Book
$book1 = new Book(
  'George O.',
  'Rebelion en la Granja',
  199.90,
  0,
  1
);
#imprime los resultados, adjunte referecia
//echo $book1->getInfo()."proyecto tomado de <a href='https://www.youtube.com/watch?v=Ben_VC2rm10'>Mini Curso: POO con PHP (básico)</a>";

$book2 = new Book(
  'Schoponehauer',
  'El arte de tener la razón',
  150.00,
  10,
  2
);

?>