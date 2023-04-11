<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Pieteikties</title>
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
      <div id="login" class="fas fa-arrow-right-to-bracket"></div>
    </div>
  </header>
  <h1>Pieteikties ceļojumam</h1>
  <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            require ("connect_db.php");
            if(isset($_POST['gatavs'])){
                $celojums_ievade = $_POST['celojums'];
                $vards_ievade = $_POST['vards'];
                $uzvards_ievade = $_POST['uzvards'];
                $dzim_dati_ievade = $_POST['dzimDati'];
                $talrunis_ievade = $_POST['talrunis'];
                $epasts_ievade = $_POST['epasts'];
                
                $parbaudeSQL = "SELECT * FROM pieteikums WHERE Talrunis = '$talrunis_ievade'";
                $parbaudesRezultats = mysqli_query($savienojums, $parbaudeSQL);

                if(mysqli_num_rows($parbaudesRezultats) >= 1){
                    echo "<div'>Kļūda! Informācija par Jums jau ir iesniegta!</div>";
                }else{
                    if(!empty($celojums_ievade) && !empty($vards_ievade) && !empty($uzvards_ievade) && !empty($dzim_dati_ievade) && !empty($talrunis_ievade) && !empty($epasts_ievade)){
                        $pievienot_pieteikumu_SQL = "INSERT INTO pieteikums(Vards, Uzvards, Dzim_dati, Epasts, Talrunis, Celojums) VALUES ('$vards_ievade', '$uzvards_ievade', '$dzim_dati_ievade', '$epasts_ievade', '$talrunis_ievade', '$celojums_ievade')";

                        if(mysqli_query($savienojums, $pievienot_pieteikumu_SQL)){
                            echo "<div>Reģistrācija ir noritējusi veiksmīgi! Uz drīzu sazināšanos!</div>";
                        }else{
                            echo "<div>Reģistrācija nav izdevusies! Mēģiniet vēlreiz!</div>";
                        }
                    }else{
                        echo "<div>Reģistrācija nav izdevusies! Kāds no ievades laukiem aizpildīts NEKOREKTI!</div>";
                    }
                }
            }else{
                ?>
                <?php $celojums = $_POST['pieteikties'];?>
    <div class="pieteikties">
    <form method="POST">
        <input type="text" placeholder="Ceļojums *" name="celojums" value="<?php echo $celojums; ?>"title="Ceļojums" readonly>
        <input type="text" placeholder="Vārds *" name="vards"  title="Vārds" required>
        <input type="text" placeholder="Uzvārds *" name="uzvards"  title="Uzvārds" required>
        <input type="text" placeholder="Dzimšanas dati *" name="dzimDati"  title="Dzimšanas dati" required>
        <input type="number" placeholder="Tālrunis *" name="talrunis"  title="Tālrunis" required>
        <input type="email" placeholder="E-pasts *" name="epasts" title="E-pasts" required>
        <input type="submit" value="Pieteikties!" name="gatavs" class="btn">
    </form>
</div>
<?php 
        }}else{
            echo "<div>Kaut kas nogāja greizi! Atgriezies sākumlapā un mēģini vēlreiz!</div>";
            header("Refresh: 2; url=index.php");
        }
    ?>
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
</body>