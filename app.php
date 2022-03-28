<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="content/css/estilo.css">
    <link rel="stylesheet" href="content/css/application.css">
    <title>ETIQUETAS</title>
</head>
<body class="application">
    <header class="cabecalho">
        <h1>ETIQUETAS</h1>
        <h2>PRINT-SERVER</h2>
    </header>
    <nav class="navegacao">
        <a href="index.php">Home</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </div>
    </main>
    <footer class="rodape">
        GHEST CODER © <?= date('D, M, Y'); ?>
    </footer>
</body>
</html>