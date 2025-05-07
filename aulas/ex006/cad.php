<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    
    <main>
        <?php 
        // Precisamos pegar as informações que foram passadas no arquivo index.html. As variaveis dentro do var_dump são chamadas de super globais, pois podem ser usadas em qualquer escopo e já vem declaradas por padrão. Contem um array com as informações de uma emissão de um formulário.
            // var_dump($_GET);  só funciona se o metodo de envio do arquivo de origem dor get.
            // var_dump($_POST); só funciona se o metodo de envio do arquivo de origem dor post.
            // var_dump($_REQUEST); funciona em ambos os metodos. Sendo a junção de $_GET, $_POST, $_COOKIES. por ser varias em uma pode ocupar um pouquinho mais de memória.
            $nome = $_GET["nome"] ?? "sem nome";
            $sobrenome = $_GET["sobrenome"] ?? "sem sobrenome";
            echo "<p>É um prazer te conhecer, <strong>$nome $sobrenome</strong>! Este é o meu site!</p>";

            // Pode acontecer de nenhuma infromação ser enviada e dar erro. Para solucionar isso usamos condicionais ou o operador de coalescência nula (??) que está disponivel a partir do php 7. Contudo o mais recomendado é mostrar uma mensagem de erro usando condicionais.
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>