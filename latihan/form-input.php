<!DOCTYPE html>
<html>
    <head>
        <title>Form Input</title> <!-- Form untuk input data -->
    </head>
    <body>
        <form method="post" action="simpan.php">
            <table> <!--Menampilkan data-->
                <tr><td>NIM</td><td><input type="text" onkeyup="isi_otomatis()" name="nim"></td></tr><!--INPUT NIM-->
                <tr><td>NAMA</td><td><input type="text" name="nama"></td></tr><!--INPUT NAMA-->
                <tr><td>JENIS KELAMIN</td><td>
                    <input type="radio" name="jenis_kelamin" value="L"> Laki-laki
                    <input type="radio" name="jenis_kelamin" value="P"> Perempuan 
                </td></tr><!--INPUT JENIS KELAMIN-->
                <tr><td>JURUSAN</td>
                    <td><select name="jurusan">
                            <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
                            <option value="TEKNIK MESIN">TEKNIK MESIN</option>
                            <option value="TEKNIK KIMIA">TEKNIK KIMIA</option>
                </select></td></tr> <!--INPUT JURUSAN-->
                <tr><td>ALAMAT</td><td><input type="text" name="alamat"></td></tr> <!--INPUT ALAMAT-->
                <tr>
                    <td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>