<?php

require_once __DIR__."/FormatoInterface.php";
require_once __DIR__."/FormatoSimples.php";
require_once __DIR__."/FormatoNegrito.php";
require_once __DIR__."/FormatoItalico.php";
require_once __DIR__."/FormatoColorido.php";

$nome = 'josimar da C. Martins';

$formato = new FormatoSimples;

$formato = new FormatoNegrito($formato);

$formato = new FormatoItalico($formato);

$formato = new FormatoColorido($formato, 'blue', 32);

$nomeFormatdado = $formato->format($nome);