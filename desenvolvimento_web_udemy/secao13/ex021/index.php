<?php
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
    <link rel="stylesheet" href="../css/reset.css">
</head>
<body>
    <header>
        
    </header>
    <main>
        <section>
            <?php 
                $parametro = 2;
                switch ($parametro) {
                    case 1:
                        echo 'Entrou no case 1';
                        break;
                    case 2:
                        echo 'Entrou no case 2';
                        break;
                    case 3:
                        echo 'Entrou no case 3';
                        break;
                    default:
                        echo 'Entrou no default';
                        break;
                } 
            ?>
        
        </section>
    </main>
    <footer>

    </footer>
</body>
</html>
