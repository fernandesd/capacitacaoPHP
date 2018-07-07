<?php
 class Eletrodomestico {
   public $anoFabricacao;
   private $numSerie;

   public function ligar(){
     return "Agora está ligado!";
   }
 }

 class Geladeira extends Eletrodomestico {
   public $litros;
 }

 $consul = new Geladeira;
 $consul->ligar();

 ?>
