# Condicionais
## Sintaxe
- if(){}, else if(){}, else{}
  - if é se a condção for verdadeira, elseif é pro caso de uma segunda, ou mais de duas, condições for verdadeira, else se todas as condições forem falsas.

## Operadores de comparação
### Operadores:
- Idêntico (===) - Verifica se os valores comparados são iguais e do mesmo tipo
- Igual (==) - Verifica se os valores comparados são iguais
- Diferente (!=) - Verifica se os valores comparados são diferentes
- Diferente (<>) - Verifica se os valores comparados são diferentes
- Não idêntico (!==) - Verifica se os valores comparados são diferentes e de tipos diferentes
- Menor (<) - Verifica se o valor da esquerda é menor que o valor da direita
- Maior (>) - Verifica se o valor da esquerda é maior que o valor da direita
- Menor igual (<=) - Verifica se o valor da esquerda é menor ou igual ao valor da direita
- Maior igual (>=) - Verifica se o valor da esquerda é maior ou igual ao valor da direita
## Operadores lógicos
### Operadores:
- Operador E (AND ou &&) – Verdadeiro se todas as expressões forem verdadeiras
- Operador OU (OR ou ||) – Verdadeiro se pelo menos uma das expressões for verdadeira
- Operador Xor (XOR) – Verdadeiro apenas se uma das expressões for verdadeira, mas não ambas
- Operador de Negação (!) – Inverte o resultado da expressão

## Verbosidade
Sempre lembre-se de deixar o código o menos verboso possível
exemplo mais verboso:
```php
<?php 
      $usuario_possui_cartao_loja = true;
      $valor_compra = 250;
      $valor_frete = 50;
      $recebeu_desconto_frete = false; // podemos mudar essa variavel.

      if($usuario_possui_cartao_loja && $valor_compra >= 100){
          $valor_frete = 0;
          $recebeu_desconto_frete = true;
      }
?>
```
exemplo menos verboso:
```php
<?php
        $usuario_possui_cartao_loja = true;
        $valor_compra = 250;
        $valor_frete = 50;
        $recebeu_desconto_frete = true; // valor booleano da variavel foi alterado

        if($usuario_possui_cartao_loja && $valor_compra >= 400){
            $valor_frete = 0;
        }
?>
```
Não existe melhor forma de fazer uma logica, mas é sempre bom seguir as boas práticas.

## Operador Ternário
Fazem um controle de fluxo assim como o if, else if, else, porém possui uma limitação maior pois retornam apenas uma única instrução de verdadeiro (true) ou falso (false), contudo é menos verboso o que torna o código mais legível. Sintaxe: <condição> ? true : false;
``` php
<h2>Detalhes do pedido</h2>
<p>Possui cartão da loja? <?= $usuario_possui_cartao_loja ? 'Sim!!!' : 'Não!!!'; ?>
<?php
    /*if($usuario_possui_cartao_loja){
        print 'Sim!!!';
    } else {
        echo 'Não!!!';
    }*/
?>
</p>
?>
```
Também podemos atrubuir o operador ternario a uma variável para usos futuros:
``` php
<p>Recebeu o Desconto no Frete?
    <?php 
        $teste = $recebeu_desconto_frete ? 'Sim!!!' : 'Não!!!';
        print $teste;
        /*if($recebeu_desconto_frete){
            print 'Sim!!!';
        } else {
            echo 'Não!!!';
        }*/
    ?>
</p>
```
***Apesar de não ser algo recomendável*** é possível realizar operadores ternários encadeados:
``` php

<?php 
    $valor_frete_aux = $usuario_possui_cartao_loja && $valor_compra >= 400 ? 0 : ($usuario_possui_cartao_loja && $valor_compra >= 300 ? 10 : ($usuario_possui_cartao_loja && $valor_compra >= 100 ? 25 : $valor_frete));

    $recebeu_valor_frete = $valor_frete != $valor_frete_aux ? true : false;

    $valor_frete = $valor_frete_aux;
?>

```
## Switch
