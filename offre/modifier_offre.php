
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
  overflow-x : auto;
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

.field{
    padding: 5px;
  margin: 18px 0 0 10px;
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
       color: #189F5C;
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



/*textarea*/

textarea {
  vertical-align:middle;
position:relative; 
margin-top: 20px;
  /* margin-left: 5%; */
    padding: 10px;
    max-width: 60%;
    line-height: 1.5;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-shadow: 1px 1px 1px #999;
}
  
}


section{
    width:100%;
    
}
section #right{
    width:50%;
    float:right;  
    margin-top:3%      
}section #right label{
    text-align:start;
    font-size:20px;
    text-align:right;
}
section #left{
    width:50%;
}section #left label{
    text-align:start;
    font-size:20px;
    text-align:right;

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
 <button class="bn632-hover bn22" name="Deconexion" id="Deconexion">Deconexion</button>
</form>
<div  id="PathToFile" style="display:inline-flex;position: relative; top: 14%">
       <?php if(isset($_GET["Ville"])){ ?>
        
        <a href="../../SiteEmsi/admin.php">Admin</a><img  src="../Image/icons8-more-than-24.png" alt="">
        <a href="../../SiteEmsi/index.php?Ville=<?php echo $_GET["Ville"];?>">Accueil Centre de Carrière <?php echo ucfirst($_GET["Ville"]); ?></a> <img  src="../Image/icons8-more-than-24.png" alt="">
        <a href="../../SiteEmsi/Offre/Offre.php?Ville=<?php echo $_GET["Ville"];?>">Offre </a> 
        <?php
       }
       else {
        ?>
               

<a href="../../SiteEmsi/index.php">Accueil</a> 
<img  src="../Image/icons8-more-than-24.png" alt="">  <a href="../../SiteEmsi/Offre/Offre.php">Offre </a> 

    <?php
       }
       ?>
        <img src="../Image/icons8-more-than-24.png" alt=""><p style="color: black; text-decoration: none; cursor:default; ">Modifier Offre</p>
    </div>
<?php
if(isset($_POST["id"])){
  $id=$_POST["id"];
}
else if(isset($_POST["ids_offre"])){$id=$_POST["ids_offre"][0]; }
else if(isset($_GET["id"])){$id=$_GET["id"]; }
else {
  echo "Veuillez selectionner une offre";
}
if(isset($id)){

if(isset($_GET["recherche_entreprise"])){

    ?>


<form id="animated-2" method="get" action="modifier_offre.php">

<div class="container2" style="position :relative; z-index:999; top: 140px; left: 23%;">
    <input type="hidden" name="id" value="<?php echo $id; ?>" >
    <?php if(isset($_GET["Ville"])) { ?><input type="hidden" name="Ville" value="<?php echo $_GET["Ville"]; ?>"> <?php } ?>

    <input type="text" class="search-txt-input" value="<?php echo $_GET['recherche_entreprise'];?>" placeholder="Entrez le nom d'entreprise..."   name="recherche_entreprise" maxlength="100">
    <input type="submit" value="Chercher" class="search-button">
</div>
<div style="position :relative; margin-top: 83px; left: 10%;">
  <input type="text" class="search-txt-input" value= "<?php echo $_GET['Poste'];?>" placeholder="Entrez le nom du poste..." name="Poste" maxlength="100">
    <input type="submit" value="Chercher" class="search-button">
</div>
    </form>

    <?php
}
else {

    ?>

<form id="animated-2" method="get" action="modifier_offre.php">

<div class="container2" style="position :relative; z-index:999; top: 140px; left: 23%;">
<input type="hidden" name="id" value="<?php echo $id; ?>" >
<?php if(isset($_GET["Ville"])) { ?><input type="hidden" name="Ville" value="<?php echo $_GET["Ville"]; ?>"> <?php } ?>

    <input type="text" class="search-txt-input" placeholder="Entrez le nom de l'entreprise..." name="recherche_entreprise" maxlength="100">
    <input type="submit" value="Chercher" class="search-button">
</div>
<div style="position :relative; margin-top: 83px; left: 10%;">
  <input type="text" class="search-txt-input" placeholder="Entrez le nom du poste..." name="Poste" maxlength="100">
    <input type="submit" value="Chercher" class="search-button">
</div>
    </form>


    <?php 
}


$requete=$pdo->prepare("select * from offre o,entreprise en where o.ID_entreprise=en.id_entreprise and Id_offre= ?");
$requete->execute([$id]);
$offre=$requete->fetch();

?>


     
<div class="container" >
<?php
if(isset($_GET["Ville"])){
?>
      <form id="survey-form" action="modifier_offre.php?Ville=<?php echo $_GET['Ville']; ?>"   method="Post" enctype="multipart/form-data">



<?php
}
else {
    ?>
                  <form id="survey-form" action="modifier_offre.php"   method="Post" enctype="multipart/form-data">


<?php
}
?>   
<fieldset>
  <legend>Offre</legend>
<section>
  <section id="right">
  <label  id="NbrPoste" for="NbrPoste">Nombre de postes demandés :</label>
 <input class="input-field" type="number" name="Poste_nbr"  value=<?php echo $offre["Nbr_poste"];?> placeholder="Entrez le nombre de poste..." ><br>
 <label  id="NbrCandidature" for="NbrCandidature">Nombre de candidatures :</label>
<input class="input-field" type="number" value=<?php echo $offre["Nbr_candidature"];?> name="Candidature" placeholder="Entrez le nombre de candidature..."><br>
<label  id="Nombre_convoque" for="Nombre_convoque">Nombre des étudiants convoqué:</label>
 <input  class="input-field" type="number"  value=<?php echo $offre["Nbr_etudiant_conv"];?> placeholder="Entrez le nombre des candidats convoqué..." name="Convoque" ><br>
 <label  id="Nombre_confirme" for="Nombre_confirme">Nombre des étudiants confirmé :</label>
 <input class="input-field" type="number"  value=<?php echo $offre["Nbr_etudiant_conf"];?> placeholder="Entrez le nombre des candidats confirmé..." name="Confirme" >
<label > Compétences techniques :</label><textarea   name="Competence"  rows="5" cols="30" placeholder="Compétence technique..."><?php echo $offre["Competence"];?></textarea><br>
 <label> Soft Skills Demandés :</label><textarea  name="Skills"   rows="5" cols="30" placeholder="Soft Skills..."><?php echo $offre["SoftSkill"];?></textarea><br>
 <label> Outils Maitrisés :</label><textarea   name="Outils"  rows="5" cols="30" placeholder="Outils ..."><?php echo $offre["Outils"];?></textarea><br>

</section>
<br>
<section id="left">


 <label  id="Poste" for="Poste">Poste demandé :</label>
          <input class="input-field" type="text"  name="Poste"  value=<?php echo $offre["Poste"];?> placeholder="Poste cherché..." required >

          <br>
      <label for="dropdown">Entreprise : </label>
      <?php
          $certifent=$pdo->prepare("select * from Entreprise");
          $certifent->execute([]);
        ?>
          <select name="Entreprise" id="s1" class="dropdown" onchange="SelectRedirect();" required>
          <option disabled value selected>Selectionner une Entreprise</option>
          <?php 
          while($certifent1=$certifent->fetch()){  
            if($certifent1['ID_entreprise']==$offre["id_entreprise"]){
              ?>
              <option selected value="<?php echo $certifent1['ID_entreprise'].'+'.$certifent1['Ville']; ?>" ><?php echo $offre["Nom"]; ?> </option>
<?php
            }
            else {
            
            ?>
            
            <option value="<?php echo $certifent1['ID_entreprise'].'+'.$certifent1['Ville']; ?>"><?php echo $certifent1['Nom']; ?> </option>
            <?php  }
          } ?>
            <option>Autre</option>
        
</select>
<br>
<label  id="DateR" for="DateR">Date de réception :</label>
          <input class="input-field" type="date" value=<?php echo $offre["Date_reception"];?>  name="DateR" placeholder="Date de réception..." required >

          <br>
<label for="dropdown">Type d'offre : </label>
      
          <select name="Type" id="s1" class="dropdown" onchange="SelectRedirect();" required>
          <option disabled value >Selectionner un type</option>
          <?php
          $tab=array("CDI","CDD","CTT");
        
        unset($tab[array_search($_POST["Type"], $tab)]);
        
    ?>
    
    <option value=<?php echo $offre["Type"];?> selected><?php echo $offre["Type"];?></option>
    <?php  foreach($tab as $val){
    
    echo "<option value=$val>$val</option>";
    
    }  ?>
          
</select>

<br>
<br>
<label  id="Filiere" for="Filiere">Filière demandées :</label><br>
<?php
          $tab=array("IIR","IFA","GI","IAII","GC");
        $tab2= explode("-",$offre["Filiere"]);
        foreach($tab2 as $val){
        unset($tab[array_search($val, $tab)]);
        }
        
    ?>
    <?php

    foreach($tab2 as $val){
        ?>
 
    <label class="field"><?php echo $val; ?></label><input type="checkbox" name="Filiere[]"  value=<?php echo $val;?> checked>
    <?php  
    }
    foreach($tab as $val){
    ?>
    <label class="field"><?php echo $val; ?></label><input  type="checkbox" name="Filiere[]"  value=<?php echo $val;?> required ><br>
    <?php
    }  ?>

<input type="hidden" name="id" value="<?php echo $id; ?>" >

</section>
 <br>
        <div class="btn" >
          <button id="submit"  name="btnAjouterOffre" type="submit">Envoyer</button>
          <button id="submit" name="btnResetOffre" type="reset">Annuler</button>
        </div>
        
</fieldset>
      </form>
    </div>
    <?php


if(isset($_GET['recherche_entreprise'])){
  $sql = 'select * from offre o,entreprise en where en.id_entreprise=o.id_entreprise and Nom LIKE "%'.$_GET['recherche_entreprise'].'%" and Poste LIKE  "%'.$_GET['Poste'].'%" ';
  $offre=$pdo->prepare($sql);
}
else if (isset($id)) {
  $offre=$pdo->prepare("select * from offre o,entreprise en where en.id_entreprise=o.id_entreprise and Id_offre=$id");
}
else {
    $offre=$pdo->prepare("select * from offre o,entreprise en where en.id_entreprise=o.id_entreprise");

}
$offre->execute([]);
?>

<form>
     
     
      <div class="table-wrapper">
  <table class="fl-table" >
      <thead>
      <tr>
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
                }
           ?>
              <tbody>
          </table>
           </div>
           
        </body>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <script>
function SelectRedirect(){
switch(document.getElementById('s1').value)
{
case "Autre":
window.location="../../SiteEmsi/Entreprise/ajouter_entreprise.php";
break;
}
}
</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<script>
    $(function(){
    var requiredCheckboxes = $(' :checkbox[required]');
    requiredCheckboxes.change(function(){
        if(requiredCheckboxes.is(':checked')) {
            requiredCheckboxes.removeAttr('required');
        } else {
            requiredCheckboxes.attr('required', 'required');
        }
    });
});
</script>
</html>