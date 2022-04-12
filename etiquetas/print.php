<DOCTYPE html>
    <br>
    <table border="1" style="font-family: 'Oswald', sans-serif; font-size: 12px";>
        <tr>
            <td colspan="2" style="text-align:center; font-size: 20px"><b>IT CONTROL</b></td>
        </tr>
            <tr>
                <th>SETOR</th>
                <td>
                    <?php
                    $setor = $_POST['setor'];
                    if (empty($setor)) {
                        echo "Vazio";
                    } else {
                        echo $setor;
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <th>RESPONSAVEL</th>
                <td>
                    <?php
                    $resp = $_POST['resp'];
                    if (empty($resp)) {
                        echo "Vazio";
                    } else {
                        echo $resp;
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <th>CONTEUDO</th>
                <td>
                    <?php
                    $cont = $_POST['cont'];
                    if (empty($cont)) {
                        echo "Vazio";
                    } else {
                        echo $cont;
                    }
                    ?>
                </td>
            </tr>
    </table>
</html>