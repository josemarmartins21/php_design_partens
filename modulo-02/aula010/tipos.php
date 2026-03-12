<?php
// declare(strict_types=1);

class Livraria {
    private $livros = [];
    private $nome;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function addLivros(Livro $livro)
    {
        $this->livros[] = $livro;
    }

    public function getLivros(): array
    {
        return $this->livros;
    }
}
class Livro  {
    private Titulo $titulo;
    private Autor $autor;
    private $preco;
    private $caracteristica = [];

    public function __construct(string $titulo, Autor $autor, $preco)
    {
        $this->preco = $preco;
        $this->autor = $autor;
        $this->titulo = new Titulo($titulo);
    }

    public function setCaracteristica($peso, $diametro)
    {
        $this->caracteristica = new caracteristica($peso, $diametro);
    }

    public function getCaracteristica(): array
    {
        return $this->caracteristica;
    }

    public function getTitulo(): object
    {
        return $this->titulo;
    }


}

class caracteristica {
    private $peso;
    private $diametro;

    public function __construct($peso, $diametro)
    {
        $this->peso = $peso;
        $this->diametro = $diametro;
    }

}

class Autor {
    private $nome;
    private Email $email;
    private $nacionalidade;

    public function __construct($nome, $email, $nacionalidade) {
        $this->nome = $nome;
        $this->email = new Email($email);
        $this->nacionalidade = $nacionalidade;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail(): object
    {
        return $this->email;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }
}

class Email {
    private string $email;

    public function __construct($email)
    {
        try {
            $this->validate($email);
            $this->email = $email;
        } catch (Exception $e) {
            die($e->getMessage());
        }


        
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function validate($email): void
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            throw new Exception("O email tem que ser do tipo email");
        }

    }

}

class Titulo {
    private string $titulo;

    public function __construct(string $titulo)
    {

        try {
            $this->validate($titulo);
            $this->titulo = $titulo;
        } catch (Exception $e) {
            die($e->getMessage());
        }

    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function validate(string $titulo): void
    {
        if (is_numeric($titulo) === true) {
            throw new Exception("O titulo tem que conter caracteres");
        }
    }
}

$a = new Autor("Josimar", "josima@email.pt", "Angola");

$l1 = new Livro("corra",$a, 200);
$l2 = new Livro("poder da espernaça",$a, 300);
$livraria = new Livraria("Alexandria");
$livraria->addLivros($l1);
$livraria->addLivros($l2);

echo print_r((array) $livraria);

