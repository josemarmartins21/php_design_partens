<?php

class ResizeFileProcessorDecorator implements ProcessorInterface {


    public function __construct(
        private ProcessorInterface $file, 
        private int $height, 
        private int $width,
    )
    {
        
    }
    public function process(string $path): string
    {
        $currentPath = $this->file->process($path);
        
        // lógica para redimensionar a imagem....

        $newPath = "uploads/redimesionado_file.pdf";

        file_put_contents($newPath, "");

        return $newPath;
    }
}