<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Apskati Latviju</title>
</head>
<body>
    <header>
      <div class="header-cont">
    <div class="logo"><a href="index.php"><img src="images/logo.png"></a>Apskati Latviju</div>
    <nav class="nav">
        <ul>
            <li><a href="piedavajumi.php">Piedāvājumi</a></li>
            <li><a href="jaunumi.php">Aktualitātes</a></li>
        </ul>
    </nav>
    <div onclick="openLoginForm()" id="login" class="fas fa-arrow-right-to-bracket"></div>
    <div id="LoginForm">
      <form method="post" action="">
        <label for="username">Lietotājvards:</label>
        <input type="text" id="username" name="username">
        <label for="password">Parole:</label>
        <input type="password" id="password" name="password">
        <input class="btnlog" type="submit" name='ielogoties' value="Ielogoties">
      </form>
    </div>
    <?php
    require("connect_db.php");
    if(isset($_POST['ielogoties'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM lietotaji WHERE Lietotajvards='$username' AND Parole='$password'";
    $result = $savienojums->query($sql);
    if($result->num_rows > 0){
      session_start();
      $_SESSION['username'] = $username;
      header("Location: jaunumi.php");
    }
    else{
      echo "Nepareiz lietotājvards vai parole!";
    }
  }
    $savienojums->close();
    ?>
  </div>
</header>
<h1>Piedāvājumi</h1>
<div class="piev"><a href='pievienotpied.php'><button class="pievienot">Pievienot piedāvājumu</button></a></div>
  <div id="popular2">
  <?php
            require("connect_db.php");

            $piedavajumuVaicajums = "SELECT * FROM piedavajumi";
            $atlasaPiedavajumus = mysqli_query($savienojums, $piedavajumuVaicajums);
   if(mysqli_num_rows($atlasaPiedavajumus) > 0 ){
       while($ieraksts = mysqli_fetch_assoc($atlasaPiedavajumus)){
        echo "
    <div class='co'>
     <div class='pri'><p>{$ieraksts['Cena']}</p></div>
     <div class='zoom'>
       <a href='pieteikties.html'><img src='{$ieraksts['Attels']}'></a>
     </div>
       <h2>{$ieraksts['Nosaukums']}</h2>
       <p>Jūs apskatīsiet:</p>
      <p class='places'>{$ieraksts['Vieta1']}<br>{$ieraksts['Vieta2']}</p>
      <p>{$ieraksts['Datums']}</p>
       <a href='pieteikties.html'><button>Pieteikties</button></a>
     </div>
     ";
       }
      }
  ?>
 </div>
 </body>
 <footer>
    <div class="foot">
      <div class="icons">
    <a href="#"><i class="fa-brands fa-youtube"></i></a>
    <a href="#"><i class="fa-brands fa-facebook"></i></a>
    <a href="#"><i class="fa-brands fa-twitter"></i></a>
    <a href="#"><i class="fa-brands fa-instagram"></i></a>
  </div>
  <ul>
      <li><i class="fa fa-phone-flip"></i>+371 22 345 678</li>
      <li><i class="fa fa-envelope"></i>apskatilatviju@apskatilatviju.lv</li>
      <li><i class="fa fa-location-dot"></i>Latvija</li>
  </ul>
  <ul>
    <li><a href="piedavajumi.html">Piedāvājumi</a></li>
    <li><a href="jaunumi.html">Aktualitātes</a></li>
  </ul>
  <p>Apskati Latviju &copy; 2023</p>
  </div>
  </footer>
