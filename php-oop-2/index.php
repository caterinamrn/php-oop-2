<?php

  class Square {

      public $lato;

      public function __construct($lato) {
          $this -> lato = $lato;

      }
      public function getArea() {
          return $this -> lato * $this -> lato;
      }
      public function getPer() {
          return $this -> lato * 4;
      }
      public function __toString() {

          return "Quadrato:<br>" . "lato: " . $this -> lato . "<br>"
              . "Perimetro: " . $this -> getPer() . "<br>"
              .  "Area: " . $this -> getArea() . "<br>";

      }

  }

  class Cube extends Square {

    public function getArea() {

        return $this -> lato * $this -> lato * 6;
    }
    public function getVol() {

        return $this -> lato * $this -> lato * $this -> lato;
    }
    public function __toString() {

        return "Cubo:<br>" . "lato: " . $this -> lato . "<br>"
            .  "Area: " . $this -> getArea() . "<br>"
            .  "Volume: " . $this -> getVol() . "<br>";

    }
  }

  $square = new Square(5);

  echo $square . "<br>";

  $cube = new Cube(7);

  echo $cube . "<br>";

 ?>
