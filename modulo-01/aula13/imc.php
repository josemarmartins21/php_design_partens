<?php

function calcula_imc(float $peso, float $altura): float {
    return $peso / ($altura * $altura);
}