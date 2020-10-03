<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deret Fibonacci</title>
    <link rel="stylesheet" href="./PHP/stylephp.css">
</head>
<body>
    <h3>Perhitungan Deret Fibonacci</h3>
    <form action="" method="get">
        <table style="width: 25%;">
            <tr>
                <td>Bilangan Ke-1</td>
                <td>:</td>
                <td><input type="text" name="bil1" placeholder="Masukkan Bilangan Pertama"></td>
            </tr>
            <tr>
                <td>Bilangan Ke-2</td>
                <td>:</td>
                <td><input type="text" name="bil2" placeholder="Masukkan Bilangan Kedua"></td>
            </tr>
            <tr>
                <td>Jumlah Deret</td>
                <td>:</td>
                <td><input type="text" name="deret" placeholder="Masukkan Jumlah"></td>
            </tr>
        </table><br>
        <input type="submit" value="Hasil">
        <input type="reset" value="Kosongkan">
    </form>
    <?php
        $angka_sebelumnya = $_GET['bil1'];
        $angka_sekarang = $_GET['bil2'];
        $deret = $_GET['deret'];

        echo '<br>';
        echo "Hasilnya Adalah : $angka_sebelumnya $angka_sekarang";

        for ($i = 1; $i <= $deret; $i++) {
            $output = $angka_sekarang + $angka_sebelumnya;
            echo " $output";
            $angka_sebelumnya = $angka_sekarang;
            $angka_sekarang = $output;
        }
    ?>
</body>
</html>