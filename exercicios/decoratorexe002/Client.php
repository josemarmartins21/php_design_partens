<?php
declare(strict_types=1);
require_once __DIR__."/PedidosInterface.php";
require_once __DIR__."/HamburguerPedido.php";
require_once __DIR__."/DuploQueijoPedido.php";
require_once __DIR__."/HaburguerComFiambre.php";

$novoPedido = "Hamburguer";

$pedido = new HamburguerPedido;

$pedido = new DuploQueijoPedido($pedido);

$pedido = new HaburguerComFiambre($pedido);

echo $pedido->pedido($novoPedido);
