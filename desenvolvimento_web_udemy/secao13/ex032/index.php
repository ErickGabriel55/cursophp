<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções para manipular arrays</title>
    <link rel="stylesheet" href="../css/reset.css">
</head>
<body>
    <main>
        <section>
            <h1>Funções para Manipular Arrays</h1>
            <?php 
                // IS_ARRAY()
                /* $array = ['nootebook', 'teclado'];
                 $retorno = is_array($array);
                 if ($retorno) {
                     echo '<br>Sim, é um array.';
                 }else {
                     echo '<br>Não é um array.';
                }*/

                // ARRAY_KEYS()
                /*$array = [1 => 'a', 7 => 'b', 18 => 'c'];
                echo '<pre>';
                    print_r($array);
                echo '</pre>';

                $chaves_array = array_keys($array);
                echo '<pre>';
                    print_r($chaves_array);
                echo '</pre>';*/

                // SORT()
                /*$array = ['teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'nootebook'];
                echo '<pre>';
                    print_r($array);
                echo '</pre>';
                sort($array); // true ou false
                echo '<pre>';
                    print_r($array);
                echo '</pre>';*/
                
                // ASORT
                /*$array = ['teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'nootebook'];
                echo '<pre>';
                    print_r($array);
                echo '</pre>';

                asort($array);

                echo '<pre>';
                    print_r($array);
                echo '</pre>';*/
                // COUNT
                /*$array = ['teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'nootebook'];
                echo '<pre>';
                    print_r($array);
                    echo count($array);
                echo '</pre>';*/

                // ARRAY_MERGE()
                /*$array1 = ['osx', 'windows'];
                $array2 = array('linux');
                $array3 = ['solaris'];

                $novo_array = array_merge($array3, $array2, $array1);
                echo '<pre>';
                    print_r($novo_array);
                echo '</pre>';*/

                // EXPLODE()
                // $string = '26/04/2025';
                // $array_retorno = explode('/', $string);
                // echo '<pre>';
                //     print_r($array_retorno);
                //     echo $array_retorno[2] . '-' . $array_retorno[1] . '-' . $array_retorno[0];
                // echo '</pre>';
                $array = ['a', 'b', 'x', 'y'];
                $string_retorno = implode(',', $array);
                echo $string_retorno;

            ?>
        </section>
    </main>
</body>
</html>