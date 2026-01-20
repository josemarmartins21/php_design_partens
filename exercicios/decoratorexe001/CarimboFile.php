<?php

class CarimboFile implements ProcessorInterface {

    public function __construct(
        private BasicFileProcessor $file,
        private string $carimboImage,
    )
    {
    }

    public function process(string $filePath): string
    {
        
        $fileCurrentPath = $this->file->process($filePath);
        
        // Lógica para colocar o carimbo no doc....
        
        $newPath = "uploads/file_carimbo.pdf";

        file_put_contents($newPath, "");
        
        return $newPath;

    }
}