<?php


class Pdf implements FicheiroInterface {
    public function upload(): void
    {
        print("Ficheiro Pdf enviado!\n");
    }
}