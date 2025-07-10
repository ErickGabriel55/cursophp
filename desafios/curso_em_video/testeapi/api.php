<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Teste api</title>
</head>
<body>
    <main>
        <h1>Testando api</h1>
        <?php 
            $url = "https://dragonball-api.com/api/characters"; // Url da api que será consumida
            $ch = curl_init($url); // Inicia a api através do curl
            
            /* curl_setopt() — configurações da requisição cURL no PHP

            -> Sintaxe:
            curl_setopt($ch, OPCAO, VALOR);

            Pra que serve? 
            Define como a requisição vai funcionar: URL, método (GET/POST), headers, retorno etc.

            Exemplos de uso:
            CURLOPT_URL            -> define a URL
            CURLOPT_RETURNTRANSFER -> se true, retorna a resposta como string (não imprime direto)
            CURLOPT_POST           -> se true, envia como POST
            CURLOPT_POSTFIELDS     -> define os dados enviados no POST
            CURLOPT_HTTPHEADER     -> define os headers (como Content-Type)

            Exemplo resumido:
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://api.com');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, 'nome=erick&idade=20');
            $resposta = curl_exec($ch);
            curl_close($ch);

            Dica de ouro:
            - Usa curl_setopt pra montar a requisição peça por peça.
            - Ideal pra APIs e integrações com serviços externos.*/


            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); /*Função: Desativa a verificação do certificado SSL do servidor.*/ 
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET"); /* Função: Define o método HTTP da requisição como GET. */
            $resultado = json_decode(curl_exec($ch)); // executa e decodifica. Será mais de um resultado já que são vários personagens e usaremos o foreach pra ler

            // echo "<pre>";
            // var_dump($resultado); // Básico, direto, não usa Xdebug
            // print_r($resultado); // Tira tudo da mochila: tipo, tamanho, visibilidade (com Xdebug)
            // echo "</pre>";

            foreach ($resultado->items as $personagem){
                // echo "<pre>";
                // var_dump($personagem);
                // echo "</pre>";
                echo "<p>Nome: " . $personagem->name . "</p>";
                echo "<p>Raça: " . $personagem->race . "</p><hr>";
            }
        ?>

    </main>
</body>
</html>