<?php 
    /* 1) Crie uma aplicação capaz de identificar se uma determinada pessoa pode ou não doar sangue. Utilize as variáveis $idade e $peso no processo. Neste primeiro momento faça a atribuição de valores as variáveis de forma estática, ou seja, no processo de atribuição.
    Se a idade informada estiver entre (e inclusive) 16 e 69 anos e o peso for igual ou superior a 50kg, então o sistema deve imprimir a mensagem "Atende aos requisitos", caso contrário o sistema deve imprimir a mensagem "Não atende aos requisitos". 
    */
    $idade = 69;
    $peso = 100;
    echo "Você possui $idade anos e pesa $peso kilos!!! <br>";
    if(($idade >= 16 && $idade <= 69) && $peso >= 50) {
        echo "Você está apto para a doação de sangue!";
    } else {
        echo "Infelizmente você não está apto para doação \u{1F614}!;";
    }

?>