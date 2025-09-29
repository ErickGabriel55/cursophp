<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Para Manipulação de Datas</title>
    <link rel="stylesheet" href="../css/reset.css">
</head>
<body>
    <main>
        <section>
            <h1>Funções Para Manipulação de Datas</h1>
            <?php 
                // Recuperação da data atual ou data corrente]
                echo date('d/m/Y H:i');
                echo "<br>";
                echo date_default_timezone_get();
                echo "<br>";
                echo date_default_timezone_set('America/Maceio');
                echo "<br>";
                echo date_default_timezone_get();
                
                $data_inicial = '2018-04-24';
                $data_final = '2018-05-15';

                // timestamp - Representação de tempo da data apartir 01/01/1970
                $time_inicial = strtotime($data_inicial);
                $time_final = strtotime($data_final);
                echo "<br>";
                echo $data_inicial . ' - ' . $time_inicial;
                echo "<br>";
                echo $data_final . ' - ' . $time_final;
                echo "<br>";
                $diferenca_times = $time_final - $time_inicial; // abs
                echo "A diferença de segundos entre a data inicial e final é $diferenca_times segundos.";
                $segundos_existem_dia = 24 * 60 * 60;
                echo "<br>Um dia possui $segundos_existem_dia segundos.";
                $diferenca_dias_datas = $diferenca_times / $segundos_existem_dia;
                echo "<br>A diferença de dias é $diferenca_dias_datas dias.";
            ?>
        </section>
    </main>
</body>
</html>