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
                $funcionario3 = false;

                // valores null
                if (is_null($funcionario1)) {
                    echo '<br>sim, a variável é null';
                }else {
                    echo '<br>não, a variável não é null';
                }

                if (is_null($funcionario2)) {
                    echo '<br>sim, a variável é null';
                }else {
                    echo '<br>não, a variável não é null';
                }

                // valores empty
                if (empty($funcionario1)) {
                    echo '<br>sim, a variável é vazia';
                }else {
                    echo '<br>não, a variável não é vazia';
                }

                if (empty($funcionario2)) {
                    echo '<br>sim, a variável é vazia';
                }else {
                    echo '<br>não, a variável não é vazia';
                }

                // valores falsos
                if (is_null($funcionario3)) {
                    echo '<br>sim, a variável é do tipo false';
                }else {
                    echo '<br>não, a variável não é do tipo false';
                }

                if (empty($funcionario2)) {
                    echo '<br>sim, a variável é do tipo false';
                }else {
                    echo '<br>não, a variável não é tipo false';
                }

            ?>
        </section>
    </main>
</body>
</html>