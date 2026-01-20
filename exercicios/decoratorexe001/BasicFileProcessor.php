<?php


class BasicFileProcessor implements ProcessorInterface {
    public function process(string $filePath): string
    {
        // Lógica para valida o ficheiro
        
        $fileNewPath = "uploads/file.pdf";

        file_put_contents($fileNewPath, "");

        return $fileNewPath;
    }
}
