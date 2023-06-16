<html>
    <head>
        <h1>Menampilkan Table Pengguna</h1>
    </head>

    <body>
        <h3>Data Pengguna</h3>
        <table border="1" class="table">
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Password</th>
        <?php
        $nomor=1;
        include "connect.php";
        $query_mysql = mysqli_query($host,"SELECT * FROM pengguna");
        while ($data = mysqli_fetch_array($query_mysql)){
    ?>
        <tr>
            <td><?php echo $nomor++; ?></td>
           <td><?php echo $data['username_pengguna']; ?></td>
           <td><?php echo $data['password_pengguna']; ?></td>
        </tr>
        <?php } ?>
        </table>
    </body>
</html>
