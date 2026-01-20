<?php

require_once __DIR__."/PeriodoInterface.php";
require_once __DIR__."/DiaPeriodo.php";
require_once __DIR__."/RelatorioFactory.php";
require_once __DIR__."/AnoPeriodo.php";

$relatorio = new RelatorioFactory;

$periodoDiario = $relatorio->create('dia');

$periodoAno = $relatorio->create('ano');

$periodoAno->totalVendas();