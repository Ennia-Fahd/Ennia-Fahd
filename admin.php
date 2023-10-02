<!DOCTYPE html>
<html lang="en">
<head>
    <?php session_start(); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../siteEmsi/CSS/acceuil.css">
    
<title>Partie administrateur</title>
</head>

<body> 

    <section id="HeaderSec">
    <form method="Post" action="../../SiteEmsi/session.php">
 <button class="bn632-hover bn22"  name="Deconexion" id="Deconexion">Deconexion</button>
</form>
    <div class="img_btn">
        <div class="Image_career"><img src="..\..\SiteEmsi\Image\career.jpg"></div>
        <p style="position relative; font-size: 30px; text-align:center; color:black; margin-top: -50px;">Bienvenue <?php echo $_SESSION["NOM_PRENOM"]; ?> !</p>


    </div>
    <h1 style="position relative; text-align:center; color:white; margin-top: 5%;">Liste des  Centre de Carrière :</h1>
    </section>
    
   <section id="HomeSec" >
  
   <button class="button-17"  onclick="window.location.href='../../siteEmsi/index.php?Ville=<?php echo 'casablanca' ;?>'">Centre de Carrière Casablanca</button>
   <button class="button-17"  onclick="window.location.href='../../siteEmsi/index.php?Ville=<?php echo 'rabat' ;?>'">Centre de Carrière de Rabat</button>
   <button class="button-17"  onclick="window.location.href='../../siteEmsi/index.php?Ville=<?php echo 'marrakesh';?>'">Centre de carrière de Marrakesh</button>
    <button class="button-17"  onclick="window.location.href='../../siteEmsi/index.php?Ville=<?php echo 'tanger' ;?>'">Centre de carrière de Tanger</button>
        <button class="button-17" style="position:relative; margin-top:10%;" onclick="window.location.href='../../siteEmsi/User/User.php';"> Ajouter des comptes utilisateurs </button>
</section> 

</body>
</html>