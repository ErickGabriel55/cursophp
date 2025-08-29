<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando Funções</title>
    <link rel="stylesheet" href="../css/reset.css">
</head>
<body>
    <main>
        <section>
            <h1>Funções</h1>
            <h2>Funções Sem Retorno</h2>
            <?php 
                function exibirBoasVindas(){
                    echo "Seja bem-vindo <br>Essa é sua primeira função em php!";
                }
                exibirBoasVindas();
            ?>

            <h2>Funções com retorno</h2>
            <?php 
                function calcularAreaTerreno($largura, $comprimento){
                    $area = $largura * $comprimento;
                    
                    // return $largura * $comprimento;
                    return $area;
                }
                // echo calcularAreaTerreno(30, 50);
                // Podemos atribuir o retorno a uma variável.
                $resultado = calcularAreaTerreno(30, 50);
                echo $resultado;
                

            ?>
        </section>
    </main>
</body>
</html>