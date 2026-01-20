<?php
declare(strict_types=1);
abstract class Forma {
 /**
  * Metodo asbtracto que serve como base para outras classes poderem sobescrever ele e
  * e utilizarem-no.
  * @return [type]
  */
    public abstract function calcular();
}

class Trapezio extends Forma {
    public function __construct(private int $baseMaior, private int $baseMenor, private int $altura)
    {
        
    }

    /**
     * Calcula a aula do trapezio.
     * @return [type]
     */
    public function calcular(): int 
    {
        return ($this->baseMaior + $this->baseMenor) * $this->altura;
    }
}
class Triangulo extends Forma {
    public function __construct(private int $base, private int $altura)
    {
        
    }
    /**
     * Calcula a aula do triangulo.
     * @return int
     */
    public function calcular(): int
    {
        return ($this->base * $this->altura) / 2;
    }
}
class Retangulo extends Forma {
    public function __construct(private int $base, private int $altura)
    {
        
    }
    /**
     * Calcula a aula do retangulo.
     * @return [type]
     */
    public function calcular(): int
    {
        return $this->altura * $this->base;
    }
}
class CalculadoraDeArea {
    /**
     * Calcula a área de uma figura geometrica.
     * @param Forma $figuraGeometrica
     * 
     * @return int
     */
    public function calcularArea(Forma $figuraGeometrica): int
    {
        return $figuraGeometrica->calcular();
    }
}

$calculadora = new CalculadoraDeArea;
echo $calculadora->calcularArea(new Triangulo(12, 20)) . PHP_EOL;
echo $calculadora->calcularArea(new Retangulo(20, 50)) . PHP_EOL;
echo $calculadora->calcularArea(new Trapezio(100, 20, 80));