
<?php 
 require_once('../../SiteEmsi/Conexion.php');
  require '../../SiteEmsi/phpoffice/vendor/autoload.php';

   use PhpOffice\PhpSpreadsheet\Spreadsheet;
  use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
  
  ?>
<html>
<head>
    
<link rel="stylesheet" href="../../siteEmsi/CSS/decorer.css">
<link rel="stylesheet" href="../../siteEmsi/CSS/heder.css">
<link rel="stylesheet" href="../../siteEmsi/CSS/acceuil.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<title>Atelier Entretien - Career Center</title>
<style>
  
    @media (min-width: 767px) {
    body{
       
        overflow-y : auto;
        background: rgb(187,191,197);
        background: linear-gradient(180deg, rgba(187,191,197,0.6702031154258579) 55%, rgba(255,255,255,0.014740930551908282) 100%);
    }

        .button {
        text-align: center;
        text-transform: uppercase;
        cursor: pointer;
        font-size: 10px;
        text-align: center;
        justify-content:center;
        letter-spacing: 4px;
        position: relative;
        background-color: #189F5C;
        border: none;
        color: #fff;
        width: 150px;
        margin: 10px;
        padding: 10px 30px;
        text-align: center;
        transition-duration: 0.4s;
        overflow: hidden;
        box-shadow: 0 2px 4px #193047;
        border-radius: 4px;
        }

        .button:hover {
           /* background: #58ce91*/
        background: #d3d3d1;
        box-shadow: 0px 1px 2px 1px black;
        color: #000;
        }
        .button:focus { 
            outline:0;
            box-shadow: 2px 2px 2px 2px #008000;
        }.buttonss {
        text-align: center;
        text-transform: uppercase;
        cursor: pointer;
        font-size: 10px;
        text-align: center;
        justify-content:center;
        letter-spacing: 4px;
        position: relative;
        background-color: #189F5C;
        border: none;
        color: #fff;
        width: 150px;
        margin: 10px;
        padding: 10px 30px;
        text-align: center;
        transition-duration: 0.4s;
        overflow: hidden;
        box-shadow: 0 2px 4px #193047;
        border-radius: 4px;
        }

        .buttonss:hover {
           /* background: #58ce91*/
        background: #d3d3d1;
        box-shadow: 0px 1px 2px 1px black;
        color: #000;
        }.buttonDel {
        text-align: center;
        text-transform: uppercase;
        cursor: pointer;
        font-size: 10px;
        text-align: center;
        justify-content:center;
        letter-spacing: 4px;
        position: relative;
        background-color: #189F5C;
        border: none;
        color: #fff;
        width: 200px;
        margin: 10px;
        padding: 10px 30px;
        text-align: center;
        transition-duration: 0.4s;
        overflow: hidden;
        box-shadow: 0 2px 4px #193047;
        border-radius: 4px;
        }

        .buttonDel:hover {
           /* background: #58ce91*/
        background: #d3d3d1;
        box-shadow: 0px 1px 2px 1px black;
        color: #000;
        }
        .buttonDel:focus { 
            outline:0;
            box-shadow: 2px 2px 2px 2px #008000;
        }.buttonss {
        text-align: center;
        text-transform: uppercase;
        cursor: pointer;
        font-size: 10px;
        text-align: center;
        justify-content:center;
        letter-spacing: 4px;
        position: relative;
        background-color: #189F5C;
        border: none;
        color: #fff;
        width: 150px;
        margin: 10px;
        padding: 10px 30px;
        text-align: center;
        transition-duration: 0.4s;
        overflow: hidden;
        box-shadow: 0 2px 4px #193047;
        border-radius: 4px;
        }

        .buttonss:hover {
           /* background: #58ce91*/
        background: #d3d3d1;
        box-shadow: 0px 1px 2px 1px black;
        color: #000;
        }
        .buttonss:focus { 
            outline:0;
            box-shadow: 2px 2px 2px 2px #008000;
        }

        /* Table Styles */

        .table-wrapper{
          
            box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
           top: 0px;
        }

        .fl-table {
            
            margin-top: 4%;
            border-radius: 5px;
            font-size: 12px;
            font-weight: normal;
            border: none;
            border-collapse: collapse;
            width: 100%;
            max-width: 100%;
            white-space: nowrap;
            background-color: white;
           
        }
      

        .fl-table td, .fl-table th {
            text-align: center;
            padding: 8px;
        }
       table tr:hover{
             background-color: #afd1bf;
           
             cursor: pointer;
        }

        .fl-table td {
            border-right: 1px solid #f8f8f8;
            font-size: 12px;
        }

        .fl-table thead th {
            color: #ffffff;
          
        }


        .fl-table thead .line:nth-child(odd) {
            color: #ffffff;
            background: #008000;
        }

       
        
        .buttons{
            padding-top: 3%;
            display: flex;
            flex-wrap: wrap;
            position: relative;
            top: 10%;
            margin-left: 17%;
        }

        .suppr_modif{
       
       margin-left:44%;
       margin-top:-0.5%;
       margin-bottom:0%;
       justify-content: center;
       height:20px

   }




        /*form*/
    .container3 {

      border-radius: 20px;
      margin: auto;
      width: 90%;
      position: relative;
      top: 10%;
      
      
    }
    .container3 form {
        color: #fff;
    }
    #survey-form {
      
      margin: 0 auto;
      width: 80%;
    

    }


    button:hover {
      background-color: #6B8E20;
    }

      
      h1 {
        font-size: 2em;
      }

          label{
          
            display: inline-block;
            width: 300px;
            text-align: right;
          }
        
          
      .input-field {
        width: 30%;
      margin-left: 50px;
      }

      .btn {
        width: 100%;
        margin: auto;
      }

    .input-field {
      
      display: inline-block;
      
      padding: 5px;
      margin: 18px 0 0 10px;
      border: 1px solid #698F20;
      /* border-radius: 4px; */
      font-family: inherit;
      font-size: 15px;
      font-weight: bold;
    }

    ::-webkit-input-placeholder {
      font-style: italic;
      font-weight: 300;
    }

    input {
      margin: 7px;
    }


    .dropdown {

      width: 30%;
      padding: 5px;
    margin-top: 20px;
      border: 1px solid #698F20;
      border-radius: 3px;
      font-family: inherit;
      font-size: 15px;
    position: relative;
    margin-left: 50px;
    }
    .btn {
      position:relative;
    width: 10%;
    left:40%;
    }

            /*barre de recherche */

    .container2{
        position:relative;
        top: 15%;
      width: 50%;
      margin: 0 auto;
      text-align: center;

    }


    /* navigation */

#PathToFile{
   
   left: 3%;
   position:relative;
   top: 10%;

  
}#PathToFile  a{
  
 
   display: inline;
margin: auto; 
   justify-content :center;
   text-decoration : none;
   color: black;
}
#PathToFile  a:hover{
    color: #008000;
   opacity: 0.5;
}
#PathToFile  img{
   margin: 5px;
   position:relative;
   top:1%;

}

#PathToFile p {
   display: inline;
margin: auto; 
   justify-content :center;
   text-decoration : none;
   color: black;
   font-weight: bold;

}

    /* ===== 2. standard seachbox ==== */

    .search-txt-input{
      padding: 12px 20px;
      font-size: 14px;
      border:1px solid #c8c8c8;
      border-right:0px;
      border-top-left-radius: 4px 4px;
      border-bottom-left-radius: 4px 4px;
      width: 200px;
    }
    .search-button {
      padding: 11px 20px;
      font-size: 16px;
      outline: none;
      text-align: center;
      text-decoration: none;
      color: #ffffff;
      border: solid 1px #c8c8c8;
      border-right: 0px;
      background: #189F5C;
      border-top-right-radius: 4px 4px;
      border-bottom-right-radius: 4px 4px;
      position: relative;
      left: -30px;
    
    }
    .search-button:hover {
      text-decoration: none;
      background: #58ce91;
    }

    /* Fixes submit button height problem in Firefox */
    .search-button::-moz-focus-inner {
      border: 0;
    }

    /* === 3. standard animated seachbox === */

    #animated-2 .search-txt-input{
      width: 300px;
      -webkit-transition: width 0.5s ease-out;
      transition: width 0.5s ea6se-out;
    }

    #animated-2 input[type=text]:focus {
        width: 600px;
    }

    

  }
        



  /* Mobile   */

  @media (max-width: 767px) {
      
  }


</style>
<?php
  $idEntretien = $_GET['id'];
?>
</head>

    <body >

    <nav id="navBar">
    <li>
    <?php
      if(isset($_GET['Ville'])){?>
    <ul><a href="../../SiteEmsi/index.php?Ville=<?php echo $_GET['Ville']; ;?>"><img src="../../siteEmsi/Image/career.jpg" alt=""></a></ul>
  <?php
  }
    else {?>
      <ul><a href="../../SiteEmsi/index.php"><img src="../../siteEmsi/Image/career.jpg" alt=""></a></ul>
<?php
   }?>    </li>
</nav>
   

<form method="Post" action="../../SiteEmsi/session.php">
 <button class="bn632-hover bn22" name="Deconexion" id="Deconexion" >Deconnexion</button>
</form>

<div  id="PathToFile" style="display:inline-flex;position: relative; top: 14%;">
       <?php if(isset($_GET["Ville"])){ ?>
        
        <a href="../../SiteEmsi/admin.php">Admin</a><img  src="../Image/icons8-more-than-24.png" alt="">
        <a href="../../SiteEmsi/index.php?Ville=<?php echo $_GET["Ville"];?>">Accueil Centre Carrière de <?php echo ucfirst($_GET["Ville"]); ?></a> 
        <img  src="../Image/icons8-more-than-24.png" alt=""><a href="../../SiteEmsi/Acceuil/acceuil_evenement1.php?Ville=<?php echo $_GET["Ville"];?>">Menu des Evenements</a>
        <img  src="../Image/icons8-more-than-24.png" alt=""><a href="../../SiteEmsi/Acceuil/acceuil_evenement2.php?Ville=<?php echo $_GET["Ville"];?>">Présence</a>
        <img  src="../Image/icons8-more-than-24.png" alt=""><a href="../../SiteEmsi/Acceuil/acceuil_evenement3.php?Ville=<?php echo $_GET["Ville"];?>">Ateliers</a>
        <img  src="../Image/icons8-more-than-24.png" alt=""><a href="../../SiteEmsi/Evenement/MenuSessions.php?Ville=<?php echo $_GET["Ville"];?>">Menu des Entretiens</a>

        
       <?php
       }
       else {
        ?>
<a href="../../SiteEmsi/index.php">Accueil</a> 
<img  src="../Image/icons8-more-than-24.png" alt=""><a href="../../SiteEmsi/Acceuil/acceuil_evenement1.php">Menu des Evenements</a>
        <img  src="../Image/icons8-more-than-24.png" alt=""><a href="../../SiteEmsi/Acceuil/acceuil_evenement2.php">Présence</a>
        <img  src="../Image/icons8-more-than-24.png" alt=""><a href="../../SiteEmsi/Acceuil/acceuil_evenement3.php">Ateliers</a>
        <img  src="../Image/icons8-more-than-24.png" alt=""><a href="../../SiteEmsi/Evenement/MenuSessions.php">Menu des Entretiens</a>

    <?php
       }
       ?>
    
    <?php $id=$pdo->prepare("select Nom from evenement where ID_event=?");
$id->execute([$idEntretien]);
$id2=$id->fetch();
$id2=$id2["Nom"];

?>
        <img src="../Image/icons8-more-than-24.png" alt=""><p style="color: black; text-decoration: none; cursor:default;" ><?php echo $id2;?></p>
    </div>


<?php
if(isset($_GET["chercher_Sem"])){
?>
<form id="animated-2" method="GET" action="atelier_entretien.php">

<div class="container2" style="position :relative; z-index:999; top: 130px; left: 23%;">
<?php if(isset($_GET["Ville"])) { ?><input type="hidden" name="Ville" value="<?php echo $_GET["Ville"]; ?>"> <?php } ?>
    <input type="hidden" name="id" value="<?php echo  $idEntretien;  ?>">
    <input type="text" class="search-txt-input" placeholder="Entrez le nom et prénom..."  value="<?php echo $_GET["NomPrenom"]; ?>" name="NomPrenom" maxlength="100">
    <input type="submit" name="chercher_Sem" value="chercher" class="search-button">
</div>

    </form>
<?php
  
}
else {
  ?>

<form id="animated-2" method="GET" action="atelier_entretien.php">

<div class="container2" style="position :relative; z-index:999; top: 130px; left: 23%;">
<?php if(isset($_GET["Ville"])) { ?><input type="hidden" name="Ville" value="<?php echo $_GET["Ville"]; ?>"> <?php } ?>
    <input type="hidden" name="id" value="<?php echo $idEntretien; ?>">
    <input type="text" class="search-txt-input" placeholder="Entrez le nom et prénom..." name="NomPrenom" maxlength="100">
    <input type="submit" name="chercher_Sem" value="chercher" class="search-button">
</div>

</form>

<?php
}

if(isset($_POST['Ajouter'])){?>
<div class="container3" style="background:transparent;">
    <form id="survey-form" action="atelier_entretien.php?id=<?=$idEntretien?>" method="Post">
      <label for="dropdown">Nom et Prénom :</label>
          <?php $certifetd=$pdo->prepare("select * from Etudiant");
          $certifetd->execute([]);?>
          <select class="dropdown"  id="s2" onchange="SelectRedirect2()" name="NomPrenom" required>
            <option disabled value selected>Selectionnez un étudiant</option>
          <?php while($certifetd1=$certifetd->fetch()){ ?>
            <option value="<?php echo $certifetd1['id_etd']; ?> "><?php echo $certifetd1['Nom_Prenom']; ?> </option>
            <?php } ?>
            <option>Autre</option>
          </select>
          <br>

          <label for="dropdown">Séminaire :</label>
          <?php $sem=$pdo->prepare("select * from evenement where Type='Atelier Entretien' and id_event=$idEntretien");
          $sem->execute([]);?>
          <select class="dropdown"  id="s1" onchange="SelectRedirect()" name="SR" required>
            <option disabled value >Selectionnez un séminaire</option>
          <?php while($sem1=$sem->fetch()){ ?>
            <option  selected value="<?php echo $sem1['ID_event']; ?> "><?php echo $sem1['Nom']; ?> </option>
            <?php } ?>
            <option>Autre</option>
          </select>
          <br>

        <label for="dropdown"> Présence :</label>
    <select class="dropdown" name="Presence" required>
    <option value=" " > Pas encore</option>
    <option value="P">Présent</option>
    <option value="A">Absent</option>
</select>           <br> 


<div class="btn">
<input type="submit"  class="buttonDel" name="btnEnvoyerAjouterSR" value="Ajouter Étudiant" >
</div>

</form>
</div>
<?php } ?>
<?php if(isset($_POST['btnEnvoyerAjouterSR'])){
   $verif=$pdo->prepare("select * from entretien");
   $verif->execute();
   
   $exist=false; 
  while($test=$verif->fetch()){
      if($test["Id_etd"]==$_POST["NomPrenom"] and $test["Id_event"]==$_POST["SR"]){
          $exist=true;
          break;
      }
   }
   if($exist){
      echo ' Cet etudiant a déjà assisté à cet entretien !';
   }
   else {
 
     $entr=$pdo->prepare("insert into entretien(Id_etd,Id_event,Presence) values(?,?,?)");
     $entr->execute([$_POST["NomPrenom"], $idEntretien,$_POST['Presence']]);
   }
}

 



if(isset($_POST['modifier_entretien'])){?>
  <div class="container3" style="background:transparent;">
      <form id="survey-form" action="atelier_entretien.php?id=<?=$idEntretien?>" method="Post">
        <label for="dropdown">Nom et Prénom :</label>
            <?php $certifetd=$pdo->prepare("select * from Etudiant");
            $certifetd->execute([]);?>
            <select class="dropdown" id="s2" onchange="SelectRedirect2()" name="NomPrenom" required>
              <option disabled value >Selectionnez un étudiant</option>
            <?php 
               $ids_sem=implode(" ",$_POST["row-check"]);
             $nbr1=explode("-",$ids_sem);
             $event=$nbr1[0];
             $etd=$nbr1[1];
            while($certifetd1=$certifetd->fetch()){  
              if($certifetd1['id_etd']== $etd){
                ?>
                <option selected value="<?php echo $certifetd1['id_etd']; ?> "><?php echo $certifetd1['Nom_Prenom']; ?> </option>
  <?php
              }
              else {
              
              ?>
              
              <option value="<?php echo $certifetd1['id_etd']; ?> "><?php echo $certifetd1['Nom_Prenom']; ?> </option>
              <?php  }
            } ?>
              <option>Autre</option>
            </select>
            <br>
  
          <label for="dropdown"> Présence :</label>
      <select class="dropdown" name="Presence" required>
        <?php $req=$pdo->prepare("select * from entretien where Id_etd=?");
        $req->execute([$etd]);
        $data=$req->fetch();
  
       if($data["Presence"]==" "){
        
        ?>
         <option value=" " selected> Pas encore</option>
         <?php
       }
       else { ?>
        <option value=" " selected> Pas encore</option>
        <?php
     
       }
       if($data["Presence"]=="P"){
        ?>
      <option value="P" selected >Présent</option>
      <?php  }
      else {  ?>
  <option value="P">Présent</option>
  <?php
      }
      if($data["Presence"]=="A"){ ?>
      <option value="A" selected>Absent</option>
      <?php }
      else { ?>
        <option value="A">Absent</option>
        <?php
      }
      ?>
  </select>           
  <input type="hidden" name="id" value="<?php echo $etd; ?>">
  <br> 
  
  
  <div class="btn">
  <input type="submit"  class="buttonDel" name="btnEnvoyerModifierEntretien" value="Modifier Entretien" >
  </div>
  
  </form>
  </div>
  <?php }?>
  
  <?php
  if(isset($_POST["btnEnvoyerModifierEntretien"])){ 
    $verif=$pdo->prepare("select * from entretien");
    $verif->execute();
    
    $exist=false; 
   while($test=$verif->fetch()){
       if($test["Id_etd"]==$_POST["NomPrenom"] and $test["Id_event"]==$_POST["SR"]){
           $exist=true;
           break;
       }
    }
    if($exist){
       echo ' Cet etudiant a déjà assisté à cet entretien !';
    }
    else {
    $req=$pdo->prepare("update entretien set Id_etd=?,Presence=? where Id_etd=?");
    $req->execute([$_POST["NomPrenom"],$_POST["Presence"],$_POST["id"]]);
    }
  }
  






    
    if (isset($_POST["supprimer_entretien"])){

      $ids_sem=$_POST["row-check"];
    foreach($ids_sem as $nbr){
  $nbr1=explode("-",$nbr);
  $event=$nbr1[0];
  $etd=$nbr1[1];
  $suppression_entretien=$pdo->prepare("Delete from  entretien where Id_event=? and Id_etd=?");
  $suppression_entretien->execute([$event,$etd]);
    }
  }


if(isset($_POST["Importer"]) or isset($_POST['save_excel_data']))
{
   ?>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
       <div class="container" style="position:relative; top: 18%;">
        <div class="row">
            <div class="col-md-12 mt-4">

           

                <div class="card" style="position:relative; bottom:30px;">
                    <div class="card-header">
                        <h4>Importer un fichier Excel de Seminaire</h4>
                    </div>
                    <div class="card-body">

                        <form action="SessionRecrutement.php?id=<?=$idSession?>"  method="POST" enctype="multipart/form-data">
                        <input type="file" name="import_file" class="form-control" />
                        <button type="submit" name="save_excel_data" class="btn btn-primary mt-3" style="background-color:#189F5C; border-color: grey;">Import</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <?php 
}

/*importer file excel */

if(isset($_POST['save_excel_data']))
    {
        $fileNom = $_FILES['import_file']['name'];
        $file_ext = pathinfo($fileNom, PATHINFO_EXTENSION);
    
        $dispo_ext = ['xls','csv','xlsx'];
    
        if(in_array($file_ext, $dispo_ext))
        {  
            $inputFileNomPath = $_FILES['import_file']['tmp_name'];
            libxml_use_internal_errors(true);
            $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNomPath);
            $data = $spreadsheet->getActiveSheet()->toArray();
    
            $count = "0";
            foreach($data as $row)
            {
                if($count > 0)
                {  $event= $row['0'];
                  $etudiant= $row['1'];
                    $AnneeSem = $row['2'];
                    $Presence = $row['3'];
                    $id_etd=$pdo->prepare("select id_etd from etudiant where Nom_Prenom=?");
                    $id_etd->execute([$etudiant]);
                   
                    $id_ev=$pdo->prepare("select ID_event from evenement where Type='Session de recrutement' and  Nom=?");
                    $id_ev->execute([$event]);
                    if($id_ev->rowCount() > 0 and  $id_etd->rowCount() > 0){
                      $ID=$id_etd->fetch();
                      $ID= $ID['id_etd'];
                      $ID2= $id_ev->fetch();
                    $ID2= $ID2['ID_event'];
                    
                      
                    $SemQuery = "insert into sessionrecrutement(Id_etd,Id_event,AnneeSession,Presence) VALUES (?,?,?,?)";
                    $result =  $pdo->prepare($SemQuery);
                    $result->execute([$ID,$ID2,$AnneeSem,$Presence]);
                    $msg = true;
                    }
                    else {
                      echo "<p>  $event ou $etudiant inexistant.</p>"; 
                      break;
                    } 
                    
                }
              
                else
                {
                    $count = "1";
                }
            }
    
            if(isset($msg))
            {
                echo "<h4 style='margin-left: 12%;  position:relative; top : 9%;'>Importation avec succée</h4></center>";
               
               
               
            }
            else
            {
                echo "<h4 style='margin-left: 12%;  position:relative; top : 9%;'>Fichier inexistant</h4>";
              
             
               
            }
        }
        else
        {
            echo "<h4 style='margin-left: 12%;  position:relative; top : 9%;'>Fichier invalide</h4>";
           
        
          
        }   
    }
    ?>

    <div class="buttons" >
    <form  method="Post">
    <?php
    if(isset($_GET["Ville"])){
  ?>
 
 <button class="button" formaction="atelier_entretien.php?id=<?=$idEntretien?>&Ville=<?=$_GET['Ville'];?>" name="Ajouter">Ajouter</button>
<?php } 
else {
  ?>
 <button class="button" formaction="atelier_entretien.php?id=<?=$idEntretien?>" name="Ajouter">Ajouter</button>

  <?php
}?>
</form>

<form action="atelier_entretien.php?id=<?=$idEntretien?>"  method="Post">
<button class="button" type="submit"  name="Importer">Importer</button>

</form> 

<button class="button" type="submit" id="exp" name="Exporter">Exporter</button>
   
</div>
<br><br>



<?php

if(isset($_GET['chercher_Sem'])){
    $sql = "select * from entretien sem,etudiant etd,evenement event  where event.ID_event=sem.Id_event and event.id_event= $idEntretien and sem.Id_etd=etd.id_etd and etd.Nom_Prenom  LIKE '%".$_GET['NomPrenom']."%'  ";
    $etd_sem=$pdo->prepare($sql);
}
else {$etd_sem=$pdo->prepare("select * from entretien sem,etudiant etd,evenement event where event.ID_event=sem.Id_event and sem.Id_etd=etd.id_etd and event.id_event= $idEntretien");
}
$etd_sem->execute([]);
?>

        <form method="POST" >
        <div class="suppr_modif">
        <?php if(isset($_GET["Ville"])){
          ?>
 <button class="buttonss" id="btnsupprimersem" name="supprimer_entretien" value="supprimer" formaction="atelier_entretien.php?id=<?=$idEntretien?>&Ville=<?=$_GET['Ville'];?>"  value="supprimer">Supprimer</button>
 <button class="buttonss" id="btnmodifiersem" name="modifier_entretien" formaction="atelier_entretien.php?id=<?=$idEntretien?>&Ville=<?=$_GET['Ville'];?>" value="Modifier" >Modifier</button>
      <?php  }
        else { ?>
<button class="buttonss" id="btnsupprimersem" name="supprimer_entretien" value="supprimer" formaction="atelier_entretien.php?id=<?=$idEntretien?>"  value="supprimer">Supprimer</button>
 <button class="buttonss" id="btnmodifiersem" name="modifier_entretien" formaction="atelier_entretien.php?id=<?=$idEntretien?>" value="Modifier" >Modifier</button>
        <?php
        }
        ?>          

                    
        </div>  


        <div class="table-wrapper">
        <table class="fl-table">
        <thead>   
        <tr>
            <th ><input type="checkbox" class="checkall"></th>
            <th>Nom et Prénom</th>
            <th>Email</th>
            <th>Filiere</th>
            <th>Ville</th>
            <th>Site</th>
            <th>Groupe</th>
            <th>Nom de l'entretien</th>
            
            <th>Présence</th>
        </tr>
        </thead>
                
                <tbody>
                    <?php 
                    
                    while ($etd_sem1= $etd_sem->fetch()) { ?>
              
              <tr class="line">
<td><input class="po_status" type="checkbox"  name="row-check[]" value="<?php echo $etd_sem1["Id_event"].'-'.$etd_sem1["Id_etd"]; ?>"></td>
<td><?php echo $etd_sem1["Nom_Prenom"]; ?></td>
<td><?php echo $etd_sem1["Email"]; ?></td>
<td><?php echo $etd_sem1["Ville"]; ?></td>
<td><?php echo $etd_sem1["Filiere"]; ?></td>
<td><?php echo $etd_sem1["Site"];?></td>
<td ><?php echo $etd_sem1["Groupe"]; ?></td>
<td ><?php echo $etd_sem1["Nom"]; ?></td>
<td ><?php echo $etd_sem1["Presence"]; ?></td>
                </tr>
                <?php 
                     }
             ?>
                <tbody>
            </table>
             </div>
             
    </form>
    <div class="invisible">
<?php 
//exporter
if(isset($_GET['chercher_Sem'])){
  $sql = "select * from entretien sem,etudiant etd,evenement event  where event.ID_event=sem.Id_event and event.id_event= $idEntretien  and sem.Id_etd=etd.id_etd and etd.Nom_Prenom  LIKE '%".$_GET['NomPrenom']."%'  ";
  $etd_sem=$pdo->prepare($sql);
}
else {$etd_sem=$pdo->prepare("select * from entretien sem,etudiant etd,evenement event where event.ID_event=sem.Id_event and sem.Id_etd=etd.id_etd and event.id_event=$idEntretien");
}
$etd_sem->execute([]);
?>
      <table id="entretien">
      <thead>   
      <tr >
          <th>Nom et Prénom</th>
          <th>Email</th>
          <th>Filiere</th>
          <th>Ville</th>
          <th>Site</th>
          <th>Groupe</th>
          <th>Nom de l'entretien</th>
          <th>Présence</th>
      </tr>
      </thead>
              
              <tbody>
                  <?php 
                  
                  while ($etd_sem1= $etd_sem->fetch()) { ?>
            
            <tr >
<td><?php echo $etd_sem1["Nom_Prenom"]; ?></td>
<td><?php echo $etd_sem1["Email"]; ?></td>
<td><?php echo $etd_sem1["Ville"]; ?></td>
<td><?php echo $etd_sem1["Filiere"]; ?></td>
<td><?php echo $etd_sem1["Site"];?></td>
<td ><?php echo $etd_sem1["Groupe"]; ?></td>
<td ><?php echo $etd_sem1["Nom"]; ?></td>
<td ><?php echo $etd_sem1["Presence"]; ?></td>
              </tr>
              <?php 
                   }
           ?>
              <tbody>
          </table>

             
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>

function SelectRedirect(){
switch(document.getElementById('s1').value)
{
case "Autre":
window.location="../../SiteEmsi/Evenement/ajouter_evenement.php";
break;
}
}

function SelectRedirect2(){
switch(document.getElementById('s2').value)
{
case "Autre":
window.location="../../SiteEmsi/Etudiant/ajouter_etudiant.php";
break;
}
}

 $(function(){
    $('#btnsupprimersem').hide();
    $('#btnmodifiersem').hide(); 

    $('.po_status').click(function () {
      if( $(".po_status").is(":checked")){
        $('#btnsupprimersem').hide(); 
          $('#btnmodifiersem').hide();
      } else {
          $('#btnsupprimersem').show();
          $('#btnmodifiersem').show(); 
                   
      }
    });

  $('tr').click(function () {
      
          $('.buttonss').toggle();
     
    
    });




});
//checkall
$(document).on('click', '.checkall', function(){
        if (this.checked) {
            $(".po_status").prop("checked", false);
        } else {
            $(".po_status").prop("checked", true);
        } 
        $(".po_status").click();  
    });



//checkcolomne
$(function(){
	$("th").css("background-color","#008000");
});

        $(function(){
           
            $(document).on("click",'.checkall', function () {
            
		if ($("input:checkbox").prop("checked")) {
			$("input:checkbox[name='row-check']").prop("checked", true);
		} else {
			$("input:checkbox[name='row-check']").prop("checked", false);
		}
	});
        $('tr').click(function(e)
        {
// Ligne Colorée
            // Get input
            var input = $(this).find('input:checkbox');
            
            // Get Values of checked checkboxes
            var checkedvalue=$('input[type=checkbox]:checked').map(function(_, el) {
                return $(el).val();
            }).get();
            
            // Display Value
            
           $('#selectedValue').html(checkedvalue);

            // Toggle checkbox status
            if(!$(e.target).is('input')) input.prop('checked', !input.is(':checked'));

            // Toggle background-color
            $(this).css('background-color', input.is(':checked') ? '#1b9e5c' : 'transparent');
            
                
        });
    });
    

</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script> 
$(document).ready(function(){
    $("#HideSection").click(function(){
       $(".container3").hide("slow");
    });
});
</script>  

<script src="//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>
<script >
  $("#exp").click(function(){
        $("#entretien").table2excel({
    name: "Entretiens",
    filename: "Entretiens.xls", // do include extension
    preserveColors: false // set to true if you want background colors and font colors preserved
});
});
    </script>
    </script>

    </body>
</head>
</html>





