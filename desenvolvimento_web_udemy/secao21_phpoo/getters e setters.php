<?php
    // declare(strict_types=1);
    // modelo (Primeira Letra De Cada Palavra Sempre Em Maiusculo)
    class Funcionario {
        // atributos (primeira Palavra Com A Primeira letra Em Minusculo, Outras Palavras Com As Primeiras Letras Em Maiusculo)
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;

        // getters e setters
        function setNome($nome){
            $this->nome = $nome;
        }

        function setNumFilhos(int $numFilhos){
            $this->numFilhos = $numFilhos;
        }

        function getNome(){
            return $this->nome;
        }

        function getNumFilhos(){
            return $this->numFilhos;
        }

        // métodos
        function resumirCadFunc() {
            return "$this->nome possui $this->numFilhos filho(s)";
        }

        function modificarNumFilhos($numFilhos){
            // Afetar um atributo do objeto
            $this->numFilhos = $numFilhos;
        }
    }

    $y = new Funcionario();
    $y->setNome('José');
    $y->setNumFilhos(2);
    // echo $y->resumirCadFunc();
    echo $y->getNome() . ' possui ' . $y->getNumFilhos() . ' filho(s).';

    echo '<br>';
    
    $x = new Funcionario();
    $x->setNome('Maria');
    $x->setNumFilhos(0);
    echo $x->getNome() . ' possui ' . $x->getNumFilhos() . ' filho(s).';
?>