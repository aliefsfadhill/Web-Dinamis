<!DOCTYPE html>
<html>
<head>
    <title>Kalkulasi Kabataku</title>
</head>
<body>

<h2>Kalkulator Kabataku (Tambah, Kurang, Bagi, Kali)</h2>
<h5>by Alief Sultan Fadhillah</h5>

<form method="post">
    <label>Angka 1:</label><br>
    <input type="number" name="angka1" required><br><br>
    
    <label>Angka 2:</label><br>
    <input type="number" name="angka2" required><br><br>
    
    <label>Operasi:</label><br>
    <select name="operasi">
        <option value="tambah">Tambah (+)</option>
        <option value="kurang">Kurang (-)</option>
        <option value="kali">Kali (*)</option>
        <option value="bagi">Bagi (/)</option>
    </select><br><br>
    
    <input type="submit" name="hitung" value="Hitung"><br><br>
</form>

<?php
if(isset($_POST['hitung'])){
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $operasi = $_POST['operasi'];
    $hasil = 0;

    switch($operasi){
        case "tambah":
            $hasil = $angka1 + $angka2;
            break;
        case "kurang":
            $hasil = $angka1 - $angka2;
            break;
        case "kali":
            $hasil = $angka1 * $angka2;
            break;
        case "bagi":
            if($angka2 != 0){
                $hasil = $angka1 / $angka2;
            } else {
                echo "Tidak bisa membagi dengan nol";
                exit;
            }
            break;
        default:
            echo "Operasi tidak valid";
            exit;
    }

    echo "<h3>Hasil: $hasil</h3>";
}
?>

</body>
</html>
