<?php
require_once __DIR__."/Contacto.php";
require_once __DIR__."/Usuario.php";

$contactos = [];
$contactos[0] = new Contacto("jurelma", "949216282");
$contactos[1] = new Contacto("papa", "940121011");

$usuario = new Usuario("josimar", "930710346");
$usuario->addContacto($contactos[0]);
$usuario->addContacto($contactos[1]);


print_r($usuario);
