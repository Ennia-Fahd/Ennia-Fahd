<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../siteEmsi/CSS/acceuil.css">
    
<title>Home - Career Center</title>
</head>

<body> 

    <section id="HeaderSec">
    <form method="Post" action="../../SiteEmsi/session.php">
 <button class="bn632-hover bn22"  name="Deconexion" id="Deconexion">Deconexion</button>
</form>
<div class="img_btn">
        <?php
    if(isset($_GET['Ville'])){?>
    <div class="Image_career"><a href="../../SiteEmsi/index.php?Ville=<?php echo $_GET['Ville']; ;?>"><img src="../../siteEmsi/Image/career.jpg" alt=""></a></div>
  <?php
  }
    else {?>
      <div class="Image_career"><a href="../../SiteEmsi/index.php"><img src="../../siteEmsi/Image/career.jpg" alt=""></a></div>
<?php
   }?> 
    </div>
    </section>

   <section id="HomeSec" >
    <?php if(isset($_GET["Ville"])){?>
      <button class="button-17"  onclick="window.location.href='../../siteEmsi/acceuil/acceuil_evenement3.php?Ville=<?php echo $_GET['Ville']; ;?>';" > Atelier </button>
        <button class="button-17" onclick="window.location.href='../../siteEmsi/Evenement/MenuSeminaire.php?Ville=<?php echo $_GET['Ville']; ;?>';"> Séminaire </button>
        <button class="button-17" onclick="window.location.href='../../siteEmsi/Evenement/MenuSessions.php?Ville=<?php echo $_GET['Ville']; ;?>';"> Session de recrutement </button>
    <?php }
    else {
      ?>
       <button class="button-17"  onclick="window.location.href='../../siteEmsi/acceuil/acceuil_evenement3.php';" > Atelier </button>
        <button class="button-17" onclick="window.location.href='../../siteEmsi/Evenement/MenuSeminaire.php';"> Séminaire </button>
        <button class="button-17" onclick="window.location.href='../../siteEmsi/Evenement/MenuSessions.php';"> Session de recrutement </button>
   <?php  } ?>
  
</section> 

</body>
</html>