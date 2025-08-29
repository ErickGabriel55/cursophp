<?php 
    class Solution {
        function twoSum($nums, $target){
            /*$numeros = $nums;
            $resultado = $target;*/
            for ($i = 0; $i < count($nums); $i++){
                /*echo "a variavel i é $i";*/
                for ($t = $i + 1; $t < count($nums); $t){
                    /*echo "a variavel t é $t";*/
                    if ($nums[$t] + $nums[$i] == $target){
                        return [$i, $t];
                    }
                }
            }
            return [];
        }
    }
    $numeros = [3, 2, 4];
    $alvo = 6;
    $solucao = new Solution();
    $resultado = $solucao->twoSum($numeros, $alvo);
    $resultadoProcessado = "Resultado: "  . implode(',', $resultado);    
?>