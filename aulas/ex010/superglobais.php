<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Globais</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <main>
        <section>
            <h1>Super Globais</h1> 
            <pre>
                <?php
                    setcookie("dia-da-semana", "SEGUNDA", time() + 3600);

                    session_start();
                    $_SESSION['teste'] = 'FUNCIONA!';

                    echo '<h2>SuperGlobal GET</h2>';
                    var_dump($_GET);
                    echo '<br>'; 

                    echo '<h2>SuperGlobal POST</h2>';
                    var_dump($_POST);
                    echo '<br>';

                    echo '<h2>SuperGlobal REQUEST</h2>';
                    var_dump($_REQUEST);
                    echo '<br>';

                    echo '<h2>SuperGlobal Cookie</h2>';
                    var_dump($_COOKIE);
                    echo '<br>';

                    echo '<h2>SuperGlobal Session</h2>';
                    var_dump($_SESSION);
                    echo '<br>';

                    echo '<h2>SuperGlobal Env</h2>';
                    var_dump($_ENV);
                    echo '<br>';

                    echo '<h2>SuperGlobal Server</h2>';
                    var_dump($_SERVER);
                    echo '<br>';

                    echo '<h2>SuperGlobal Globals</h2>';
                    var_dump($GLOBALS);
                    echo '<br>';
                ?>
            </pre>
        </section>
    </main>
</body>
</html>