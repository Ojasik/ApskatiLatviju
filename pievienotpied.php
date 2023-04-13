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
<div class="pievienotpiedav">
    <form method="post">
        Nosaukums: <input class='input' type='text' name='nos' placeholder='Ievadi nosaukumu *' ><br>
        Attels: <input class='input' type='text' name='att' placeholder='Ievadi attēla URL *' ><br>
        Vieta1: <input class='input' type='text' name='viet1' placeholder='Ievadi pirmo vietu *' ><br>
        Vieta2: <input class='input' type='text' name='viet2' placeholder='Ievadi otro vietu *' ><br>
        Datums: <input class='input' type='text' name='dat' placeholder='Ievadi datumu *' ><br>
        Cena: <input class='input' type='text' name='cena' placeholder='Ievadi cenu *' > <br>
        <button type='submit' name='pievienotp' value='Pievienot' class="btnlog">Pievienot</button>
    </form>
</div>
<?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            require ("connect_db.php");
            if(isset($_POST['pievienotp'])){
                $nosaukuma_ievade = $_POST['nos'];
                $attela_ievade = $_POST['att'];
                $vieta1_ievade = $_POST['viet1'];
                $vieta2_ievade = $_POST['viet2'];
                $datums_ievade = $_POST['dat'];
                $cena_ievade = $_POST['cena'];
                

                    if(!empty($attela_ievade) && !empty($nosaukuma_ievade) && !empty($vieta1_ievade) && !empty($attela_ievade) && !empty($vieta2_ievade) && !empty($datums_ievade) && !empty($datums_ievade)){
                        $pievienot_piedavajumu_SQL = "INSERT INTO piedavajumi(Attels, Nosaukums, Cena, Vieta1, Vieta2, Datums) VALUES ('$attela_ievade', '$nosaukuma_ievade', '$cena_ievade', '$vieta1_ievade', '$vieta2_ievade', '$datums_ievade')";

                        if(mysqli_query($savienojums, $pievienot_piedavajumu_SQL)){
                            echo "<div>Piedavajuma pievienošana ir noritējusi veiksmīgi!</div>";
                        }else{
                            echo "<div>Piedavajuma pievienošana nav izdevusies! Mēģiniet vēlreiz!</div>";
                        }
                    }else{
                        echo "<div>Piedavajuma pievienošana nav izdevusies! Kāds no ievades laukiem aizpildīts nekorekti!</div>";
                    }
                
            }}
    
        
    ?>










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
