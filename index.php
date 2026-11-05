<?php
  include "stoel.php";

  $rodeStoel = new Stoel("rood", 60);
  echo $rodeStoel->echoKleur() . "<br>\n";
  echo "Zithoogte rode stoel: " . $rodeStoel->echoZithoogte() . "<br>\n";
  $rodeStoel->verstelZithoogte(70);
  echo "Zithoogte na verstelling: " . $rodeStoel->echoZithoogte() . "<br>\n";
?>