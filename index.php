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
            <li><a href="piedavajumi.html">Piedāvājumi</a></li>
            <li><a href="jaunumi.html">Aktualitātes</a></li>
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
<div class="pictures">
  <div class="container">
    <p>Dodies ceļojumā pa Latviju</p>
  </div>
  <div class="liela">
  <img src="images/Latvia.jpg" alt="">
</div>
<div id="popular">
   <div class="co">
    <div class="pri"><p>€1000.00</p></div>
    <div class="zoom">
      <a href="pieteikties.html"><img src="images/Ventspils.jpg" alt=""></a>
    </div>
      <h2>Ventspils</h2>
      <p>Jūs apskatīsiet:</p>
      <p class="places">1. Koncertzāle LATVIJA<br>2. Livonijas ordeņa pils</p>
      <p>21.04.2023 - 25.04.2023</p>
      <a href="pieteikties.html"><button>Pieteikties</button></a>
    </div>
    <div class="co">
      <div class="pri"><p>€1000.00</p></div>
      <div class="zoom">
      <a href="pieteikties.html"><img src="images/Rezekne.jpg" alt=""></a>
    </div>
      <h2>Rēzekne</h2>
      <p>Jūs apskatīsiet:</p>
      <p class="places">1. Sienu gleznojumi<br>2. Kultūras darbinieku parks</p>
      <p>21.04.2023 - 25.04.2023</p>
      <a href="pieteikties.html"><button>Pieteikties</button></a>
    </div>
    <div class="co">
      <div class="pri"><p>€1000.00</p></div>
      <div class="zoom">
      <a href="pieteikties.html"><img src="images/Liepaja.jpg" alt=""></a>
    </div>
      <h2>Liepāja</h2>
      <p>Jūs apskatīsiet:</p>
      <p class="places">1. Romas dārzs<br>2. Pludmale</p>
      <p>21.04.2023 - 25.04.2023</p>
      <a href="pieteikties.html"><button>Pieteikties</button></a>
    </div>
    <div class="co">
      <div class="pri"><p>€1000.00</p></div>
      <div class="zoom">
      <a href="pieteikties.html"><img src="images/Tervete.jpg" alt=""></a>
    </div>
      <h2>Tērvete</h2>
      <p>Jūs apskatīsiet:</p>
      <p class="places">1. Tērvetes koka pils<br>2. Annas Briegaderes muzejs</p>
      <p>21.04.2023 - 25.04.2023</p>
      <a href="pieteikties.html"><button>Pieteikties</button></a>
    </div>
    <a href="piedavajumi.html"><button class="visi">Visi piedāvājumi</button></a>
</div>
  </div>
  <div class="gray-cont">
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
<script src="script.js"></script>
</html>