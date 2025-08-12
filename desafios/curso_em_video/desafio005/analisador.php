<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador de Número Real</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <main>
        <h1>Analisador de Número Real</h1>
        <?php
            $numero = $_POST['Analisador'];
            $numero_inteiro = (int) $numero;
            $numero_decimal = $numero - $numero_inteiro;
            
            echo "<p>Analisando o número <strong>" . number_format($numero, 3, ',', '.') . "</strong> informado pelo usuário</p>";

            echo "<ul>
                    <li>A parte inteira é <strong>" . number_format($numero_inteiro, 0, ',', '.') . "</strong></li>
                    <li>A parte fracionária é <strong>" . number_format($numero_decimal, 3, ',', '.') . "</strong></li>
                  </ul>";
            
        ?>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>