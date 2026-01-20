<?php
require_once __DIR__ ."/FileNotFoundException.php";
require_once __DIR__ ."/FilePermissionDaniedException.php";
class Inicializador {
    protected $initFile;
    public function __construct($initFile)
    {
        $this->initFile = $initFile;
    }
    public function lerInFile()
    {
        if (!file_exists($this->initFile)) {
            throw new FileNotFoundException("Ficheiro não encontrado!");
            
        } 
        
        if (is_string($this->initFile)) {
            throw new FilePermissionDaniedException("Não tem permisão para o ficheiro!");
        }
    }

}