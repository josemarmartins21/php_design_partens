<?php

require_once __DIR__. "/data/DataNascFuncionario.php";
require_once __DIR__. "/data/NomeFuncionario.php";
require_once __DIR__. "/data/Email.php";
require_once __DIR__. "/data/Salario.php";
require_once __DIR__. "/data/NomeCargo.php";
require_once __DIR__. "/class/Cargo.php";
require_once __DIR__. "/class/Funcionario.php";

$f = new Funcionario("Josimar", 500.00, "2025-06-12", "josemar21@email.pt", "técnico");
echo $f;

