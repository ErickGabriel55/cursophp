<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extra - false, null e empty</title>
    <link rel="stylesheet" href="../css/reset.css">
</head>
<body>
    <main>
        <section>
            <h1>False, Null e Empty</h1>
            <?php 
                // false - tipo variavel booleana
                // null e empty - valores especiais

                $funcionario1 = null;
                $funcionario2 = '';

                // valores null
                if (empty($funcionario1)) {
                    echo 'sim, a variável é vazia';
                }else {
                    echo 'não, a variável não é vazia';
                }

                if (empty($funcionario2)) {
                    echo '<br>sim, a variável é vazia';
                }else {
                    echo '<br>não, a variável não é vazia';
                }

            ?>
        </section>
    </main>
</body>
</html>