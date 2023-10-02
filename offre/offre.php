<html>
<head>
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
       
        overflow : auto;
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
            top: 5%;
            margin-left: 17%;
        }

        .suppr_modif{
            position : relative;
            margin-left:47%;
            margin-top: -3.6%;
            justify-content: center;


        }


        /*barre de recherche */

.container{
    position:relative;
    top: 10%;
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
        <a href="../../SiteEmsi/index.php?Ville=<?php echo $_GET["Ville"];?>">Accueil Centre de Carrière <?php echo ucfirst($_GET["Ville"]); ?></a> 
        <?php
       }
       else {
        ?>
<a href="../../SiteEmsi/index.php">Accueil</a> 
    <?php
       }
       ?>
        <img src="../Image/icons8-more-than-24.png" alt=""><p style="color: black; text-decoration: none; cursor:default;" >Offre</p>
    </div>

<?php
if(isset($_GET["recherche_entreprise"])){

    ?>


<form id="animated-2" method="get" action="offre.php">

<div class="container" style="position :relative; z-index:999; top: 150px; left: 23%;">
<?php if(isset($_GET["Ville"])) { ?><input type="hidden" name="Ville" value="<?php echo $_GET["Ville"]; ?>"> <?php } ?>
    <input type="text" class="search-txt-input" value="<?php echo $_GET['recherche_entreprise'];?>" placeholder="Entrez le nom de l'entreprise..."   name="recherche_entreprise" maxlength="100">
    <input type="submit" value="Chercher" class="search-button">
</div>
<div style="position :relative; margin-top: 103px; left: 10%;">
  <input type="text" class="search-txt-input" value= "<?php echo $_GET['Poste'];?>" placeholder="Entrez le nom du poste..." name="Poste" maxlength="100">
    <input type="submit" value="Chercher" class="search-button">
</div>
    </form>

    <?php
}
else {

    ?>

<form id="animated-2" method="get" action="offre.php">

<div class="container" style="position :relative; z-index:999; top: 150px; left: 23%;">
<?php if(isset($_GET["Ville"])) { ?><input type="hidden" name="Ville" value="<?php echo $_GET["Ville"]; ?>"> <?php } ?>
    <input type="text" class="search-txt-input" placeholder="Entrez le nom de l'entreprise..." name="recherche_entreprise" maxlength="100">
    <input type="submit" value="Chercher" class="search-button">
</div>
<div style="position :relative; margin-top: 103px; left: 10%;">
  <input type="text" class="search-txt-input" placeholder="Entrez le nom du poste..." name="Poste" maxlength="100">
    <input type="submit" value="Chercher" class="search-button">
</div>
    </form>
    <?php 
}

    if(isset($_POST["supprimer_offre"])){
        $ids_offre=$_POST["ids_offre"];
        $all = implode(",", $ids_offre);
       
    $suppression_ev=$pdo->prepare("Delete from offre where id_offre IN ($all)");
    $suppression_ev->execute([]);


      }


if(isset($_POST["Importer"]) or isset($_POST['save_excel_data']))
{
   ?>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
       <div class="container" style="position: relative;  top: 20px;">
        <div class="row">
            <div class="col-md-12 mt-4">

                <div class="card" >
                    <div class="card-header">
                        <h4>Importer un fichier Excel d'offre</h4>
                    </div>
                    <div class="card-body">
                        
                    <?php
if(isset($_GET["Ville"])){
?>
        <form method="POST" action="offre.php?Ville=<?php echo $_GET['Ville']; ?>" enctype="multipart/form-data">

<?php
}
else {
    ?>
            <form method="POST" action="offre.php" enctype="multipart/form-data">

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
                {   $Poste = $row['0'];
                    $Nom= $row['1'];
                    $Ville = $row['2'];
                    $Date_reception = $row['3'];
                    $Type = $row['4'];
                    $Filiere = $row['5'];
                    $Nbr_poste = $row['6'];
                    $Nbr_candidature = $row['7'];
                    $Nbr_etudiant_conv = $row['8'];
                    $Nbr_etudiant_conf = $row['9'];
                    $Competence = $row['10'];
                    $SoftSkill = $row['11'];
                    $Outils = $row['12'];
                    $id=$pdo->prepare("select ID_entreprise from entreprise where Nom=? and Ville=?");
                    $id->execute([$Nom,$Ville]);
                    $ID=$id->fetch();
                
                    if(!empty($ID)){$OffreQuery = "insert into offre(Poste,id_entreprise,Ville,Date_reception,Type,Filiere,Nbr_poste,Nbr_candidature,Nbr_etudiant_conv,Nbr_etudiant_conf,Competence,SoftSkill,Outils) VALUES ('$Poste','$ID[0]','$Ville','$Date_reception','$Type','$Filiere','$Nbr_poste','$Nbr_candidature','$Nbr_etudiant_conv','$Nbr_etudiant_conf','$Competence','$SoftSkill','$Outils')";
                    $result =  $pdo->prepare($OffreQuery);
                    $result->execute([]);
                    $msg = true;}
                    else {
                       echo "<h4> L'entreprise $Nom est inexistante dans la base de donnée des entreprises.";
                    }
                }
                else
                {
                    $count = "1";
                }
            }
    
            if(isset($msg))
            {
                echo "<h4 style='margin-left: 7.7%;  position:relative; top : -1%;'>Importation avec succée</h4>";
            }
            else
            {
                echo "<h4 style='margin-left: 7.5%;  position:relative; top : -1%;'>Fichier inexistant</h4>";
            }
        }
        else
        {
            echo "<h4 style='margin-left: 7.7%;  position:relative; top : -1%;'>Fichier invalide</h4>";
        }   
    }
    ?>
    <div class="buttons" >
    <?php
if(isset($_GET["Ville"])){
?>
        <form method="POST" action="ajouter_offre.php?Ville=<?php echo $_GET['Ville']; ?>" >

<?php
}
else {
    ?>
            <form method="POST" action="ajouter_offre.php" >

<?php
}
?>   
    <button class="button" name="Ajouter">Ajouter</button>
</form>

<?php
if(isset($_GET["Ville"])){
?>
        <form method="POST" action="offre.php?Ville=<?php echo $_GET['Ville']; ?>" >

<?php
}
else {
    ?>
            <form method="POST" action="offre.php" >

<?php
}
?>   
<button class="button" type="submit"  name="Importer">Importer</button>

</form> 

<button class="button" type="submit" id="exp" name="Exporter">Exporter</button>
   
</div>
<br><br>
<?php

if(isset($_GET['recherche_entreprise'])){
    $sql = 'select * from offre o,entreprise en where en.id_entreprise=o.id_entreprise and Nom LIKE "%'.$_GET['recherche_entreprise'].'%" and Poste LIKE  "%'.$_GET['Poste'].'%" ';
    $offre=$pdo->prepare($sql);
}
else {
    $offre=$pdo->prepare("select * from offre o,entreprise en where en.id_entreprise=o.id_entreprise");
}
$offre->execute([]);
?>

<form method="POST" >
        <div class="suppr_modif">
        <?php
if(isset($_GET["Ville"])){
?>
 <button class="buttonss" id="btnsupprimeroffre" formaction="offre.php?Ville=<?php echo $_GET['Ville']; ?>" name="supprimer_offre">Supprimer</button>
<button class="buttonss" id="btnmodifieroffre" formaction="modifier_offre.php?Ville=<?php echo $_GET['Ville']; ?>" name="modifier_offre">Modifier</button>
<?php
}
else {
    ?>
        <button class="buttonss" id="btnsupprimeroffre" formaction="offre.php" name="supprimer_offre">Supprimer</button>
        <button class="buttonss" id="btnmodifieroffre" formaction="modifier_offre.php?" name="modifier_offre">Modifier</button>

<?php
}
?>   
        
        </div>  
       
        <div class="table-wrapper">
    <table class="fl-table" >
        <thead>
        <tr>
       <th><input type="checkbox" class="checkall"></th>
       <th>Poste demandé </th>
       <th>Entreprise</th>
       <th>Ville Offre</th>
       <th>Date de réception</th>
       <th>Type offre</th>
       <th>Filiére demandée</th>
       <th>Nombre de postes demandés</th>
       <th>Nombre de candidatures</th>
       <th>Nombre des étudiants convoqués</th>
       <th>Nombre des étudiants confirmés</th>
       <th>Compétences Techniques demandées </th>
       <th>Soft Skills Demandés</th>
       <th>Outils Maitrisés</th>
        </tr>
        </thead>
             
                <tbody>
                    <?php 
                        while ($offre1 = $offre->fetch()) {?>
              
              <tr class="line">
                <td>
        <tr>
        <td class="TD"><input class="po_status" type="checkbox" value="<?php echo $offre1["Id_offre"]; ?>" name="ids_offre[]"></td>
        <td> <?php echo $offre1['Poste']; ?> </td>
<td><?php echo$offre1['Nom'];?></td>
<td><?php echo $offre1['Ville'];?></td>
<td><?php echo $offre1['Date_reception'];?></td>
<td><?php echo $offre1['Type'];?></td>
<td><?php echo $offre1['Filiere'];?></td>
<td><?php echo $offre1['Nbr_poste'];?></td>
<td><?php echo $offre1['Nbr_candidature'];?></td>
<td><?php echo $offre1['Nbr_etudiant_conv'];?></td>
<td><?php echo $offre1['Nbr_etudiant_conf'];?></td>
<td><?php echo $offre1['Competence'];?></td>
<td><?php echo $offre1['SoftSkill'];?></td>
<td><?php echo $offre1['Outils'];?></td>
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
if(isset($_GET['recherche_entreprise'])){
    $sql = 'select * from offre o,entreprise en where en.id_entreprise=o.id_entreprise and Nom LIKE "%'.$_GET['recherche_entreprise'].'%"';
    $offre=$pdo->prepare($sql);
}
else {
    $offre=$pdo->prepare("select * from offre o,entreprise en where en.id_entreprise=o.id_entreprise");
}
$offre->execute([]);
echo '<table id="table_offre" border="2px" width="100%"><tr><th>Poste demandé </th><th>Entreprise</th><th>Ville Offre</th><th>Date de réception</th><th>Type offre</th><th>Filiére demandée</th><th>Nombre de postes demandés</th><th>Nombre de candidatures</th><th>Nombre des étudiants convoqués</th><th>Nombre des étudiants confirmés</th><th>Compétences Techniques demandées </th><th>Soft Skills Demandés</th><th>Outils Maitrisés</th></tr>';
while ($offre1 = $offre->fetch()) {
echo '<tr>
<td>' . $offre1['Poste'] . '</td>
<td>' . $offre1['Nom'] . '</td>
<td>' . $offre1['Ville'] . '</td>
<td>' . $offre1['Date_reception'] . '</td>
<td>' . $offre1['Type'] . '</td>
<td>' .$offre1['Filiere'] . '</td>
<td>' . $offre1['Nbr_poste'] . '</td>
<td>' . $offre1['Nbr_candidature'] . '</td>
<td>' . $offre1['Nbr_etudiant_conv'] . '</td>
<td>' . $offre1['Nbr_etudiant_conf'] . '</td>
<td>' . $offre1['Competence'] . '</td>
<td>' . $offre1['SoftSkill'] . '</td>
<td>' . $offre1['Outils'] . '</td>
</tr>';
}

echo '</table>';

?>



<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>
    $(function(){
    $("#btnmodifieroffre").hide();
    $('#btnsupprimeroffre').hide(); 
    $('.po_status').click(function () {
    if( $(".po_status").is(":checked") == true){
         $('#btnsupprimeroffre').show();
         $('#btnmodifieroffre').show();
    } else {
         $('#btnmodifieroffre').hide(); 
         $('#btnsupprimeroffre').hide(); 
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
        $("#table_offre").table2excel({
    name: "Offres",
    filename: "Offres.xls", // do include extension
    preserveColors: false // set to true if you want background colors and font colors preserved
});
});
    </script>
