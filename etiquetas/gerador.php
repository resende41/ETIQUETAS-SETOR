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
                            <p>OP: <input id="op" type="text" name="op" /></p>
                            <p>QUANTIDADE: <input id="qntd" type="float" name="qntd" /></p>
                            <p>OBSERVAÇÕES: <input id="obs" type="text" name="obs" /></p>
                            <p>OPERADOR: <input id="operator" type="text" name="operator" /></p>
                            <p><input type="submit" /></p>
                        </form>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</html>