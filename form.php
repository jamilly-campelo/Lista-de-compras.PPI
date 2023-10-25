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
<h1>Cadastrar itens</h1>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
        </ul>
    </nav>
    <main>
        <form action="salvar.php" method="get" class="container">
            <div class="form-group">                   
                <label for="txtNome">Nome do produto:</label>
                <input class="form-control" type="text" name="nome" id="txtNome">
            </div>
            <div class="form-group"> 
                <label for="numValor">Valor unitário:</label>
                <input class="form-control" type="number" name="valor" id="numValor" step="0.01">
            </div>
            <div class="form-group"> 
                <label for="numQuantidade">Quantidade:</label>
                <input class="form-control" type="number" name="quantidade" id="numQuantidade">
            </div>
                <input class="btn btn-success" type="submit" value="Cadastrar">
                <a class="btn btn-secondary" href="index.php">Cancelar</a>
        </form>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>