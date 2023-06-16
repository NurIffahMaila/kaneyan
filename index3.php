<html>
    <head>
        <h1>Menampilkan Table Provinsi</h1>
    </head>

    <body>
        <h3>Data Provinsi</h3>
        <a href="index.php">Pengguna</a><br/>
        <a href="index1.php">Daerah</a><br/>
        <a href="index2.php">Komoditas</a><br/>
        <table border="1" class="table">
            <tr>
                <th>No</th>
                <th>Nama provinsi</th>
            </tr>
        <?php
        $nomor=1;
        include "connect.php";
        $query_mysql = mysqli_query($host,"SELECT * FROM provinsi");
        while ($data = mysqli_fetch_array($query_mysql)){
    ?>
        <tr>
            <td><?php echo $nomor++; ?></td>
           <td><?php echo $data['nama_provinsi']; ?></td>
        </tr>
        <?php } ?>
        </table>
    <body>
</html>
