<html>
<title>Latihan_1_6</title>

<head>

</head>

<body>
    <?php
    if (isset($_POST['hitung'])) {
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $operator = $_POST['operator'];
        switch ($operator) {
            case 'tambah':
                $hasil = $bil1 + $bil2;
                break;
            case 'kurang':
                $hasil = $bil1 - $bil2;
                break;
            case 'kali':
                $hasil = $bil1 * $bil2;
                break;
            case 'bagi':
                $hasil = $bil1 / $bil2;
                break;
             }
        }
    ?>

    <h2>KALKULATOR</h2>

    <form method="post" action="latihan_1_6.php">
        <table>
            <tr>
                <td>Bilangan 1 </td>
                <td><input type="text" name="bil1"></td>
            </tr>
            <tr>
                <td>Bilangan 2 </td>
                <td> <input type="text" name="bil2"></td>
            </tr>
            <tr>
                <td>Pilih Operator </td>
                <td><select name="operator">
                        <option value="tambah">+</option>
                        <option value="kurang">-</option>
                        <option value="kali">x</option>
                        <option value="bagi">/</option>
                    </select></td>
            </tr>
            <tr>
                <td><input type="submit" name="hitung" value="Hitung"></td>
            </tr>

        </table>

    </form>
    <?php
    if (isset($_POST['hitung'])) { ?>
        <?php echo "Hasil : " . $hasil; ?>

    <?php }

    ?>

</body>

</html>