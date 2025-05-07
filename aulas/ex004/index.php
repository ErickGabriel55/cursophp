<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de Strings</title>
</head>
<body>
    <h1>Tipos de Strings</h1>
    <?php 
        /*Existem quatro tipos: 
            Double quoted
            Single quoted
            Heredoc
            Nowdoc
        */
        /*As strings com aspas simples não realizam processamento, já as aspas duplas realizam o processamento*/
        print "String com aspas duplas\u{1F418}<br>";
        echo 'String com aspas duplas\u{1F418}<br>';
        $nome = "Erick";
        $sobrenome = "Gabriel \u{1F596}";
        echo "$nome $sobrenome"; // string com aspas duplas.
        /*Essa interpolação (nome do que foi feito acima com aspas duplas) não funciona com constantes, ao invés disso use o operador de concatenação "."*/
        echo "<br>";
        const ESTADO = "Sergipe";
        echo "Eu sou do estado de " . ESTADO . "<br>";

    
    ?>

    <h1>Manipulação de Strings</h1>
    <?php 
        // Manipulação de strings.
        $nome = "erick gabriel"; 
        $nome2 = "ERICK GABRIEL";
         /*$nome3 = "Erick Gabriel";
        $nome4 = "Erick Gabriel";
        $nome5 = "Erick Gabriel";*/

        // Funções de manipulação de strings.
        echo "Coversão para maiusculas " . strtoupper($nome); // converte para maiúsculas.
        echo "<br>";
        echo "Coversão para minúsculas " . strtolower($nome2); // converte para minúsculas.
        echo "<br>";
        echo "Coversão da primeira letra para maiúscula " . ucfirst($nome); // converte a primeira letra para maiúscula.
        echo "<br>";
        echo "Converte a primeira letra de cada " . ucwords($nome); // converte a primeira letra de cada palavra para maiúscula.
        echo "<br>";
        echo "Inverte a string " . strrev($nome); // inverte a string.
    ?>
    <h1>Funções de manipulação de strings</h1>
    <?php 
        // Funções de manipulação de strings.
        $str = "Erick Gabriel";
        $str2 = "Erick Gabriel";
        $str3 = "Erick Gabriel";
        $str4 = "Erick Gabriel";
        $str5 = "Erick Gabriel";

        // Funções de manipulação de strings.
        // Assim como em constantes é necessário o operador de concatenação para funções. 
        echo strlen($str); // conta o número de caracteres.
        echo "<br>";
        echo str_word_count($str2); // conta o número de palavras.
        echo "<br>";
        echo str_replace("Gabriel", "Gabi", $str3); // substitui uma palavra por outra.
        echo "<br>";
        echo strpos($str4, "Gabriel"); // encontra a posição de uma palavra na string.
        echo "<br>";
        echo substr($str5, 0, 5); // retorna uma parte da string.
        echo "<br>";
        echo str_repeat($str, 3); // repete a string.
        echo "<br>";
        echo str_pad($str, 20, "*", STR_PAD_BOTH); // preenche a string com caracteres.
        echo "<br>";
        echo str_split($str, 5); // divide a string em partes.
        echo "<br>";
        echo str_shuffle($str); // embaralha a string.
        echo "<br>";
        echo strcasecmp($str, $str2); // compara duas strings (case insensitive).
        echo "<br>";
        echo "Estamos no ano de " . date('Y'); 
        echo "<br>";
        
    ?>
    <h1>Sequencias de escape</h1>
    <?php 
        // Não é possível usar aspas simples dentro de aspas simples e nem aspas duplas dentro de aspas duplas apenas aspas simples dentro de aspas duplas e virse-versa.
        $nom = "Rodrigo";
        $snom = "Nogueira";
        echo "$nom 'Minotauro' $snom <br>"; // Ou como é mais utilizado:
        echo "$nom \"Minotauro\" $snom"; // utilizando contra barras (sequências de escape).
        /*
            Sequência de escape para aspas duplas:
            \n - nova linha (não funciona no html);
            \t - tabulação horizontal (tecla tab, não funciona no html);
            \\ - barra invertida, já que normalmente são usadas pra sequencia de escape;
            \$ - exibir o sinal de sifrão;
            \u{} - codepoint unicode.
        */
        echo "\n$nom \"Minotauro\" $snom";
    ?>
    <h1>Strings HereDoc</h1>
    <?php 
        // Servem para escrever em mais de uma linha, funciona apenas para textarea e não em html.
        // São pouco usadas hoje em dia.
        // Faz intepretação que nem as aspas duplas.
        $canal = 'Curso em vídeo';
        $ano = date('Y');
        echo <<< TESTE
            Olá galera do $canal!
                        Tudo bem com vocês?
                    Como está sendo esse ano de $ano?
                Abraços! \u{1f596}
        TESTE;
    ?>

    <h1>NowDoc</h1>
    <?php 
        // Servem para escrever em mais de uma linha, funciona apenas para textarea e não em html.
        // São pouco usadas hoje em dia.
        // NowDoc não faz interpretação que nem as aspas simples.
        echo <<< 'TESTE'
            Olá galera do $canal!
                        Tudo bem com vocês?
                    Como está sendo esse ano de $ano?
                Abraços! \u{1f596}
        TESTE;
    ?>

</body>
</html>