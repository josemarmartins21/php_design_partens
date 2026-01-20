<?php

class DataNascFuncionario {
    private string $date;

    public function __construct(string $date)
    {
        try {
            $this->validate($date);
            $this->date = $this->formatDate($date);
        } catch (\Exception $e) {
            print $e->getMessage();
        }
    }

    public function validate(string $date)
    {
        if (!(is_string($date) || strlen($date) < 9)) {
            throw new Exception("Data de nascimento inválida");
        }
    }

    public function formatDate(string $date): string
    {
        $newDate = explode("-", $date);

        return implode("/", array_reverse($newDate, true));
    }

    public function getDate()
    {
        return $this->date;
    }
}