<?php
    // declare(strict_types=1);
    // modelo (Primeira Letra De Cada Palavra Sempre Em Maiusculo)
    class Funcionario {
        // atributos (primeira Palavra Com A Primeira letra Em Minusculo, Outras Palavras Com As Primeiras Letras Em Maiusculo)
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;

        // getters e setters (overload / sobrecarga)
        function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        function __get($atributo){
            return $this->$atributo;
        }
    }

    $y = new Funcionario();
    $y->__set('nome', 'José');
    $y->__set('numFilhos', 2);
    // echo $y->resumirCadFunc();
    echo $y->__get('nome') . ' possui ' . $y->__get('numFilhos') . ' filho(s).';

    echo '<br>';
    
    $x = new Funcionario();
    $x->__set('nome', 'Maria');
    $x->__set('numFilhos' ,0);
    echo $x->__get('nome') . ' possui ' . $x->__get('numFilhos') . ' filho(s).';
?>