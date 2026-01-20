<?php

require_once __DIR__."/ProcessorInterface.php";
require_once __DIR__."/BasicFileProcessor.php";
require_once __DIR__."/CarimboFile.php";
require_once __DIR__."/ResizeFileProcessorDecorator.php";

$pathFile = "tmp/file.pdf";

$fileProcess = new BasicFileProcessor;

$fileProcess= new CarimboFile($fileProcess, "QoSTel");

$fileProcess = new ResizeFileProcessorDecorator($fileProcess, 100, 80);

$fileProcess->process($pathFile);