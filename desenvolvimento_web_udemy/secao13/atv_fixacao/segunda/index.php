<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de imposto de renda</title>
</head>
<body>
    <main>
        <section>
            <h1>Imposto de renda</h1>
            <?php 
                function calcularImposto($salario) {
                    if ($salario <= 1903.98) {
                        $impostoDeRenda = $salario;
                    }elseif ($salario >= 1903.99 && $salario <= 2826.65) {
                        $impostoDeRenda = $salario * 0.075;
                    }elseif($salario >= 2826.66 && $salario <= 3751.05){
                        $impostoDeRenda = $salario * 0.15;
                    }elseif($salario >= 3751.06 && $salario <= 4664.68){
                        $impostoDeRenda = $salario * 0.225;
                    }elseif($salario >= 4664.69){
                        $impostoDeRenda = $salario * 0.275;
                    }else {
                        echo "O dado informado não é um número!";
                    }
                    echo "O seu salário é $salario<br>E você pagará $impostoDeRenda de imposto de renda!"; 
                }

                $calcularImpostoDeRenda = calcularImposto(2500);
            ?>
        </section>
    </main>
</body>
</html>