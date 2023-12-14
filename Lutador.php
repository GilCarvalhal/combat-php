<?php

class Lutador
{
    #region Atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;
    #endregion

    #region Método construtor
    function Lutador($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates)
    {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }
    #endregion

    #region Getters & Setters
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    public function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($peso)
    {
        $this->peso = $peso;
        $this->setCategoria();
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    private function setCategoria()
    {
        if ($this->peso < 52.2) {
            $this->categoria = "Inválido!";
        } else if ($this->peso <= 70.3) {
            $this->categoria = "leve";
        } else if ($this->peso <= 83.9) {
            $this->categoria = "médio";
        } else if ($this->peso <= 120.2) {
            $this->categoria = "pesado";
        } else {
            $this->categoria = "Inválido!";
        }
    }

    public function getVitorias()
    {
        return $this->vitorias;
    }

    public function setVitorias($vitorias)
    {
        $this->vitorias = $vitorias;
    }

    public function getDerrotas()
    {
        return $this->derrotas;
    }

    public function setDerrotas($derrotas)
    {
        $this->derrotas = $derrotas;
    }

    public function getEmpates()
    {
        return $this->empates;
    }

    public function setEmpates($empates)
    {
        $this->empates = $empates;
    }
    #endregion

    #region Métodos
    function apresentar()
    {
        echo "</br>-----CHEGOU A HORA----- </br>";
        echo " lutador: " . $this->getNome();
        echo " origem: " . $this->getNacionalidade();
        echo $this->getIdade() . " anos ";
        echo "</br>" . $this->getAltura() . " m de altura ";
        echo "pesando: " . $this->getPeso();
        echo " ganhou: " . $this->getVitorias();
        echo " perdeu: " . $this->getDerrotas();
        echo " empatou: " . $this->getEmpates();
    }

    function status()
    {
        echo $this->getNome();
        echo " é um peso " . $this->getCategoria();
        echo " tem " . $this->getVitorias() . " vitórias";
        echo " tem " . $this->getDerrotas() . " derrotas";
        echo " tem " . $this->getEmpates() . " empates";
    }

    function ganharLuta()
    {
        $this->setVitorias($this->getVitorias() + 1);
    }

    function perderLuta()
    {
        $this->setDerrotas($this->getDerrotas() - 1);
    }

    function empatarLuta()
    {
        $this->setEmpates($this->getEmpates() + 1);
    }
    #endregion
}
