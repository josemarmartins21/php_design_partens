<?php
require_once "Disciplina.php";
require_once "Nota.php";

class Aluno {
   private $nome;
   private $notas;

   public function __construct($nome)
   {
        $this->nome = $nome;
   }

   public function addNota($valor, $diciplina)
   {
     $this->notas[] = new Nota($valor, $diciplina);
   }

   public function mediaFinal()
   {
     $sm = 0;
     foreach ($this->notas as $nota) {
         $sm += $nota->getValor();
     }
     return number_format($sm / count($this->notas), 2, ',', "."); 
   }

   public function getNome()
   {
        return $this->nome;
   }


   public function getNotas()
   {
     return $this->notas;
   }
}