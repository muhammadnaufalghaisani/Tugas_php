<!DOCTYPE html>
<html lang="en">
<body>
<form action="nilai.php" method="post">
<link rel = "stylesheet" href = "nilai.css">
<h1>NILAI</h1>
    Produktif<br> <input type="text" name="nilai1" min="1" max="100"><br>
    Matematika<br> <input type="text" name="nilai2" min="1" max="100"><br>
    Indonesia<br> <input type="text" name="nilai3" min="1" max="100"><br>
    Inggris<br> <input type="text" name="nilai4" min="1" max="100"><br>
    Informatika<br> <input type="text" name="nilai5" min="1" max="100"><br>
    <input type="submit" name="submit">
    <br>
</form>    

<?php
 if (isset($_POST['submit'])){
    $produktif = $_POST['nilai1'];
    $matematika = $_POST['nilai2'];
    $indonesia = $_POST['nilai3'];
    $inggris = $_POST['nilai4'];
    $informatika = $_POST['nilai5'];
    $jumlah = $produktif + $matematika + $indonesia + $inggris + $informatika;
    $rata = $jumlah / 5;
    echo "Rata rata : " .$rata;
    echo "<br>";
    echo "Terendah : ";
    echo min ($produktif, $matematika, $indonesia, $inggris, $informatika);
    echo "<br>Tertinggi : ";
    echo max($produktif, $matematika, $indonesia, $inggris, $informatika);

   $server = mysqli_connect("localhost","root","","latihan");

   if($server) {
       echo "koneksi berhasil!!!<br>";
   } else {
       echo"koneksi gagal!!!";
   }
   
   $sql = "insert into nilai (Produktif, Matematika, Indonesia, Inggris, Informatika)
   values
   ('$produktif', '$matematika', '$indonesia', '$inggris', '$informatika')";
   
   if(mysqli_query($server, $sql)){
       echo "penyimpanan berhasil!!!<br>";
   } else {
       echo "penyimpanan gagal!!!";
   }
}
   ?>
   </body>
   </html>