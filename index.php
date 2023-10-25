<?php
//conexão ao banco de dados

$conn = new PDO("sqlite:lista");
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Lista de Compras</h1>
    <nav>
        <ul>
            <li><a href="form.php">Cadastrar itens</a></li>
        </ul>
    </nav>
    <main class="container">
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Valor</th>
                <th>Quantidade</th>
            </tr>
            <?php
            $q = $conn->query("SELECT * FROM itens;");
            $itens = $q->fetchAll();

            foreach($itens as $c):
            ?>
            <tr>
                <td><?= $c->id ?></td>
                <td><?= $c->nome ?></td>
                <td><?= $c->valor ?></td>
                <td><?= $c->quantidade ?></td>
            </tr>
            <?php
            endforeach;
            ?>
        </table>
    </main>
    
</body>
</html>