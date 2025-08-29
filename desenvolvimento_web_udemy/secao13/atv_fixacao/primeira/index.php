<?php
    $idade = 69;
    $peso = 100;
    echo "Você possui $idade anos e pesa $peso kilos!!! <br>";
    if(($idade >= 16 && $idade <= 69) && $peso >= 50) {
        echo "Você está apto para a doação de sangue!";
    } else {
        echo "Infelizmente você não está apto para doação \u{1F614}!;";
    }

?>