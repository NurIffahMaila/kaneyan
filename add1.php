<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Update/Edit</title>
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
                    <a href="login.php" class="btn-member">Login</a>
                </div>
                <div class="menu-toggle bx bxs-grid-alt">
                </div>
            </div>
        </nav>
<body>
<a href="update1.php">Lihat Tabel</a>
</div>
<?php 
    include_once("connect.php");
   $sql1="SELECT * FROM provinsi";
   $rsprovinsi = mysqli_query($host, $sql1) or die (mysqli_error());
   $sql = "SELECT * FROM komoditas";
   $rskomoditas = mysqli_query($host, $sql) or die (mysqli_error());
   ?>
        <h3>Tabel Daerah</h3>
	    <form action="add1.php" method="post" name="form1">
            <table width="25%" border="0">
                <tr> 
                    <td>Nama Daerah</td>
                    <td><input type="text" name="nama_daerah"></td>
                </tr>
                <tr> 
                    <td>Tanggal</td>
                    <td><input type="date" name="tanggal"></td>
                </tr>
                <tr> 
                    <td>Harga Perdaerah</td>
                    <td><input type="text" name="harga_perdaerah"></td>
                </tr>
                <tr>
                    <td>Nama Komoditas</td>
                    <td>
                    <select name="nama_komoditas">
                        <option disabled selected></option>
                        <?php while($data1 = mysqli_fetch_array($rskomoditas)){?>
                                <option value="<?=$data1 ['id_komoditas'];?>"><?=$data1 ['nama_komoditas'];?></option>

                           <?php }?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Nama Provinsi</td>
                    <td>
                    <select name="nama_provinsi">
                        <option disabled selected></option>
                        <?php while($data1 = mysqli_fetch_array($rsprovinsi)){?>
                                <option value="<?=$data1 ['id_provinsi'];?>"><?=$data1 ['nama_provinsi'];?></option>

                           <?php }?>
                        </select>
                    </td>
                </tr>
                <tr>
                    
                    <td>Submit</td>
                    <td><input type="submit" name="Submit" value="Add"></td>
                </tr>
                <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nama_daerah= $_POST['nama_daerah'];
        $tanggal = $_POST['tanggal'];
        $harga_perdaerah = $_POST['harga_perdaerah'];
        $nama_komoditas = $_POST['id_komoditas'];
        $nama_provinsi = $_POST['id_provinsi'];
    $sql="INSERT INTO daerah (nama_daerah,tanggal,harga_perdaerah,id_komoditas,id_provinsi) VALUES('$nama_daerah','$tanggal','$harga_perdaerah','$nama_komoditas','$nama_provinsi')";
    $result = mysqli_query($host,$sql,);

        
        // Show message when user added
       // echo "Data added successfully. <a href='index.php'>View Data Buku</a>";
        header("location:update1.php");

    }
    ?>
<style>
  .container {
    max-width: 90rem;
    margin: 2rem auto;
    padding: 0px 2rem;
  }
  
  .img-fluid {
    max-width: 100%;
  }

  
  .items {
    display: flex;
    align-items: center;
    gap: 30px;
  }
  
  .items a:link {
    text-decoration: none;
    color: white;
    font-size: 1.5rem;
    font-weight: bold;
  }
  
  .items a:hover {
    color: #996767(255, 255, 255);
  }
  
  
  button {
    font-size: 2rem;
    padding: 0.6rem 1rem;
    font-weight: bold;
    color: white;
    background: linear-gradient(to right, #996767, #efb5ac);
    border-radius: 10px;
    box-shadow: #fff(255, 255, 255, 0.2) 0px 7px 29px 0px;
    cursor: pointer;
    border: none;
  }
  
  button:hover {
    background: white;
    outline: 1px solid #996767;
    color: rgb(160, 50, 136);
    border: none;
  }
  
  .row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    justify-content: center;
    align-items: center;
  }
  
  .info {
    display: flex;
    flex-direction: column;
  }
  .short-info {
    color: #996767;
    font-size: 1rem;
    margin-bottom: 0.9rem;
  }
  
  .hero-heading {
    font-size: 3rem;
    margin-bottom: 0.3rem;
  }
  .hero-sub-heading {
    font-size: 0.9rem;
    opacity: 0.7;
  }
  
  .users {
    display: flex;
    align-items: center;
    margin: 1rem 0px;
  }
  .user {
    width: 20px;
    height: 20px;
    border-radius: 50%;
    border: 2px solid red;
  }
  .learn-more {
    align-self: start;
    margin-top: 3rem;
  }
  
  /* media queries */
  
  @media only screen and (max-width: 800px) {
    .items {
      display: none;
    }
  
    .row {
      grid-template-columns: 1fr;
    }
    .learn-more {
      align-self: start;
      margin: 1rem 0px;
    }
  }
  
</style>
</table>
</form>
</body>
</html>
