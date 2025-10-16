<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodos de Pesquisa</title>
    <link rel="stylesheet" href="../css/reset.css">
</head>
<body>
    <main>
        <section>
            <h1>Metodos de Pesquisa</h1>
            <?php 
                // in_array() -> Colocamos o que queremos procurar e onde queremos procurar. Retorna true (1) ou false (texto vazio).
                // array_search() -> Retorna o indice caso seja existente e null (texto vazio) caso contrário. Colocamos o que queremos procurar e onde queremos procurar.
                // Apesar de null ser parecido com false, eles são diferentes.
                $lista_frutas = ['banana', 'maçã', 'morango', 'uva'];
                // echo '<pre>';
                // print_r($lista_frutas);
                // echo '</pre>';
                

                // //$existe = in_array('teu pai', $lista_frutas);
                // $existe = array_search('uva', $lista_frutas);
                // if($existe !== false){
                //     echo 'Sim, o valor pesquisado existe no array.';
                // }else {
                //     echo 'Não, o valor pesquisado não existe no array.';
                // }
                $lista_coisas = [
                'frutas' => $lista_frutas,
                'pessoas' => ['joão', 'maria']
            ];
            echo "<pre>";
            print_r($lista_coisas);
            echo "</pre>";
            echo in_array('uva', $lista_coisas['frutas']);
            ?>
        </section>
    </main>
</body>
</html>