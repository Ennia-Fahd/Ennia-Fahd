

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
            top: 3%;
            margin-left: 17%;
        }

        .suppr_modif{
       
            margin-left:47%;
            margin-top: -4.5%;
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

 /* hyper link for image */
 .one {
   
font-size: 15px;
font-weight: bold;
 width: 30px;
}



.one a {
 
    text-decoration: none;
    font-weight: 100px;
    color: black;
 position: relative;
}

.one a:before {
 position: absolute;
 top: 100%;
 left: 0;
 width: 100%;
 height: 3px;
 background-color:  white;
 content: '';
 -webkit-transform: translateY(8px);
 opacity: 0;
 transition-duration: .3s;
}

.one a:hover:before {
 -webkit-transform: translateY(0);
 opacity: 1;
}


}
      

/*filtre*/

th.sortable {
    color: #666;
    cursor: pointer;
    text-decoration: underline;
}

th.sortable:hover {
    color: black;
}

th.sorted-asc, th.sorted-desc {
    color: black;
}
#img{
    float:right;
    
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

<div  id="PathToFile" style="display:inline-flex;position: relative; top: 14%;float:left">
       <?php if(isset($_GET["Ville"])){ ?>
        
        <a href="../../SiteEmsi/admin.php">Admin</a><img  src="../Image/icons8-more-than-24.png" alt="">
        <a href="../../SiteEmsi/index.php?Ville=<?php echo $_GET["Ville"];?>">Accueil Centre de Carrière <?php echo ucfirst($_GET["Ville"]); ?></a> 
        <?php
       }
       else {
        ?>
<a href="../../SiteEmsi/index.php">Accueil</a> 
    <?php
       }
       ?>
        <img src="../Image/icons8-more-than-24.png" alt=""><p style="color: black; text-decoration: none; cursor:default;" >Stage</p>
    </div>

<?php 
if(isset($_GET["NomPrenom"])) {
    ?>
<form id="animated-2" method="get" action="stage.php">
<div class="container" style="position :relative; z-index:999; top: 120px; left: 23%;">
<?php if(isset($_GET["Ville"])) { ?><input type="hidden" name="Ville" value="<?php echo $_GET["Ville"]; ?>"> <?php } ?>
    <input type="text" class="search-txt-input" placeholder="Entrez le prénom et nom..." value="<?php echo $_GET["NomPrenom"];?>" name="NomPrenom" maxlength="100">
    <input type="submit" value="Chercher" class="search-button">
</div>
<div style="position :relative; margin-top: 42px; left: 10%;">
  <input type="text" class="search-txt-input" placeholder="Entrez le nom de l'entreprise..." value="<?php echo $_GET["Entreprise"];?>" name="Entreprise"  maxlength="100">
    <input type="submit" value="Chercher" class="search-button">
</div>
    </form>
</div>


<?php

}
else{
    ?>
<form id="animated-2" method="get" action="stage.php">
<div class="container" style="position :relative; z-index:999; top: 120px; left: 23%;">
<?php if(isset($_GET["Ville"])) { ?><input type="hidden" name="Ville" value="<?php echo $_GET["Ville"]; ?>"> <?php } ?>

    <input type="text" class="search-txt-input" placeholder="Entrez le prénom et nom..." name="NomPrenom" maxlength="100">
    <input type="submit" value="Chercher" class="search-button">
</div>
<div style="position :relative; margin-top: 42px; left: 10%;">
  <input type="text" class="search-txt-input" placeholder="Entrez le nom de l'entreprise..." name="Entreprise"  maxlength="100">
    <input type="submit" value="Chercher" class="search-button">
</div>
    </form>
</div>
    <?php 
}
    if(isset($_POST["supprimer_EntrepriseEtudiant"])){
        $ids_cen=$_POST["row-check"];
        $all = implode(",", $ids_cen);
       
      $suppression_stage=$pdo->prepare("Delete from etd_entreprise where Id_etd IN ($all)");
      $suppression_stage->execute([]);
        
    }


if(isset($_POST["Importer"]) or isset($_POST['save_excel_data']))
{
   ?>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
       <div class="container" style="position:relative; top: 3%;>
        <div class="row">
            <div class="col-md-12 mt-4">

           

                <div class="card">
                    <div class="card-header">
                        <h4>Importer un fichier Excel de stages</h4>
                    </div>
                    <div class="card-body">
                    <?php
if(isset($_GET["Ville"])){
?>
        <form method="POST" action="Stage.php?Ville=<?php echo $_GET['Ville']; ?>" enctype="multipart/form-data">

<?php
}
else {
    ?>
            <form method="POST" action="Stage.php" enctype="multipart/form-data">

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
                    $Email_etudiant = $row['1'];
                    $Nom_entreprise=$row['2'];
                    $Ville= $row['4'];
                    $Email_entreprise= $row['3'];
                    $Outils = $row['5'];
                    $id=$pdo->prepare("select id_etd from etudiant where Nom_Prenom=? and Email=?");
                    $id->execute([$NomPrenom,$Email_etudiant]);
                    $ID_etd=$id->fetch();
                    $id=$pdo->prepare("select ID_entreprise from entreprise where Nom=? and Email=? and Ville=?");
                    $id->execute([$Nom_entreprise,$Email_entreprise,$Ville]);
                    $ID_ent=$id->fetch();
                    if(!empty($ID_etd) and !empty($ID_ent)){
                        $ID_etd=$ID_etd["id_etd"];
                        $ID_ent=$ID_ent["ID_entreprise"];
                    $StageQuery = "insert into etd_entreprise (Id_etd,Id_entreprise,Outils) VALUES ('$ID_etd','$ID_ent','$Outils')";
                    $result =  $pdo->prepare($StageQuery);
                    $result->execute([]);
                    }
                    $msg = true;
                }
                else
                {
                    $count = "1";
                }
            }
    
            if(isset($msg))
            {
                echo "<h4 style='margin-left: 8%;  position:relative; top : 5.2%;'>Importation avec succée</h4></center>";
               
               
               
            }
            else
            {
                echo "<h4 style='margin-left: 8%;  position:relative; top : 5.2%;'>Fichier inexistant</h4>";
              
             
               
            }
        }
        else
        {
            echo "<h4 style='margin-left: 8%;  position:relative; top : -5.2%;'>Fichier invalide</h4>";
           
        
          
        }   
    }
    ?>
    <div class="buttons" >
    <?php
if(isset($_GET["Ville"])){
?>
        <form method="POST" action="ajouter_stage.php?Ville=<?php echo $_GET['Ville']; ?>">

<?php
}
else {
    ?>
            <form method="POST" action="ajouter_stage.php">

    <?php
}
?>   
        <button class="button" name="Ajouter">Ajouter</button>
</form>

<?php
if(isset($_GET["Ville"])){
?>
        <form method="POST" action="Stage.php?Ville=<?php echo $_GET['Ville']; ?>">

<?php
}
else {
    ?>
            <form method="POST" action="Stage.php">

    <?php
}
?>   
    <button class="button" type="submit"  name="Importer">Importer</button>

</form> 

<button class="button" type="submit" id="exp" name="Exporter">Exporter</button>
   
</div>
<br><br>
<?php
if(isset($_GET['NomPrenom'])){
    $sql = 'select * from etd_entreprise e,etudiant etd,entreprise en where etd.id_etd IN (select id_etd  from etudiant where Nom_Prenom LIKE "%'.$_GET['NomPrenom'].'%") and en.Id_entreprise IN (select id_entreprise  from entreprise where Nom LIKE "%'.$_GET['Entreprise'].'%") and e.Id_etd=etd.id_etd and e.Id_entreprise=en.id_entreprise';
    $certif_ent=$pdo->prepare($sql);
}
else {$certif_ent=$pdo->prepare("select * from etudiant");
}
$certif_ent->execute([]); 
?>
<?php
if(isset($_GET["Ville"])){
?>
        <form method="POST" action="Stage.php?Ville=<?php echo $_GET['Ville']; ?>">

<?php
}
else {
    ?>
            <form method="POST" action="Stage.php">

    <?php
}
?>        <div class="suppr_modif">
    <?php if(isset($_GET["Ville"])){

         ?>
                        <button class="buttonss" id="btnsupprimerEntrepriseEtudiant" name="supprimer_EntrepriseEtudiant">Supprimer</button>
                        <button class="buttonss" id="btnmodifierEntrepriseEtudiant" name="modifier_EntrepriseEtudiant">Modifier</button>
        <?php }
        else {
            ?>
             <button class="buttonss" id="btnsupprimerEntrepriseEtudiant" name="supprimer_EntrepriseEtudiant">Supprimer</button>
             <button class="buttonss" id="btnmodifierEntrepriseEtudiant" name="modifier_EntrepriseEtudiant">Modifier</button>
            <?php
        }?>
                    </div>  
    <div class="table-wrapper">
        <table class="fl-table" id="resultTable">
        <thead>   
        <tr>
        <th><input type="checkbox" class="checkall"></th>
            <th>Nom et Prénom <img id="img" src="Image/icons8-sort-down-20.png" alt=""></th>
            <th>Email <img id="img" src="Image/icons8-sort-down-20.png" alt=""></th>
            <th>Filiere <img id="img" src="Image/icons8-sort-down-20.png" alt=""></th>
            <th>Groupe<img id="img" src="Image/icons8-sort-down-20.png" alt=""></th>
            <th>Site<img id="img" src="Image/icons8-sort-down-20.png" alt=""></th>
            <th>Ville <img id="img" src="Image/icons8-sort-down-20.png" alt=""></th>
            <th>Convocation</th>
            <th>Attestation</th>
            <th>Outils utilisés</th>
            <th>Nombre de stage<img id="img" src="Image/icons8-sort-down-20.png" alt=""></th>

        </tr>
        </thead>
                
                <tbody>
                    <?php 
                    
                    while ($certif_ent1 = $certif_ent->fetch()) {
                        $certif_ent2 = $pdo->prepare("select * from etd_entreprise en ,etudiant e where en.id_etd=e.id_etd and e.id_etd=?");
                        $certif_ent2->execute([$certif_ent1["id_etd"]]);
                        $i=0;
                        while($certif_ent3=$certif_ent2->fetch()){
                            $i=$i+1;
                        }
                        if($i!=0){ 
                            ?>
              
              <tr >
              <td><input class="po_status" type="checkbox"  name="row-check[]" value=<?php echo $certif_ent1["id_etd"]; ?>></td>

                    <td><?php echo $certif_ent1["Nom_Prenom"]?></td>
                    <td><?php echo $certif_ent1["Email"] ?></td>
                    <td><?php echo $certif_ent1["Filiere"] ?></td>
                    <td><?php echo $certif_ent1["Groupe"] ?></td>
                    <td><?php echo $certif_ent1["Site"] ?></td>
                    <td><?php echo $certif_ent1["Ville"] ?></td>
                
                <?php 
                 $certif_ent2 = $pdo->prepare("select * from etd_entreprise en ,entreprise entre,etudiant e where entre.ID_entreprise=en.Id_entreprise and en.id_etd=e.id_etd and e.id_etd=?");
                 $certif_ent2->execute([$certif_ent1["id_etd"]]);
                 echo '<td>';
                while($certif_ent3=$certif_ent2->fetch()){
                 
                if (empty($certif_ent3["Convocation"])){
                    ?>
                
                <div class="one">
                <?php echo $certif_ent3["Nom"]; ?>
                </div>
                       <?php
                    }
                    else { ?>

                        <div class="one">
                        <a onclick="window.open(this.href); return false;" href="<?php echo '../../SiteEmsi/Image/Stages/Convocations/'.$certif_ent3["Convocation"]; ?>"><?php  echo $certif_ent3["Nom"]; ?><img src="../../SiteEmsi/Image/Certificats/icone.svg"></a>
                       </a></div>
                       <?php
                    }
                }
                $certif_ent2 = $pdo->prepare("select * from etd_entreprise en ,entreprise entre,etudiant e where entre.ID_entreprise=en.Id_entreprise and en.id_etd=e.id_etd and e.id_etd=?");
                $certif_ent2->execute([$certif_ent1["id_etd"]]);
                echo '</td><td>';
               while($certif_ent3=$certif_ent2->fetch()){
                  
                    if (empty($certif_ent3["Attestation"])){
                        ?>
                        <div class="one">
                        <?php echo $certif_ent3["Nom"]; ?>
                       </div>
                   <?php
                    }
                    else {
                       
?>
                    <div class="one">
                        <a onclick="window.open(this.href); return false;" href="<?php echo '../../SiteEmsi/Image/Stages/Attestations/'.$certif_ent3["Attestation"]; ?>"><?php echo $certif_ent3["Nom"];?><img src="../../SiteEmsi/Image/Certificats/icone.svg"></a>
                       </a></div>
                       <?php
                    }
                }
                $certif_ent2 = $pdo->prepare("select * from etd_entreprise en ,etudiant e where en.id_etd=e.id_etd and e.id_etd=?");
                $certif_ent2->execute([$certif_ent1["id_etd"]]);
                $certif_ent3=$certif_ent2->fetch();
                echo '<td>' . $certif_ent3["Outils"] . '</td><td>'.$i.'</td></tr>';
                
                }
                }
            
                
             ?>
                <tbody>
            </table>
             </div>
             
    </form>











    <div class="invisible">
    <?php
//expoter

if(isset($_GET['chercher_etd_entreprise'])){
    $sql = 'select * from etd_entreprise e,etudiant etd,entreprise en where etd.id_etd IN (select id_etd  from etudiant where Nom_Prenom LIKE "%'.$_GET['NomPrenom'].'%") and en.Id_entreprise IN (select id_entreprise  from entreprise where Nom LIKE "%'.$_GET['Entreprise'].'%") and e.Id_etd=etd.id_etd and e.Id_entreprise=en.id_entreprise';
    $certif_ent=$pdo->prepare($sql);
}
else {$certif_ent=$pdo->prepare("select * from etudiant");
}
$certif_ent->execute([]);
echo '<table id="table_EtdEnt" border="2px" width="100%"><tr><th>Nom et Prénom</th><th>Email</th><th>Filiere</th><th>Groupe</th><th>Site</th><th>Ville</th><th>Outils utilisés</th><th>Nombre de stage</th></tr>';
while ($certif_ent1 = $certif_ent->fetch()) {
$certif_ent2 = $pdo->prepare("select * from etd_entreprise en ,etudiant e where en.id_etd=e.id_etd and e.id_etd=?");
$certif_ent2->execute([$certif_ent1["id_etd"]]);
$i=0;
while($certif_ent3=$certif_ent2->fetch()){
    $i=$i+1;
}
if($i!=0){
echo '<tr>
<td>' . $certif_ent1["Nom_Prenom"] . '</td>
<td>' . $certif_ent1["Email"] . '</td>
<td>' . $certif_ent1["Filiere"] . '</td>
<td >' . $certif_ent1["Groupe"] . '</td>
<td>' . $certif_ent1["Site"] . '</td>
<td>' . $certif_ent1["Ville"] . '</td>';

$certif_ent2 = $pdo->prepare("select * from etd_entreprise en ,entreprise entre,etudiant e where entre.ID_entreprise=en.Id_entreprise and en.id_etd=e.id_etd and e.id_etd=?");
$certif_ent2->execute([$certif_ent1["id_etd"]]);
echo '<td>';
while($certif_ent3=$certif_ent2->fetch()){

   ?>
<?php echo $certif_ent3["Nom"].'</br>'; ?>

      <?php
   }
   $certif_ent2 = $pdo->prepare("select * from etd_entreprise en ,etudiant e where en.id_etd=e.id_etd and e.id_etd=?");
$certif_ent2->execute([$certif_ent1["id_etd"]]);
$certif_ent3=$certif_ent2->fetch();
echo '<td>' . $certif_ent3["Outils"] . '</td><td>'.$i.'</td>';
echo'</tr>';

}
}

echo '</table>';


?>

</div>


<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>
 $(function(){
    $("#btnsupprimerEntrepriseEtudiant").hide();
    $('#btnmodifierEntrepriseEtudiant').hide(); 
    $('.po_status').click(function () {
    if( $(".po_status").is(":checked") == true){
         $('#btnsupprimerEntrepriseEtudiant').show();
         $('#btnmodifierEntrepriseEtudiant').show();
    } else {
         $('#btnsupprimerEntrepriseEtudiant').hide(); 
         $('#btnmodifierEntrepriseEtudiant').hide(); 
    }
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


    $('tr').click(function () {
      
      $('.buttonss').toggle();
 

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
        $("#table_EtdEnt").table2excel({
    name: "Stages",
    filename: "Stages.xls", // do include extension
    preserveColors: false // set to true if you want background colors and font colors preserved
});
});
    </script>
    </body>
</head>
</html>






<script>
    $(document).ready(function() {
	zebraRows('tr:odd td', 'odd');
	
	$('tbody tr').hover(function(){
	  $(this).find('td').addClass('hovered');


	}, function(){
	  $(this).find('td').removeClass('hovered');
    });
	
	//default each row to visible
	$('tbody tr').addClass('visible');
	
	//overrides CSS display:none property
	//so only users w/ JS will see the
	//filter box
	$('#search').show();
	
	$('#filter').keyup(function(event) {
		//if esc is pressed or nothing is entered
    if (event.keyCode === 27 || $(this).val() === '') {
			//if esc is pressed we want to clear the value of search box
			$(this).val('');
			
			//we want each row to be visible because if nothing
			//is entered then all rows are matched.
      $('tbody tr').removeClass('visible').show().addClass('visible');

    }

		//if there is text, lets filter
		else {
      filter('tbody tr', $(this).val());
    }

		//reapply zebra rows
		$('.visible td').removeClass('odd');
		zebraRows('.visible:even td', 'odd');
	});
	
	//grab all header rows
	$('thead th').each(function(column) {
		$(this).addClass('sortable')
					.click(function(){
						var findSortKey = function($cell) {
							return $cell.find('.sort-key').text().toUpperCase() + ' ' + $cell.text().toUpperCase();

						};
						
						var sortDirection = $(this).is('.sorted-asc') ? -1 : 1;
						
						//step back up the tree and get the rows with data
						//for sorting
						var $rows = $(this).parent()
											.parent()
												.parent()
													.find('tbody tr')
														.get();
						
						//loop through all the rows and find
						$.each($rows, function(index, row) {
							row.sortKey = findSortKey($(row).children('td').eq(column));
						});
						
						//compare and sort the rows alphabetically
						$rows.sort(function(a, b) {
							if (a.sortKey < b.sortKey) return -sortDirection;
							if (a.sortKey > b.sortKey) return sortDirection;
							return 0;
						});
						
						//add the rows in the correct order to the bottom of the table
						$.each($rows, function(index, row) {
							$('tbody').append(row);
							row.sortKey = null;
						});
						
						//identify the column sort order
						$('th').removeClass('sorted-asc sorted-desc');
						var $sortHead = $('th').filter(':nth-child(' + (column + 1) + ')');
						sortDirection == 1 ? $sortHead.addClass('sorted-asc') : $sortHead.addClass('sorted-desc');
						
						//identify the column to be sorted by
						$('td').removeClass('sorted')
									.filter(':nth-child(' + (column + 1) + ')')
									.addClass('sorted');
						
						$('.visible td').removeClass('odd');
						zebraRows('.visible:even td', 'odd');
					});
	});
});


//used to apply alternating row styles
function zebraRows(selector, className)
{
	$(selector).removeClass(className)
							.addClass(className);
}

//filter results based on query
function filter(selector, query) {
	query	=	$.trim(query); //trim white space
  query = query.replace(/ /gi, '|'); //add OR for regex
  
  $(selector).each(function() {
    ($(this).text().search(new RegExp(query, "i")) < 0) ? $(this).hide().removeClass('visible') : $(this).show().addClass('visible');
  });
}
</script>