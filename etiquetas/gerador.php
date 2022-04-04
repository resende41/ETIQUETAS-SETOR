<DOCTYPE html>
    <link rel="stylesheet" href="content/css/application.css">
    <link rel="stylesheet" href="content/css/form.css">
    <nav class="modulos">
        <div class="modulo azul">
            <h3>PRODUCT PRINTER</h3>
            <ul>
                <li>
                    <a>
                        <form class="dados" action="etiquetas/print.php" method="post">
                            <p>CÓDIGO DO PRODUTO: <input id="cod" type="text" name="cod" /></p>
                            <p>IP: <input id="ip" type="text" name="ip" /></p>
                            <p>MAC: <input id="mac" type="text" name="mac" /></p>
                            <p><input type="submit" /></p>
                        </form>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</html>