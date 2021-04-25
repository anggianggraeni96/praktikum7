<!DOCTYPE html>
<html>
    <head>
        <title>Form Input</title> <!-- Form untuk input data -->
    </head>
    <body>
        <form method="post" action="tambah.php">
            <table> <!--Menampilkan data-->
                <tr><td>NAMA</td><td><input type="text" name="nama"></td></tr><!--INPUT NAMA-->
                <tr><td>JENIS KELAMIN</td><td><input type="text" name="jkel"> </td></tr><!--INPUT JENIS KELAMIN-->
                <tr><td>EMAIL</td><td><input type="text" name="email"></td></tr> <!--INPUT EMAIL-->
                <tr><td>ALAMAT</td><td><input type="text" name="alamat"></td></tr> <!--INPUT ALAMAT-->
                <tr><td>KOTA</td><td><input type="text" name="kota"></td></tr> <!--INPUT KOTA-->
                <tr><td>PESAN</td><td><input type="text" name="pesan"></td></tr> <!--INPUT PESAN-->
                <tr>
                    <td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>