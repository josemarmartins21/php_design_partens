<?php
declare(strict_types=1);
class Lampada {
    private bool $aVenda;
    public float $preco;
    public int $unidades;

    public function __construct(bool $aVenda, $preco, $unidades)
    {
       $this->aVenda = $aVenda;
       $this->preco = $preco;
       $this->unidades = $unidades;
    }

    public function setaVenda($aVenda): void {
        if (is_bool($aVenda)) {
            $this->aVenda = $aVenda; 
        }
    }

    public function getaVenda()
    {
        return $this->aVenda;
    }
}

class Pessoa {
    private string $nome;
    private float $saldo;

    public function __construct($nome, $saldo)
    {
        $this->nome = $nome;
        $this->saldo = $saldo;
    }

    public function comprar(Lampada $l): string
    {
        if ($this->saldo >= $l->preco AND $l->unidades > 0) {
            $this->saldo -= $l->preco;
            $l->unidades --;

            return "Compra efectuada com sucesso. Lampada restantes {$l->unidades}" . PHP_EOL;
        }

        return "Saldo insuficiente ou zero lampadas restantes" . PHP_EOL;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }
}

$l = new Lampada(true, 20.00, 5);
$p = new Pessoa("Josimar", 25.00);
$p2 = new Pessoa("Julieta", 50.00);
$p3 = new Pessoa("Cesaltina", 1);

echo $p->comprar($l);
echo $p2->comprar($l);
echo $p3->comprar($l);
echo $p3->comprar($l);
echo $p3->comprar($l);
echo $p3->comprar($l);

