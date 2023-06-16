<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Kaneyan Information</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="container nav-wrapper">
                <a href="index.html" class="logo">Kaneyan<span>Information</span></a>
                <div class="menu-wrapper">
                    <ul class="menu">
                        <li class="menu-item"><a href="Home.html" class="menu-link active">Home</a></li>
                        <li class="menu-item"><a href="add2.php" class="menu-link">Komoditas</a></li>
                        <li class="menu-item"><a href="add1.php" class="menu-link">Daerah</a></li>
                        <li class="menu-item"><a href="add3.php" class="menu-link">Provinsi</a></li>
                    </ul>
                    <a href="login.php class="btn-member">Login</a>
                </div>
                <div class="menu-toggle bx bxs-grid-alt">
                </div>
            </div>
        </nav>
<body>
<?php
include_once 'connect.php';
$result = mysqli_query($host,"SELECT * FROM daerah");
?>

<!DOCTYPE html>
<html>
<head>
<title>Hapus Data Daerah</title>
</head>
<body>
<table>
	<tr>
	<td>No</td>
	<td>Nama Daerah</td>
	<td>Tanggal</td>
    <td>Harga Perdaerah</td>
    <td>Nama Komoditas</td>
    <td>Nama Provinsi</td>
	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["id_daerah"]; ?></td>
	<td><?php echo $row["nama_daerah"]; ?></td>
	<td><?php echo $row["tanggal"]; ?></td>
    <td><?php echo $row["harga_perdaerah"]; ?></td>
    <td><?php echo $row["id_komoditas"]; ?></td>
    <td><?php echo $row["id_provinsi"]; ?></td>
	<td><a href="deleteprocess1.php?id_daerah=<?php echo $row["id_daerah"]; ?>">Delete</a></td>
	</tr>
	<?php
	$i++;
	}
	?> 
</table>
</body>
</html>
