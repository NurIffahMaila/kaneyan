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
                <a href="home.html" class="logo">Kaneyan<span>Information</span></a>
                <div class="menu-wrapper">
                    <ul class="menu">
                        <li class="menu-item"><a href="home.html" class="menu-link active">Home</a></li>
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
<!-- Hero Section -->
<section>
    <div class="container">
      <div class="row">
        <div class="info">
          <h2 class="hero-heading">Informasi Online Peternakan</span></h2>
          <p class="hero-sub-heading">take good care of it so that it produces fruits and vegetables and is beautiful and fresh.</p>
          <button class="learn-more"><a href="login.php" >START</a>
            </button> 
        </div>
        <div class="hero-image">
          <img src="Sapi1.jpg" class="img-fluid">
        </div>
      </div>
    </div>
  </section>
  <footer class="footer">
    @2023 design by Kaneyan
  </footer>
  <!-- Hero Section Ends -->
<style>
  body {
    font-family: Georgia, "Times New Roman", Times, serif;
    color: white;
    background-color: rgb(83, 146, 68);
  }
  
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
    background: linear-gradient(to right, #18e857, #58a624);
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
</body>
</html>
