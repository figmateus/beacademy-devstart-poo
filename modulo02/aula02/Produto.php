<?php
declare(strict_types=1);

class Produto
{
    private  $nome; 
    private  $valor;

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $novoNome): void
    {
        if(strlen($novoNome) < 3){
            die ('Nome não pode ter menos que 3 caracteres');
        }
               $this->nome = $novoNome;
    }

    public function getValor(): float
    {
        return $this->valor;
    }

    public function setValor(float $novoValor): void
    {
        if($novoValor < 0){
           die ('Ops, valor não pode ser negativo');
        }
        $this->valor = $novoValor;
    }

}