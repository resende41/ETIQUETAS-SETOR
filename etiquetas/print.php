<DOCTYPE html>
    <br>
    <table border="1" style="font-family: 'Oswald', sans-serif; font-size: 12px";>
        <tr>
            <td colspan="2" style="text-align:center; font-size: 20px"><b>IT ASSET</b></td>
        </tr>
            <tr>
                <th>EQUIPAMENTO</th>
                <td>
                    <?php
                    $cod = $_POST['cod'];
                    if (empty($cod)) {
                        echo "Vazio";
                    } else {
                        echo $cod;
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <th>IP</th>
                <td>
                    <?php
                    $ip = $_POST['ip'];
                    if (empty($ip)) {
                        echo "Vazio";
                    } else {
                        echo $ip;
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <th>MAC</td>
                <td>
                    <?php
                    $mac = $_POST['mac'];
                    if (empty($mac)) {
                        echo "Vazio";
                    } else {
                        echo $mac;
                    }
                    ?>
                </td>
            </tr>
    </table>
</html>