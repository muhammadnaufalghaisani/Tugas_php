<!DOCTYPE html>
<html lang="en">
<body>
<form action="hehe.php" method="post">
    <link rel = "stylesheet" href = "hehe.css">
  <h1>BIODATA</h1>
    Nama<br><input type="text" name="nama"><br>
    Alamat<br><input type="text" name="alamat"><br>
    Tanggal lahir<br><input type="date" name="date"><br>
    Umur<br><input type="text" name="umur"><br>
    Sekolah<br><input type="text" name="sekolah"><br>
    Rombel<br><input type="text" name="rombel"><br>
    <input type="submit" name="submit">
    <br>
</form>    

<?php
  if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $tanggalLahir = $_POST["date"];
    $umur = $_POST["umur"];
    $sekolah = $_POST["sekolah"];
    $rombel = $_POST["rombel"];

   
    echo "<br> Nama :  " .$nama ."<br>";
    echo "Alamat :  " . $alamat ."<br>";
    echo "Tanggal lahir :   " . $tanggalLahir ."<br>";
    echo "Umur :  " . $umur ;
    if ($umur < 15){
        echo " Tahun >";
       } else {
        echo " Tahun <br>";
       } 
    echo "Sekolah :  " . $sekolah ."<br>";
    echo "Rombel :  " . $rombel ."<br>";
  
  $server = mysqli_connect("localhost","root","","latihan");

if($server) {
    echo "koneksi berhasil!!!<br>";
} else {
    echo"koneksi gagal!!!";
}

$sql = "insert into abc (Nama, Alamat, Tanggal_Lahir, Umur, Sekolah, Rombel)
values
('$nama', '$alamat', '$tanggalLahir', '$umur', '$sekolah','$rombel')";

if(mysqli_query($server, $sql)){
    echo "penyimpanan berhasil!!!";
} else {
    echo "penyimpanan gagal!!!";
}
  }
?>
</body>
</html>