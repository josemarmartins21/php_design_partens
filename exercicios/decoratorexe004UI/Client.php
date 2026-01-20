<?php
require_once __DIR__."/FormatoInterface.php";
require_once __DIR__."/FormatoSimples.php";
require_once __DIR__."/FormatoNegrito.php";

$nome = 'josimar';

$formato = new FormatoSimples;

$formato = new FormatoNegrito($formato);

echo $formato->format($nome);