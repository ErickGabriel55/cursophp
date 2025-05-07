<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <h2>Escalares</h2>
    <?php 
        // Escalares: int, float, string, bool, null.
        $convertido = (float)"500"; // converte string para float
        $idade = 20;
        $nome = "Erick Gabriel";
        $altura = 1.75;
        $casado = true; // true com echo é 1 e false é nada.
        $nulo = null;
        
        $num = 0x1A; // hexadecimal quando começa com 0x ou 0X.
        $num2 = 0b101010; // binário quando é com 0b ou 0B.
        $num3 = 032; // octal quando começa com 0.
        $num4 = 1_000_000; // separador de milhar (PHP 7.4+)
        $num5 = 1e3; // notação científica (1 * 10^3) - todo número com "e".
        
        echo "O valor da variável <strong>hexadecimal</strong> é $num <br>";
        echo "O valor da variável <strong>binária</strong> é $num2 <br>";
        echo "O valor da variável <strong>octal</strong> é $num3 <br>";
        echo "O valor da variável com <strong>separador de milhar</strong> é $num4 <br>";
        echo "O valor da variável com <strong>notação científica</strong> é $num5 <br>";
        echo "O valor da variável <strong>inteira</strong> é $idade <br>";
        echo "O valor da variável <strong>string</strong> é $nome <br>";
        echo "O valor da variável <strong>float</strong> é $altura <br>";
        echo "O valor da variável é $casado <br>";
        
    ?>

    <h2>Como verfifcar qual o tipo</h2>
    <?php 
        var_dump($num); echo "<br>";
        var_dump($convertido); echo "<br>";
        var_dump($nome); echo "<br>";
    ?>
    
    <h2>Compostos</h2>
    <?php 
        // Compostos: array, object. 
        // Especiais: callable, iterable (não tem no vídeo), resource, mixed, null.

        // Compostos: array.
        $array = array(1, 2, 3, 4, 5); // array (PHP 5.3-)
        $vet = [6, 2, 9, 3, 5]; // array (PHP 5.4+). pode conter vários tipos de dados.
        
        // Compostos: obeject.
        class Pessoa {
           private string $nome;
        }
        $p = new Pessoa(); // instância de um objeto.
        var_dump($p);
    ?>

</body>
</html>