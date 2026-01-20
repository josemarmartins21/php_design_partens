<?php
require_once "Aluno.php";
require_once "Nota.php";
require_once "Disciplina.php";
$a = new Aluno("Josimar");

$notas = [];

$disciplina[0] = new Disciplina("TLP");
$disciplina[1] = new Disciplina("ingles");
$disciplina[2] = new Disciplina("lingua portuguesa");


$a->addNota(14,$disciplina[0]);
$a->addNota(13,$disciplina[1]);
$a->addNota(7,$disciplina[2]);

echo $a->mediaFinal();



