<?php 

interface ProcessorInterface {
    public function process(string $filePath): string;
}