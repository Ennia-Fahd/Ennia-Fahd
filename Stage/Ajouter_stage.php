
<?php  require_once('../../SiteEmsi/Conexion.php'); ?>
<html>
<head>
<link rel="stylesheet" href="../../siteEmsi/CSS/decorer.css">
<link rel="stylesheet" href="../../siteEmsi/CSS/heder.css">
<link rel="stylesheet" href="../../siteEmsi/CSS/acceuil.css">

<style>
    @import url('https://fonts.googleapis.com/css?family=Abel');

    img{
        margin: 8px;
    }
    *{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
}

body, html {
  overflow-y : auto;
        background: rgb(187,191,197);
        background: linear-gradient(180deg, rgba(187,191,197,0.6702031154258579) 55%, rgba(255,255,255,0.014740930551908282) 100%);

  margin: 0;
  padding: 0;
  font-family: Helvetica;
    -webkit-font-smoothing: antialiased;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -ms-background-size: cover;
  background-size: cover;

}

@media (min-width: 767px) {

    fieldset
{
  padding:4px;	
}
fieldset legend{
  color: #189F5C;
  font-weight: bold;
}

   


.container {

  border-radius: 20px;
  margin: auto;
  width: 90%;
  margin-top: 1.5em;
  
  
}
.container form {
    color: #fff;
}
#survey-form {
  
  margin: 0 auto;
  width: 80%;
 
  padding:  6px;
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

button {
  background-color: #088933;
  border-radius: 4px;
  color: white;
  font-size: 1em;
  font-weight: bold;
  font-family: inherit;
  padding: 5px 15px;
  border: 1px solid;
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


/* Table Styles */

.table-wrapper{
    margin: 10px 70px 70px;
    box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
    position:relative; 
    top:5%;
}

.fl-table {
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

.fl-table td {
    border-right: 1px solid #f8f8f8;
    font-size: 12px;
}

.fl-table thead th {
    color: #ffffff;
    background: #008000;
}


.fl-table thead th:nth-child(odd) {
    color: #ffffff;
    background: #008000;
}

.fl-table tr:nth-child(even) {
    background: #F8F8F8;
}

  /*barre de recherche */

.container2{
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
  left: -20px;
 
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
       color: black;
    position: relative;
   }

.one a:before {
  position: absolute;
  top: 100%;
  left: 0;
  width: 100%;
  height: 3px;
  background-color: white;
  content: '';
  -webkit-transform: translateY(8px);
  opacity: 0;
  transition-duration: .3s;
}

.one a:hover:before {
  -webkit-transform: translateY(0);
  opacity: 1;
}

/*file input*/
.input-file-container {
  position: relative;
  

} 
 .input-file-trigger {
  text-align:center;
  display: inline-block;
  padding: 3px 3px;
 margin-left: 50px;
 width: 30%;
position:relative;

  background: #189F5C;
  color: #fff;
  font-size: 1em;
  transition: all .4s;
  cursor: pointer;
}
 .input-file {
  position: relative;
  top: 0; left: 0px;


  display:none;

  cursor: pointer;
}

.input-file2 {
  position: relative;
  top: 0; left: 0px;


  display:none;

  cursor: pointer;
}

 .input-file-trigger:hover,
.input-file-trigger:active {
  background: #58CE91;
  color: #ffffff;
}


 .file-return {
    margin: 0;
  font-style: italic;
  font-size: .9em;
  font-weight: bold;
}
 .file-return:not(:empty):before {
  content: "Fichier selectionné : ";
  font-style: normal;
  font-weight: normal;
}

.file-return2:not(:empty) {
  margin: 1em 0;
}
.file-return2 {
    margin: 0;
  font-style: italic;
  font-size: .9em;
  font-weight: bold;
}
 .file-return2:not(:empty):before {
  content: "Fichier selectionné : ";
  font-style: normal;
  font-weight: normal;
}

/*textarea*/

textarea {
  vertical-align:middle;
position:relative; 
margin-top: 20px;
  margin-left: 5%;
    padding: 10px;
    max-width: 100%;
    line-height: 1.5;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-shadow: 1px 1px 1px #999;
}
  
}
</style>


</head>
<body>
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
        <a href="../../SiteEmsi/index.php?Ville=<?php echo $_GET["Ville"];?>">Accueil Centre de Carrière <?php echo ucfirst($_GET["Ville"]); ?></a><img  src="../Image/icons8-more-than-24.png" alt="">
        <a href="../../SiteEmsi/Stage/Stage.php?Ville=<?php echo $_GET["Ville"];?>">Stage</a>

        <?php
       }
       else {
        ?>
<a href="../../SiteEmsi/index.php">Accueil</a> <img  src="../Image/icons8-more-than-24.png" alt="">
<a href="../../SiteEmsi/Stage/Stage.php">Stage</a>
    <?php
       }
       ?>
        <img src="../Image/icons8-more-than-24.png" alt=""><p style="color: black; text-decoration: none; cursor:default;" >Ajouter Stage</p>
    </div>


<?php 
if(isset($_GET["NomPrenom"])){
  ?>
  <form id="animated-2" method="get" action="ajouter_stage.php">
<div class="container2" style="position :relative; z-index:999; top: 145px; left: 23%;">
<?php if(isset($_GET["Ville"])) { ?><input type="hidden" name="Ville" value="<?php echo $_GET["Ville"]; ?>"> <?php } ?>
    <input type="text" class="search-txt-input" placeholder="Entrez le prénom et nom..." value="<?php echo $_GET["NomPrenom"];?>" name="NomPrenom" maxlength="100">
    <input type="submit" value="Chercher" class="search-button">
</div>
<div style="position :relative; margin-top: 88px; left: 10%;">
  <input type="text" class="search-txt-input" placeholder="Entrez le nom de l'entreprise..." value="<?php echo $_GET["Entreprise"];?>" name="Entreprise"  maxlength="100">
    <input type="submit" value="Chercher" class="search-button">
</div>
    </form>
</div>
  <?php
}
  else {
?>
<form id="animated-2" method="get" action="ajouter_stage.php">
<div class="container2" style="position :relative; z-index:999; top: 145px; left: 23%;">
<?php if(isset($_GET["Ville"])) { ?><input type="hidden" name="Ville" value="<?php echo $_GET["Ville"]; ?>"> <?php } ?>

    <input type="text" class="search-txt-input" placeholder="Entrez le prénom et nom..." name="NomPrenom" maxlength="100">
    <input type="submit" value="Chercher" class="search-button">
</div>
<div style="position :relative; margin-top: 88px; left: 10%;">
  <input type="text" class="search-txt-input" placeholder="Entrez le nom de l'entreprise..." name="Entreprise"  maxlength="100">
    <input type="submit" value="Chercher" class="search-button">
</div>
    </form>
</div>
<?php
  }
  ?>
<div class="container" >
<?php
if(isset($_GET["Ville"])){
?>
<form id="survey-form" action="ajouter_stage.php?Ville=<?php echo $_GET['Ville']; ;?>"   method="Post" enctype="multipart/form-data">
<?php
}
else {
    ?>
<form id="survey-form" action="ajouter_stage.php"  method="Post" enctype="multipart/form-data">
    <?php
}
?>   
   
      
<fieldset>
  <legend>Stages</legend>
        
          <label for="dropdown">Nom et Prénom :</label>
          <?php $certifetd=$pdo->prepare("select * from Etudiant");
          $certifetd->execute([]);?>
          <select class="dropdown" name="NomPrenom" id="s2" onchange="SelectRedirect2();" required>
            <option disabled value selected>Selectionnez un étudiant</option>
          <?php while($certifetd1=$certifetd->fetch()){ ?>
            <option value="<?php echo $certifetd1['id_etd']; ?> "><?php echo $certifetd1['Nom_Prenom']; ?> </option>
            <?php } ?>
          
 <?php
            if($_SESSION["Admin"]==1 and $_SESSION["DepartementStage"]==0  or $_SESSION["Admin"]==1 and $_SESSION["DepartementStage"]==1){
  ?>
  <option>Autre</option>
  <?php } ?>
          </select>
     
         <br>
    
      <label for="dropdown">Entreprise d'acceuil : </label>
      <?php
          $certifent=$pdo->prepare("select * from Entreprise");
          $certifent->execute([]);
        ?>
          <select name="NomEntreprise" id="s1" class="dropdown" onchange="SelectRedirect();" required>
          <option disabled value selected>Selectionner une Entreprise</option>
          <?php while($certifent1=$certifent->fetch()){ ?>
    <option  value="<?php echo $certifent1['ID_entreprise']; ?>"><?php echo $certifent1['Nom']; ?></option>
    <?php
}
?> 
<?php
if($_SESSION["Admin"]==1 and $_SESSION["DepartementStage"]==0 or $_SESSION["Admin"]==1 and $_SESSION["DepartementStage"]==1){
  ?>
  <option>Autre</option>
  <?php } ?>
</select>
<br>
<label> Outils utilisés :</label><textarea  name="Outils"  rows="5" cols="39" placeholder="Outils..."></textarea><br>
         
<br>

  <div class="input-file-container"> 
  <label>Importer convocation de stage :</label> 
    <input class="input-file"  id="my-file1" name="ConvocationStage" type="file">
    <label for="my-file1" class="input-file-trigger" >Selectionner un fichier...</label>
  </div>
  <p style="text-align: center;" class="file-return" ></p>

  <div class="input-file-container" style="top: 20px;"> 
  <label>Importer attestation de stage :</label> 
    <input class="input-file2"  id="my-file2" name="AttestationStage" type="file">
    <label for="my-file2" class="input-file-trigger" >Selectionner un fichier...</label>
  </div>
  <p style="text-align: center;" class="file-return2" ></p>

    <br><br>
    </form>
        <div class="btn" >
          <button id="submit"  name="btnAjouterEntrEtd" type="submit">Envoyer</button>
          <button id="submit" name="btnResetEntrEtd" type="reset">Annuler</button>
        </div>
</fieldset>
      </form>
    </div>
    <?php

if(isset($_POST['btnAjouterEntrEtd'])){

    $verif=$pdo->prepare("select * from  etd_entreprise");
    $verif->execute();
    
    $exist=false;
   while($test=$verif->fetch()){
       if($test["Id_etd"]==$_POST["NomPrenom"] and $test["Id_entreprise"]==$_POST["NomEntreprise"]){
           $exist=true;
           break;
       }
    }
    if($exist){
       echo ' Cet etudiant à déjà réalisé le stage au seins de la même entreprise !';
    }
    else {
        $nom_imageConvocation2="";
        $nom_imageAttestation2="";
  $nom_imageConvocation= $_FILES['ConvocationStage']['name'];
  $tmp_img_nameConvocation=$_FILES["ConvocationStage"]["tmp_name"];
   $imgConvocation= explode(".",$nom_imageConvocation);
   if(!empty($nom_imageConvocation)){$imgConvocation[0]=$imgConvocation[0].uniqid("",True);
   $nom_imageConvocation2=implode(".",$imgConvocation);
 
   move_uploaded_file($tmp_img_nameConvocation,getcwd()."/../../SiteEmsi/Image/Stages/Convocations/".$nom_imageConvocation2);
   }
  


   $nom_imageAttestation= $_FILES['AttestationStage']['name'];
  
  $tmp_img_nameAttestation=$_FILES["AttestationStage"]["tmp_name"];
   $imgAttestation= explode(".",$nom_imageAttestation);
   if(!empty($nom_imageAttestation)){
    $imgAttestation[0]=$imgAttestation[0].uniqid("",True);
$nom_imageAttestation2=implode(".",$imgAttestation);


   move_uploaded_file($tmp_img_nameAttestation,getcwd()."/../../SiteEmsi/Image/Stages/Attestations/".$nom_imageAttestation2);
   }

    $data=$pdo->prepare("insert into etd_entreprise (ID_entreprise,Id_etd,Outils,Convocation,Attestation) values (?,?,?,?,?)");
    $data->execute([$_POST["NomEntreprise"],$_POST["NomPrenom"],$_POST["Outils"],$nom_imageConvocation2,$nom_imageAttestation2]);
    }
}

if(isset($_GET['NomPrenom'])){
                        $sql = 'select * from etd_entreprise e,etudiant etd,entreprise en where etd.id_etd IN (select id_etd  from etudiant where Nom_Prenom LIKE "%'.$_GET['NomPrenom'].'%") and en.Id_entreprise IN (select id_entreprise  from entreprise where Nom LIKE "%'.$_GET['Entreprise'].'%") and e.Id_etd=etd.id_etd and e.Id_entreprise=en.id_entreprise';
                        $certif_ent=$pdo->prepare($sql);
                    }
                    else {$certif_ent=$pdo->prepare("select * from etudiant");
                    }
                    $certif_ent->execute([]); ?>
        <div class="table-wrapper">
        <table class="fl-table">
        <thead>   
        <tr>
            
            <th>Nom et Prénom</th>
            <th>Email</th>
            <th>Filiere</th>
            <th>Groupe</th>
            <th>Site</th>
            <th>Ville</th>
            <th>Convocation</th>
            <th>Attestation</th>
            <th>Outils utilisés</th>
            <th>Nombre de stage</th>

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
                        <a onclick="window.open(this.href); return false;" href="<?php echo '../Image/Stages/Convocations/'.$certif_ent3["Convocation"];?>"><?php  echo $certif_ent3["Nom"]; ?><img src="../../SiteEmsi/Image/Certificats/icone.svg"></a>
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

        </body>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <script>
function SelectRedirect(){
switch(document.getElementById('s1').value)
{
case "Autre":
  <?php if(isset($_GET["Ville"])){ ?>
  window.location="../../SiteEmsi/Entreprise/ajouter_entreprise.php?Ville=<?php echo $_GET["Ville"]; ?>";
  
 <?php }
  else {?>
window.location="../../SiteEmsi/Entreprise/ajouter_entreprise.php";
  <?php
  }
?>

break;
}
}

function SelectRedirect2(){
switch(document.getElementById('s2').value)
{
case "Autre":
  <?php if(isset($_GET["Ville"])){ ?>
  window.location="../../SiteEmsi/Etudiant/ajouter_etudiant.php?Ville=<?php echo $_GET["Ville"]; ?>";
  
 <?php }
  else {?>
window.location="../../SiteEmsi/Etudiant/ajouter_etudiant.php";
  <?php
  }
?>

break;
}
}
</script>


<script>


var fileInput  = document.querySelector( ".input-file" ),  
    fileInput2  = document.querySelector( ".input-file2" ), 
    button     = document.querySelector( ".input-file-trigger" ),
    the_return = document.querySelector(".file-return"),
    the_return2 = document.querySelector(".file-return2");

fileInput.addEventListener( "change", function( event ) {  
    the_return.innerHTML =  document.getElementById('my-file1').files[0].name;

});  
fileInput2.addEventListener( "change", function( event ) {  
 
    the_return2.innerHTML = document.getElementById('my-file2').files[0].name;
});  
</script>


</html>