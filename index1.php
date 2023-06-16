<html>
    <head>
    <h1>Menampilkan Tabel Daerah</h1>
    </head>

    <body>
        <h3>Tabel Daerah</h3>
        <a href="index.php">Pengguna</a><br/>
        <a href="index2.php">Komoditas</a><br/>
        <a href="index3.php">Provinsi</a><br/>
        <table border="1" class="table">
            <tr>
                <th>No</th>
                <th>Nama_daerah</th>
                <th>Tanggal</th>
                <th>Harga_daerah</th>
                <th>Nama_komoditas</th>
                <th>Nama_provinsi</th>
                <th>Action</th>
            </tr>
        <?php
            include "connect.php";
            $nomor=1;
            $query_mysql = mysqli_query($host,"SELECT daerah.id_daerah, daerah.nama_daerah, daerah.tanggal, daerah.harga_perdaerah,  komoditas.nama_komoditas, provinsi.nama_provinsi
            FROM daerah, komoditas, provinsi
            WHERE daerah.ID_komoditas=komoditas.id_komoditas and daerah.id_provinsi=provinsi.id_provinsi");
            while($data = mysqli_fetch_array($query_mysql)){
        ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['nama_daerah']; ?></td>
                <td><?php echo $data['tanggal']; ?></td>
                <td><?php echo $data['harga_perdaerah']; ?></td>
                <td><?php echo $data['nama_komoditas']; ?></td>
                <td><?php echo $data['nama_provinsi']; ?></td>
            </tr>
            <?php } ?>

        <table>
    <body>
<html>
