<?php
    // modelo (Primeira Letra De Cada Palavra Sempre Em Maiusculo)
    class Funcionario {
        // atributos (primeira Palavra Com A Primeira letra Em Minusculo, Outras Palavras Com As Primeiras Letras Em Maiusculo)
        public $nome = 'Atirson';
        public $telefone = '79 9 9945-7824';
        public $numFilhos = 2;

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
    echo $y->resumirCadFunc();
    echo '<br>';
    $y->modificarNumFilhos(3);
    echo $y->resumirCadFunc();
?>