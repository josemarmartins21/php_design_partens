<?php

class RelatorioFactory {
    public function create(string $periodo): PeriodoInterface
    {
        if ($periodo === 'dia') {
            return new DiaPeriodo;
        }

        if ($periodo === 'ano') {
            return new AnoPeriodo;
        }

        throw new \Exception("Periodo Inválido!");
    }
}