<?php 
include '../koneksi.php';

// mengaktifkan session
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("location:../index.php");
}
// menampilkan pesan selamat datang
echo "Hai, selamat datang ". $_SESSION['username'];
?>
<br/>
<h2>Daftar Kontak</h2>
<table border="1">
    <tr><th>NO</th><th>NAMA</th><th>JENIS KELAMIN</th><th>EMAIL</th><th>ALAMAT</th><th>KOTA</th><th>PESAN</th></tr>
    <?php
    $kontak = mysqli_query($koneksi, "SELECT * FROM kontak"); //query select
    $no=1;
    foreach ($kontak as $row){ //print data
        echo"<tr>
        <td>$no</td>
        <td>".$row['nama']."</td>
        <td>".$row['jkel']."</td>
        <td>".$row['email']."</td>
        <td>".$row['alamat']."</td>
        <td>".$row['kota']."</td>
        <td>".$row['pesan']."</td>
        </tr>";
    $no++;}
    ?>
</table>
<a href="logout.php">LOGOUT</a>