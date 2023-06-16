<html>
    <head>
    <h1>Menampilkan Tabel Komoditas</h1>
    </head>

    <body>
        <h3>Tabel Komoditas</h3>
        <a href="index.php">Pengguna</a><br/>
        <a href="index1.php">Daerah</a><br/>
        <a href="index3.php">Provinsi</a><br/>
        <table border="1" class="table">
            <tr>
                <th>No</th>
                <th>Nama_komoditas</th>
                <th>Tanggal</th>
                <th>Harga_komoditas</th>
            </tr>
        <?php
            $nomor=1;
            include "connect.php";
            $query_mysql = mysqli_query($host,"SELECT * FROM komoditas");
            while($data = mysqli_fetch_array($query_mysql)){
        ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['nama_komoditas']; ?></td>
                <td><?php echo $data['tanggal']; ?></td>
                <td><?php echo $data['harga_komoditas']; ?></td>
            </tr>
            <?php } ?>

        <table>
    <body>
<html>
