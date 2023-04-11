<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Aktualitātes</title>
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
  <h1>Aktualitātes</h1>
  <div class="jaunumi">
  <?php
            require("connect_db.php");

            $jaunumuVaicajums = "SELECT * FROM aktualitates";
            $atlasaJaunumus = mysqli_query($savienojums, $jaunumuVaicajums);
   if(mysqli_num_rows($atlasaJaunumus) > 0 ){
       while($ieraksts = mysqli_fetch_assoc($atlasaJaunumus)){
        echo "
    <div class='jaunums'>
      <img src={$ieraksts['Attels_URL']}>
    <div class='jaun-text'>
      <h2>{$ieraksts['Virsraksts']}</h2>
      <p>{$ieraksts['Aktualitate']}</p>
      <p>{$ieraksts['Datums']}</p>
    </div>
   </div>
   ";
       }
      }
      ?>
  </div>
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