<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../siteEmsi/CSS/acceuil.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
<title>Home - Career Center</title>
</head>

<body> 

    <section id="HeaderSec">
    <form method="Post" action="../../SiteEmsi/session.php">
 <button class="bn632-hover bn22" name="Deconexion" id="Deconexion">Deconexion</button>
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
    <?php if(isset($_GET["Ville"])){
      ?>
       <button class="button-17"  onclick="window.location.href='../../siteEmsi/Evenement/Evenement.php?Ville=<?php echo $_GET['Ville']; ?>';" > Ajouter événement </button>
        <button class="button-17" onclick="window.location.href='../../siteEmsi/acceuil/acceuil_evenement2.php?Ville=<?php echo $_GET['Ville'];?>';"> Présence </button>
      <?php
    }
    else {
      ?>
 <button class="button-17"  onclick="window.location.href='../../siteEmsi/Evenement/Evenement.php';" > Ajouter événement </button>
 <button class="button-17" onclick="window.location.href='../../siteEmsi/acceuil/acceuil_evenement2.php';"> Présence </button>
    <?php  } ?>
       
</section> 
  
</body>
</html>