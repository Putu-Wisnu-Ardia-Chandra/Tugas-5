<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barisan Aritmatika</title>
    <link rel="stylesheet" href="./PHP/stylephp.css">
</head>
<body>
    <h3>Perhitungan Barisan Aritmatika<h3>
    <form method="POST" action="">
        <table style="width: 25%;">
            <tr>
                <td>Suku Ke-1</td>
                <td>:</td>
                <td><input type="text" name="na" placeholder="Masukkan Suka Pertama" value="<?=isset($_POST['na']) ? $_POST['na']: ''?>"></td>
            </tr>
            <tr>
                <td>Suku Ke-2</td>
                <td>:</td>
                <td><input type="text" name="nb" placeholder="Masukkan Suka Kedua" value="<?=isset($_POST['nb']) ? $_POST['nb']: ''?>"></td>
            </tr>
            <tr>
                <td>Suku Ke-3</td>
                <td>:</td>
                <td><input type="text" name="nc" placeholder="Masukkan Suka Ke-N" value="<?=isset($_POST['nc']) ? $_POST['nc']: ''?>"></td>
            </tr>
        </table>
        <input type="submit" name="submit" value="Hasil"></input>
    </form>
    <?php
        if (isset ($_POST['submit'])) {
            $na = $_POST['na'];
            $nb = $_POST['nb'];
            $nc = $_POST['nc'];
            for ($i=1 ; $i<=$nc; $i++) {
                $hasil = $na + (($i-1) * $nb);
                echo "<br>".$hasil;
            }
            $hasilsuku = $na + ($nc-1) * $nb;
            echo "<br> <br> Nilai Suku ke- ". $nc;
            echo "<br>".$hasilsuku;
        }
    ?>
</body>
</html>