<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritméticas</title>
</head>
<body>
    <h1>Funções aritméticas</h1>
    <?php 
        /*São funções que resolvem operações aritméticas sem operadores
        abs() - Retorna o valor absoluto de um número, ou seja, sem o sinal;
        base_convert() - Conversor de bases (8 - octal, 16 - hexadecimal, 10 - decimal, 2 - binário);
        ceil(), floor(), round() - Funções de arrendondamento, pra cima, pra baixo e arredondamento aritmético;
        hypot() - Calcula a hipotenusa;
        intdiv() - Diferente do operador, faz a divisão inteira;
        min(), max() - Mostra o valor minimo e máximo de uma sequência;
        pi() - É o valor di pi, não tem muito o que falar, mas dá pra pra fazer através de um constante ($r = M_PI) tbm;
        pow(base, expoente) - Função de pontenciação que era utilizada antes da criação do operador **. Quando usado a função é perdida a ordem de precedência, mas isso pode ser resolvido pelos parenteses;
        sin(), cos(), tan() - Funções trigronométricas. Calculam o seno, cosseno de um triângulo;
        sqrt() - Calcula a raiz quadrada de um número ou com numero ** (1/2) e a raiz cúbica apenas por operadores numero ** (1/3);
        */ 

        /*$r = abs(-2000);
        print("A resposta é $r");*/

        /*$r = base_convert(254, 10, 8);
        print("A resposta é $r");*/

        /*$r = intdiv(5, 2);
        print("A resposta é $r");*/

        /*$r = min(5, 2, 6, 8, 8, 9, 10, 56);
        $r2 = max(5, 2, 6, 8, 8, 9, 10, 56);
        print("O minimo é: $r já o máximo é: $r2");*/

        /*$r = pi();
        $r2 = M_PI;
        print("Função $r.<br>Constante $r2");*/

        /*$r = pow(5, 2);
        $r2 = 5 ** 2;
        print("Função potencia: $r.<br>Operador de potência $r2.");*/

        $r = sqrt(81);
        $r2 = 81 ** (1/2);
        $r3 = 27 ** (1/3);
        print("Função raiz quadrada: $r.<br>Com operadores: $r2.<br>Raiz cúbica só da por operadores: $r3.");
    ?>
</body>
</html>