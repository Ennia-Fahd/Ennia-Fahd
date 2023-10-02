<?php 
 require_once('../../SiteEmsi/Conexion.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../siteEmsi/CSS/acceuil.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
<title>Menu - Career Center</title>
</head>
<style>
    a {
  text-decoration: none;
  color: #000;
}
    </style>
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
    <?php   
    $event=$pdo->prepare("select  id_event,Nom from evenement  where type="."'"."Atelier CV & LM"."'");
    $event->execute([]);
    while ($event1 = $event->fetch()) {
    ?>
   <?php if(isset($_GET["Ville"])) { ?>
            <button class="button-17"  onclick="window.location.href='../../siteEmsi/Evenement/Atelier_CV_LM.php?id=<?=$event1['id_event'];?>&Ville=<?=$_GET['Ville'];?>'" > <?php echo $event1['Nom']; ?></button>      

      <?php  }
      else { ?>
                  <button class="button-17"  onclick="window.location.href='../../siteEmsi/Evenement/Atelier_CV_LM.php?id=<?=$event1['id_event'];?>'" > <?php echo $event1['Nom']; ?></button>      
<?php
      }
    } ?>

    </section> 

</body>
</html>