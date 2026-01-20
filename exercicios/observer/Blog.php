<?php

class Blog implements ServiceInterface {
    public function update(): void
    {
        print "Preço no blog Actualizado!" . PHP_EOL;
    }
}