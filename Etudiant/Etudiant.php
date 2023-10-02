<?php 
require_once('../../SiteEmsi/Conexion.php');
  require '../../SiteEmsi/phpoffice/vendor/autoload.php';

  use PhpOffice\PhpSpreadsheet\Spreadsheet;
  use PhpOffice\PhpSpreadsheet\Writer\Xlsx;?>
<html>
<head>
    
<link rel="stylesheet" href="../../siteEmsi/CSS/decorer.css">
<link rel="stylesheet" href="../../siteEmsi/CSS/heder.css">
<link rel="stylesheet" href="../../siteEmsi/CSS/acceuil.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>

  
    @media (min-width: 767px) {
    body{
        overflow: auto;
  
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
        }
    .buttonss {
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
       
            margin-left:51%;
            margin-top:-3.3%;
            justify-content: center;


        }


        /*barre de recherche */

.container {
    position:relative;
    top: 15%;
  width: 50%;
  margin: 0 auto;
  text-align: center;
  padding-top: 30px;
  padding-bottom: 30px;
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
  left: -6px;
 
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
 <button class="bn632-hover bn22" name="Deconexion" id="Deconexion" >Deconexion</button>
</form>
<div  id="PathToFile" style="display:inline-flex;position: relative; top: 14%">
       <?php if(isset($_GET["Ville"])){ ?>
        
        <a href="../../SiteEmsi/admin.php">Admin</a><img  src="../Image/icons8-more-than-24.png" alt="">
        <a href="../../SiteEmsi/index.php?Ville=<?php echo $_GET["Ville"];?>">Accueil Centre Carrière de <?php echo ucfirst($_GET["Ville"]); ?></a> 
        <?php
       }
       else {
        ?>
<a href="../../SiteEmsi/index.php">Accueil</a> 
    <?php
       }
       ?>
        <img src="../Image/icons8-more-than-24.png" alt=""><p style="color: black; text-decoration: none; cursor:default;" >Etudiant</p>
    </div>
<?php
if(!empty($_GET["recherche_nomprenom"])){
    ?>
    <div class="container" >
<form id="animated-2" method="get" action="etudiant.php">
<?php if(isset($_GET["Ville"])) { ?><input type="hidden" name="Ville" value="<?php echo $_GET["Ville"]; ?>"> <?php } ?>
    <input type="text" class="search-txt-input" placeholder="Entrez le nom et prénom..." value="<?php echo $_GET["recherche_nomprenom"];?>" name="recherche_nomprenom" maxlength="100">
    <input type="submit" value="Chercher" class="search-button">
  </form>
</div>
    <?php
}
else {
?>
<div class="container" >
<form id="animated-2" method="get" action="etudiant.php">
<?php if(isset($_GET["Ville"])) { ?><input type="hidden" name="Ville" value="<?php echo $_GET["Ville"]; ?>"> <?php } ?>
    <input type="text" class="search-txt-input" placeholder="Entrez le nom et prénom..." name="recherche_nomprenom" maxlength="100">
    <input type="submit" value="Chercher" class="search-button">
  </form>
  <?php }?>
</div>



    <?php 
    
    if(isset($_POST["supprimer_etudiant"])){
        $ids_etd=$_POST["ids_etd"];
        
        
        $all = implode(",", $ids_etd);
  
        
      $suppression_etd=$pdo->prepare('delete from  etd_entreprise where Id_etd IN (?)');
      $suppression_etd->execute([$all]);
      $suppression_etd=$pdo->prepare('delete from  etd_certif where Id_etd IN (?)');
      $suppression_etd->execute([$all]);

      $suppression_etd=$pdo->prepare("Delete from seminaire where Id_etd IN ($all)");
      $suppression_etd->execute([]);
      $suppression_etd=$pdo->prepare("Delete from sessionrecrutement where Id_etd IN ($all)");
  $suppression_etd->execute([]);
  $suppression_etd=$pdo->prepare("Delete from session_individuel where Id_etd IN ($all)");
  $suppression_etd->execute([]);
  $suppression_etd=$pdo->prepare("Delete from cv_lm where Id_etd IN ($all)");
  $suppression_etd->execute([]);
  $suppression_etd=$pdo->prepare("Delete from entretien where Id_etd IN ($all)");
  $suppression_etd->execute([]);

       $suppression_etd=$pdo->prepare("Delete from etudiant where id_etd IN ($all)");
       $suppression_etd->execute([]);

    }


if(isset($_POST["Importer"]) or isset($_POST['save_excel_data']))
{
   ?>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
       <div class="container" style="position:relative; top: 13%;">
        <div class="row">
            <div class="col-md-12 mt-4">

           

                <div class="card">
                    <div class="card-header">
                        <h4>Importer un fichier Excel d'etudiant</h4>
                    </div>
                    <div class="card-body">
                    <?php
if(isset($_GET["Ville"])){
?>
      <form action="etudiant.php?Ville=<?php echo $_GET['Ville']; ?>" method="POST" enctype="multipart/form-data">


<?php
}
else {
    ?>
                        <form action="etudiant.php" method="POST" enctype="multipart/form-data">

<?php
}
?>   

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
                {
                    $NomPrenom = $row['0'];
                    $Email = $row['1'];
                    $Ville = $row['2'];
                    $Site = $row['3'];
                    $Filiere = $row['4'];
                    $Groupe = $row['4'];
                    $EtudiantQuery = "INSERT INTO etudiant (Nom_Prenom,Email,Ville,Site,Filiere,Groupe) VALUES ('$NomPrenom','$Email','$Ville','$Site','$Filiere','$Groupe')";
                    $result =  $pdo->prepare($EtudiantQuery);
                    $result->execute([]);
                    $msg = true;
                }
                else
                {
                    $count = "1";
                }
            }
    
            if(isset($msg))
            {
                echo "<h4 style='margin-left: 12%;  position:relative; top : 5%;'>Importation avec succée</h4></center>";
               
               
               
            }
            else
            {
                echo "<h4 style='margin-left: 12%;  position:relative; top : 5%;'>Fichier inexistant</h4>";
              
             
               
            }
        }
        else
        {
            echo "<h4 style='margin-left: 12%;  position:relative; top : 5%;'>Fichier invalide</h4>";
           
        
          
        }   
    }
    ?>
    <div class="buttons" >
    <?php
if(isset($_GET["Ville"])){
?>
      <form action="ajouter_etudiant.php?Ville=<?php echo $_GET['Ville']; ?>" method="POST" >


<?php
}
else {
    ?>
                        <form action="ajouter_etudiant.php" method="POST" >


<?php
}
?>   
    <button class="button" name="Ajouter">Ajouter</button>
</form>
<?php
if(isset($_GET["Ville"])){
?>
      <form action="etudiant.php?Ville=<?php echo $_GET['Ville']; ?>" method="POST" >


<?php
}
else {
    ?>
                        <form action="etudiant.php" method="POST" >


<?php
}
?>   
<button class="button" type="submit"  name="Importer">Importer</button>

</form> 

<button class="button" type="submit" id="exp" name="Exporter">Exporter</button>
   
</div>
<br><br>
<?php

        if(isset($_GET['recherche_nomprenom'])){
            $sql = 'select * from etudiant where Nom_Prenom LIKE "%'.$_GET['recherche_nomprenom'].'%"';
            $etd=$pdo->prepare($sql);
        }
        else {
            $etd=$pdo->prepare("select * from etudiant");
        }
        $etd->execute([]);?>
        <form method="POST" >
        <div class="suppr_modif">
        <?php
if(isset($_GET["Ville"])){
?>
      <button class="buttonss" id="btnsupprimerentreprise" formaction="etudiant.php?Ville=<?php echo $_GET['Ville']; ?>" name="supprimer_etudiant">Supprimer</button>
                        <button class="buttonss" id="btnmodifierentreprise"  formaction="modifier_etudiant.php?Ville=<?php echo $_GET['Ville']; ?>" name="modifier_entreprise">Modifier</button>

<?php
}
else {
    ?>
 <button class="buttonss" id="btnsupprimerentreprise" formaction="etudiant.php" name="supprimer_etudiant">Supprimer</button>
                        <button class="buttonss" id="btnmodifierentreprise"  formaction="modifier_etudiant.php" name="modifier_entreprise">Modifier</button>
<?php
}
?>   
            
        </div>  
        <div class="table-wrapper">
        <table class="fl-table">
        <thead>   
        <tr >
            <th><input type="checkbox" class="checkall"></th>
            <th>Classement</th>
            <th>Nom et Prénom</th>
            <th>Email</th>
            <th>Ville </th>
            <th>Site </th>
            <th>Filière</th>
            <th>Groupe</th>
            <th>Stage</th>
            <TH>Certification</th>
            <th>Session Individuel</th>
            <th>Atelier Entretien</th>
            <th>Atelier CV & LM</th>
            <th>Session de recrutement</th>
            <th>Séminaire</th>
        </tr>
        </thead>
                
                <tbody>
                    <?php 
                    
                     while ($etd1 = $etd->fetch()) { ?>
              
              <tr class="line">
                <td>
                    <input class="po_status" type="checkbox"  value="<?php echo $etd1['id_etd']; ?>" name="ids_etd[]"></td>
                    <td><?php echo $etd1['Classement']; ?> </td>
                    <td><?php echo $etd1['Nom_Prenom']; ?> </td>
                    <td><?php echo $etd1['Email']; ?></td>
                    <td><?php echo $etd1['Ville']; ?></td>
                    <td><?php echo $etd1['Site']; ?></td>
                    <td><?php echo $etd1['Filiere']; ?></td>
                    <td><?php echo $etd1['Groupe']; ?></td>
                     
                  <?php 
                      $stage=$pdo->prepare("select * from etd_entreprise st,entreprise en where st.Id_etd=? and en.ID_entreprise=st.Id_entreprise");
                      $stage->execute([$etd1['id_etd']]);
                      echo '<td>';       
                      while($stage1=$stage->fetch()){
                          ?>
                          <?php echo $stage1['Nom'].'-'.$stage1['Ville'].'<br/>';
                        
                      }
                  echo '</td>';

                  $certif=$pdo->prepare("select * from etd_certif ce,certificat certif  where ce.Id_etd=? and ce.Id_certif=certif.Id_certif");
                  $certif->execute([$etd1['id_etd']]);
                  echo '<td>';       
                  while($certif1=$certif->fetch()){
                      ?>
                      <?php echo $certif1['Nom'].'-'.$certif1['Organisme'].'<br/>';
                    
                  }
              echo '</td>';

                  
            $session_indiv=$pdo->prepare("select * from session_individuel sess,evenement ev where sess.Id_etd=? and ev.ID_event=sess.Id_event");
            $session_indiv->execute([$etd1['id_etd']]);
            echo '<td>';
          
           
            while($session_indiv2=$session_indiv->fetch()){
                ?>
                <?php echo $session_indiv2['Nom'].'-'.$session_indiv2['Annee'].'<br/>';  ?>
                <?php
            }


        echo '</td>';
        $entretien=$pdo->prepare("select * from entretien sess,evenement ev where sess.Id_etd=? and ev.ID_event=sess.Id_event");
        $entretien->execute([$etd1['id_etd']]);
        echo '<td>';       
        while($entretien1=$entretien->fetch()){
            ?>
            <?php echo $entretien1['Nom'].'-'.$entretien1['Annee'].'<br/>';
          
        }
    echo '</td>';


        $CVLM=$pdo->prepare("select * from cv_lm sess,evenement ev where sess.Id_etd=? and ev.ID_event=sess.Id_event");
        $CVLM->execute([$etd1['id_etd']]);
        echo '<td>';       
        while($CVLM1=$CVLM->fetch()){
            ?>
            <?php echo $CVLM1['Nom'].'-'.$CVLM1['Annee'].'<br/>';
          
        }
    echo '</td>';


    $SR=$pdo->prepare("select * from sessionrecrutement sess,evenement ev where sess.Id_etd=? and ev.ID_event=sess.Id_event");
        $SR->execute([$etd1['id_etd']]);
        echo '<td>';       
        while($SR1=$SR->fetch()){
            ?>
            <?php echo $SR1['Nom'].'-'.$SR1['Annee'].'<br/>';
          
        }
    echo '</td>';



    $seminaire=$pdo->prepare("select * from seminaire sess,evenement ev where sess.Id_etd=? and ev.ID_event=sess.Id_event");
    $seminaire->execute([$etd1['id_etd']]);
    echo '<td>';       
    while($seminaire1=$seminaire->fetch()){
        ?>
        <?php echo $seminaire1['Nom'].'-'.$seminaire1['Annee'].'<br/>';
      
    }
echo '</td>';




    echo'</tr>';
}
                     
            ?>


                <tbody>
            </table>
             </div>
             
    </form>

<div class="invisible">
<?php 
//exporter
        if(isset($_GET['recherche_nomprenom'])){
            $sql = 'select * from etudiant where Nom_Prenom LIKE "%'.$_GET['recherche_nomprenom'].'%"';
            $etd=$pdo->prepare($sql);
        }
        else {
            $etd=$pdo->prepare("select * from etudiant");
        }
        $etd->execute([]);?>.
       
        <table id="table_etudiant">
        <thead>   
        <tr>
        <th>Classement</th>
        <th>Nom et Prénom</th>
            <th>Email</th>
            <th>Ville </th>
            <th>Site </th>
            <th>Filière</th>
            <th>Groupe</th>
            <th>Stage</th>
            <th>Certification</th>
            <th>Session Individuel</th>
            <th>Atelier Entretien</th>
            <th>Atelier CV & LM</th>
            <th>Session de recrutement</th>
            <th>Séminaire</th>
        </tr>
        </thead>
                
                <tbody>
                    <?php 
                    
                     while ($etd1 = $etd->fetch()) { ?>
              
              <tr>
              <td><?php echo $etd1['Classement']; ?> </td>
                    <td><?php echo $etd1['Nom_Prenom']; ?> </td>
                    <td><?php echo $etd1['Email']; ?></td>
                    <td><?php echo $etd1['Ville']; ?></td>
                    <td><?php echo $etd1['Site']; ?></td>
                    <td><?php echo $etd1['Filiere']; ?></td>
                    <td><?php echo $etd1['Groupe']; ?></td>
                    <?php 
                     

                     $stage=$pdo->prepare("select * from etd_entreprise st,entreprise en where st.Id_etd=? and en.ID_entreprise=st.Id_entreprise");
                     $stage->execute([$etd1['id_etd']]);
                     echo '<td>';       
                     while($stage1=$stage->fetch()){
                         ?>
                         <?php echo $stage1['Nom'].'-'.$stage1['Ville'].'<br/>';
                       
                     }
                 echo '</td>';

                 $certif=$pdo->prepare("select * from etd_certif ce,certificat certif  where ce.Id_etd=? and ce.Id_certif=certif.Id_certif");
                 $certif->execute([$etd1['id_etd']]);
                 echo '<td>';       
                 while($certif1=$certif->fetch()){
                     ?>
                     <?php echo $certif1['Nom'].'-'.$certif1['Organisme'].'<br/>';
                   
                 }
             echo '</td>';



                     $session_indiv=$pdo->prepare("select * from session_individuel sess,evenement ev where sess.Id_etd=? and ev.ID_event=sess.Id_event");
                     $session_indiv->execute([$etd1['id_etd']]);
                     echo '<td>';
                   
                    
                     while($session_indiv2=$session_indiv->fetch()){
                         ?>
                         <?php echo $session_indiv2['Nom'].'-'.$session_indiv2['Annee'].'<br/>';  ?>
                         <?php
                     }
         
         
                 echo '</td>';
                 $entretien=$pdo->prepare("select * from entretien sess,evenement ev where sess.Id_etd=? and ev.ID_event=sess.Id_event");
                 $entretien->execute([$etd1['id_etd']]);
                 echo '<td>';       
                 while($entretien1=$entretien->fetch()){
                     ?>
                     <?php echo $entretien1['Nom'].'-'.$entretien1['Annee'].'<br/>';
                   
                 }
             echo '</td>';
         
         
                 $CVLM=$pdo->prepare("select * from cv_lm sess,evenement ev where sess.Id_etd=? and ev.ID_event=sess.Id_event");
                 $CVLM->execute([$etd1['id_etd']]);
                 echo '<td>';       
                 while($CVLM1=$CVLM->fetch()){
                     ?>
                     <?php echo $CVLM1['Nom'].'-'.$CVLM1['Annee'].'<br/>';
                   
                 }
             echo '</td>';
         
         
             $SR=$pdo->prepare("select * from sessionrecrutement sess,evenement ev where sess.Id_etd=? and ev.ID_event=sess.Id_event");
                 $SR->execute([$etd1['id_etd']]);
                 echo '<td>';       
                 while($SR1=$SR->fetch()){
                     ?>
                     <?php echo $SR1['Nom'].'-'.$SR1['Annee'].'<br/>';
                   
                 }
             echo '</td>';
         
         
         
             $seminaire=$pdo->prepare("select * from seminaire sess,evenement ev where sess.Id_etd=? and ev.ID_event=sess.Id_event");
             $seminaire->execute([$etd1['id_etd']]);
             echo '<td>';       
             while($seminaire1=$seminaire->fetch()){
                 ?>
                 <?php echo $seminaire1['Nom'].'-'.$seminaire1['Annee'].'<br/>';
               
             }
         echo '</td>';
         
         
             echo'</tr>';
                     }
             ?>
                <tbody>
            </table>
             </div>
             
    
</div>

   




<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>
  $(function(){
    $("#btnsupprimerentreprise").hide();
    $('#btnmodifierentreprise').hide(); 
    $('.po_status').click(function () {
    if( $(".po_status").is(":checked") == true){
         $('#btnsupprimerentreprise').show();
         $('#btnmodifierentreprise').show();
    } else {
         $('#btnsupprimerentreprise').hide(); 
         $('#btnmodifierentreprise').hide(); 
    }
});
});

$('tr').click(function () {
      
      $('.buttonss').toggle();
 

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



<script src="//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>
<script >
 $("#exp").click(function(){
        $("#table_etudiant").table2excel({
    name: "Etudiants",
    filename: "Etudiants.xls", // do include extension
    preserveColors: false // set to true if you want background colors and font colors preserved
});
});
    </script>
    </body>
</head>
</html>
z