

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
            top: 10%;
            margin-left: 17%;
        }

        .suppr_modif{
       
            margin-left:51%;
            margin-top:-2.2%;
            justify-content: center;


        }



        /*form*/
.container {

  border-radius: 20px;
  margin: auto;
  width: 90%;
  position: relative;
  top: 10%;
  
  
}
.container form {
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
  width: 100%;
  text-align: center;
  right:2%;
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
        <img src="../Image/icons8-more-than-24.png" alt=""><p style="color: black; text-decoration: none; cursor:default;" >Liste des Certificats</p>
    </div>

<?php 
if(isset($_GET["NomCertifSecondaire"])){
?>
  <form id="animated-2" method="get" action="Certificat_secondaire.php">

<div class="container2" style="position :relative; z-index:999; top: 145px; left: 23%;">
<?php if(isset($_GET["Ville"])) { ?><input type="hidden" name="Ville" value="<?php echo $_GET["Ville"]; ?>"> <?php } ?>
    <input type="text" class="search-txt-input" placeholder="Entrez le nom du certificat..."  value="<?php echo $_GET["NomCertifSecondaire"];?>" name="NomCertifSecondaire" maxlength="100">
    <input type="submit" style="position:relative; left:-3%;" value="Chercher" class="search-button">
</div>
<div style="position :relative; margin-top: 5%; left: 10%;">
  <input type="text" class="search-txt-input" placeholder="Entrez le nom de l'organisme.."  value="<?php echo $_GET["OrganismeCertifSecondaire"];?>" name="OrganismeCertifSecondaire" maxlength="100">
    <input type="submit" style="position:relative; left:-2%;" value="Chercher" class="search-button">
</div>
    </form>

<?php
}
else {

?>
<form id="animated-2" method="get" action="Certificat_secondaire.php">

<div class="container2" style="position :relative; z-index:999; top: 165px; left: 23%;">
<?php if(isset($_GET["Ville"])) { ?><input type="hidden" name="Ville" value="<?php echo $_GET["Ville"]; ?>"> <?php } ?>
    <input type="text" class="search-txt-input" placeholder="Entrez le nom du certificat..." name="NomCertifSecondaire" maxlength="100">
    <input type="submit" style="position:relative; left:-3%;" value="Chercher" class="search-button">
</div>
<div style="position :relative; margin-top: 6%; left: 10%;">
  <input type="text" class="search-txt-input" placeholder="Entrez le nom de l'organisme.." name="OrganismeCertifSecondaire" maxlength="100">
    <input type="submit" style="position:relative; left:-2%;" value="Chercher" class="search-button">
</div>
    </form>


<?php
}

if(isset($_POST['Ajouter'])){?>
<div class="container" style="background:transparent;">
      <form id="survey-form" action="certificat_secondaire.php" method="Post">

      <?php
    if(isset($_GET["Ville"])){
?>
      <form id="survey-form" action="certificat_secondaire.php?Ville=<?php echo $_GET['Ville']; ?>" method="Post">

<?php
}
else {
    ?>
      <form id="survey-form" action="certificat_secondaire.php" method="Post">
        <?php
}
?>   
       <label  id="NomCertificat" for="NomCertificat">Nom du Certificat : </label>
          <input class="input-field" type="text" id="name" name="NomCertifSecondaire" placeholder="Nom du certificat..." required autofocus>
<form action="certificat_secondaire.php" method="Post" style="position:relative; left: 10%; top:10%;">
<br>
<label  id="Organisme" for="Organisme">Organisme :</label>
          <input class="input-field" type="text" id="name" name="OrganismeCertifSecondaire" placeholder="Organisme..." required>
<br>
<div class="btn">
<input type="submit" name="AjouterCertifSecondaire" value="Ajouter" >

<input type="reset" name="AnnulerCertifSecondaire" value="Annuler" >
</div>

</form>
</div>
<?php } ?>

    <?php 
    
    if (isset($_POST["supprimer_CertificatSecondaire"])){

        $ids_csecon=$_POST["row-check"];
        $all = implode(",", $ids_csecon);
        $suppr=$pdo->prepare("Delete from etd_certif where Id_certif IN ($all)");
        $suppr->execute([]);
    $suppression_csecon=$pdo->prepare("Delete from certificat where id_certif IN ($all)");
    $suppression_csecon->execute([]);
    }
    if(isset($_POST['AjouterCertifSecondaire'])){

        $insert_Certifsecond= $pdo->prepare("insert into certificat (Nom,Organisme) values(?,?)");
        $insert_Certifsecond->execute([$_POST["NomCertifSecondaire"],$_POST["OrganismeCertifSecondaire"]]);
    }

if(isset($_POST["Importer"]) or isset($_POST['save_excel_data']))
{
   ?>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
       <div class="container" style="position:relative; top: 13%;">
        <div class="row">
            <div class="col-md-12 mt-4">

           

                <div class="card" style="position:relative; bottom:30px;">
                    <div class="card-header">
                        <h4>Importer un fichier Excel de Certificats</h4>
                    </div>
                    <div class="card-body">

                        <form action="Certificat_secondaire.php" method="POST" enctype="multipart/form-data">

                            <input type="file" name="import_file" class="form-control" />
                            <button type="submit" name="save_excel_data" class="btn btn-primary mt-3" style=" position: relative; left:40%; width: 100px ;background-color:#189F5C; border-color: grey;">Import</button>

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
                    $Nom = $row['0'];
                    $Organisme = $row['1'];
                    $CertifSecondaireQuery = "INSERT INTO Certificat(Nom,Organisme) VALUES ('$Nom','$Organisme')";
                    $result =  $pdo->prepare($CertifSecondaireQuery);
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
                echo "<h4 style='margin-left: 7.5%;  position:relative; top : 9%;'>Importation avec succée</h4></center>";
               
               
               
            }
            else
            {
                echo "<h4 style='margin-left: 7.5%;  position:relative; top : 9%;'>Fichier inexistant</h4>";
              
             
               
            }
        }
        else
        {
            echo "<h4 style='margin-left: 7.5%;  position:relative; top : 9%;'>Fichier invalide</h4>";
           
        
          
        }   
    }
    ?>
    <div class="buttons" >
    <?php
    if(isset($_GET["Ville"])){
?>
      <form action="Certificat_secondaire.php?Ville=<?php echo $_GET['Ville']; ?>"  method="Post">

<?php
}
else {
    ?>
    <form action="Certificat_secondaire.php"  method="Post">
        <?php
}
?>  
    <button class="button" name="Ajouter">Ajouter</button>
</form>

<?php
    if(isset($_GET["Ville"])){
?>
      <form action="Certificat_secondaire.php?Ville=<?php echo $_GET['Ville']; ?>"  method="Post">

<?php
}
else {
    ?>
    <form action="Certificat_secondaire.php"  method="Post">
        <?php
}
?>  <button class="button" type="submit"  name="Importer">Importer</button>

</form> 

<button class="button" type="submit" id="exp" name="Exporter">Exporter</button>
   
</div>
<br><br>



<?php

if(isset($_GET["NomCertifSecondaire"])){
    $certif=$pdo->prepare('select * from Certificat where Nom LIKE "%'.$_GET['NomCertifSecondaire'].'%" and Organisme LIKE "%'.$_GET['OrganismeCertifSecondaire'].'%"');
}
else { $certif=$pdo->prepare("select * from certificat"); }
$certif->execute([]); ?>
        <form method="POST" action="Certificat_secondaire.php">
        <div class="suppr_modif">
                        <button class="buttonss" id="btnsupprimerCertificatSecondaire" name="supprimer_CertificatSecondaire">Supprimer</button>
                        <button class="buttonss" id="btnmodifierCertificatSecondaire" name="modifier_CertificatSecondnaire">Modifier</button>
                       
        </div>  
        <div class="table-wrapper">
        <table class="fl-table">
        <thead>   
        <tr>
        <th><input type="checkbox" class="checkall"></th>
        <th>Nom</th>
        <th>Organisme</th>
        </tr>
        </thead>
                <tbody>
                    <?php 
                     while ($certif1=$certif->fetch()) { ?>
              
              <tr class="line">
              <td><input class="po_status" type="checkbox"  name="row-check[]" value=<?php echo $certif1["id_certif"]?>></td>
                    <td><?php echo $certif1["Nom"] ?> </td>
                    <td><?php echo $certif1["Organisme"] ?> </td>
                    
                </tr>
                <?php 
                     } ?>
                     
                <tbody>
            </table>
             </div>
             
    </form>
    <div class="invisible">
<?php 
//exporter
if(isset($_GET["rechercherCertifSecondaire"])){
    $certif=$pdo->prepare('select * from certificat where Nom LIKE "%'.$_GET['rechercherCertifSecondaire'].'%"');
}
else { $certif=$pdo->prepare("select * from certificat"); }
$certif->execute([]); ?>
    
      
        <table id="table_certif">
          
        <tr>
        <th>Nom</th>
        <th>Organisme</th>
        </tr>
                    <?php 
                     while ($certif1=$certif->fetch()) { ?>
              
              <tr>
                    <td><?php echo $certif1["Nom"] ?> </td>
                    <td><?php echo $certif1["Organisme"] ?> </td> 
                </tr>
                <?php 
                     } ?>
            </table>
             
</div>



<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>
 $(function(){
    $('#btnmodifierCertificatSecondaire').hide();
    $('#btnsupprimerCertificatSecondaire').hide(); 
    $('.po_status').click(function () {
    if( $(".po_status").is(":checked") == true){
         $('#btnsupprimerCertificatSecondaire').show();
         $('#btnmodifierCertificatSecondaire').show();
    } else {
         $('#btnmodifierCertificatSecondaire').hide(); 
         $('#btnsupprimerCertificatSecondaire').hide(); 
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
        $("#table_certif").table2excel({
    name: "Certificats",
    filename: "Certificats.xls", // do include extension
    preserveColors: false // set to true if you want background colors and font colors preserved
});
});
    </script>

    </body>
</head>
</html>
