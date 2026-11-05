<?php

  class Stoel {

    // Fields (eigenschappen)
    private int $zithoogte;
    private string $kleur;

    // Constructor (start van blauwdruk)
    public function __construct($ingevoerdeKleur, $ingevoerdeZithoogte)
    {
      $this->kleur = $ingevoerdeKleur;
      $this->zithoogte = $ingevoerdeZithoogte;
    }

    // Functions (handelingen)
    public function echoKleur(){
      return "De stoel is: ".$this->kleur;
    }

    public function echoZithoogte() {
      return $this->zithoogte;
    }

    public function verstelZithoogte($nieuweHoogte){
      $this->zithoogte = $nieuweHoogte;
    }

  }

?>