<?php
//PANGGIL FAIL SAMBUNG KE PANGKALAN DATA
include_once("Config.php");

//MEMAPARKAN DATA MENGIKUT SUSUSAN DATA DIMASUKKAN

$result = mysqli_query($mysqli,  "SELECT * FROM produk ORDER BY id DESC");
?>
<html>  
    <head>
        <title>Senarai Barangan</title>
    </head>
    <body>
    <center>
    <h2>SENARAI BARANGAN DAN HARGA</h2>
    <fieldset>
    <table width='80%' border=0>
        <tr bgcolor='#CCCCCC'>
            <td>Bil.</td>
            <td>Nama Produk</td>
            <td>Harga</td>
            <td>Tindakan</td>
        </tr>

<?php
        $id=1;//NILAI PEMULA PEMBILANG
        
//MEMAPARKAN DATA KE DALAM JADUAL YANG DIBINA
    while ($res = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$id;
        echo "<td>".$res['nama']."</td>";
        echo "<td>".RM.$res['harga']."</td>";
        echo "<td><a href=\"edit.php?id=$res[id]\">kemaskini</a> | <a href=\"delete.php?id=$res[id]\">hapus</a></td>";
        
$id++; //BILANGAN INCREMENT
}
?>
        </table>
        <br><a href="add.php">Daftar Barang Baru</a>
     </center>   
    </fieldset>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<button style="float:right"><a href="404.html">Click here</a></button>
    </body>
</html>