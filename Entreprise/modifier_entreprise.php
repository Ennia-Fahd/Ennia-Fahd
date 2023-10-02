<?php require_once('../../SiteEmsi/Conexion.php');?>
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
  margin-top: 4.5em;
  
  
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


#dropdown {

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
  position: relative;
  width: 100%;
  text-align: center;
  padding-top: 20px;
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

 .container2 {
    position:relative;
    top: 12%;
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
  padding: 12px 20px;
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


<div  id="PathToFile" style="display:inline-flex;position: relative; top: 14%">
       <?php if(isset($_GET["Ville"])){ ?>
        
        <a href="../../SiteEmsi/admin.php">Admin</a><img  src="../Image/icons8-more-than-24.png" alt="">
        <a href="../../SiteEmsi/index.php?Ville=<?php echo $_GET["Ville"];?>">Accueil Centre de Carrière <?php echo ucfirst($_GET["Ville"]); ?></a>  <img  src="../Image/icons8-more-than-24.png" alt="">
        <a href="../../SiteEmsi/Entreprise/Entreprise.php?Ville=<?php echo $_GET["Ville"];?>" >Entreprise</a>
        <?php
       }
       else {
        ?>
<a href="../../SiteEmsi/index.php" >Accueil</a> <img  src="../Image/icons8-more-than-24.png" alt="">
<a href="../../SiteEmsi/Entreprise/Entreprise.php" >Entreprise</a>
    <?php
       }
       ?>
        
        <img src="../Image/icons8-more-than-24.png" alt=""><p style="color: black; text-decoration: none; cursor:default;" >Modifier Entreprise</p>
    </div>


<?php
if(isset($_POST["id"])){
  $id=$_POST["id"];
}
else if(isset($_POST["ids_entreprise"])){$id=$_POST["ids_entreprise"][0]; }
else if(isset($_GET["id"])){$id=$_GET["id"]; }

else {
  echo "Veuillez selectionner une entreprise";
}
if(isset($id)){
  
 if (isset($_GET["recherche_entreprise"])) {
    ?>
<div class="container2"  style="margin-top:1%;">
<form id="animated-2" method="get" action="modifier_entreprise.php">
<input type="hidden" name="id" value="<?php echo $id; ?>" >
<?php if(isset($_GET["Ville"])) { ?><input type="hidden" name="Ville" value="<?php echo $_GET["Ville"]; ?>"> <?php } ?>
    <input type="text" class="search-txt-input" placeholder="Entrez le nom de l'entreprise..."  value="<?php echo $_GET["recherche_entreprise"];?>" name="recherche_entreprise" maxlength="100">
    <input type="submit" value="Chercher" class="search-button">
  </form>
</div>
    <?php
}
else {
    
?>

<div class="container2" style="margin-top:1%;">
<form id="animated-2" method="get" action="modifier_entreprise.php">
<input type="hidden" name="id" value="<?php echo $id; ?>" >
<?php if(isset($_GET["Ville"])) { ?><input type="hidden" name="Ville" value="<?php echo $_GET["Ville"]; ?>"> <?php } ?>
    <input type="text" class="search-txt-input" placeholder="Entrez le nom de l'entreprise..." name="recherche_entreprise" maxlength="100">
    <input type="submit" value="Chercher" class="search-button">
  </form>
</div>

    <?php 
    
  
}



if(isset($_POST['btnEnvoyerEntreprise'])){
   
    $entr=$pdo->prepare("insert into entreprise(Nom,Secteur,Ville,Tel,Email) values(?,?,?,?,?)");
    $entr->execute([$_POST['Entreprise'],$_POST['Secteur'],$_POST['Ville'],$_POST['Tel'],$_POST['Email']]);
  }
  ?>
     



    
<div class="container" style="background:transparent;">
<?php
if(isset($_GET["Ville"])){
?>
      <form id="survey-form" action="modifier_entreprise.php?Ville=<?php echo $_GET['Ville']; ?>" method="Post">

<?php
}
else {
    ?>
                           <form id="survey-form" action="modifier_entreprise.php" method="Post">

<?php
}
?>   
<fieldset>
  <legend>Entreprise</legend>
  <?php 

$requete=$pdo->prepare("select * from entreprise where ID_entreprise= ?");
$requete->execute([$id]);
$ent=$requete->fetch();


?>

          <label  id="NomEntreprise" for="NomEntreprise">Entreprise :</label>
          <input class="input-field" type="text" id="name" name="Entreprise" value="<?php echo $ent["Nom"];?>"  placeholder="entre le nom de l'entreprise..." required autofocus>

          <br>
          <label id="email"  for="email"> Email :</label>
          <input class="input-field" type="email" id="email" name="Email" value="<?php echo $ent["Email"];?>" placeholder="Email de l'entreprise.." required>
          <br>
          <label id="Tel"  for="Tel"> Téléphone :</label>
          <input class="input-field" type="Tel" id="Tel" name="Tel" value="<?php echo "0".$ent["Tel"];?>" pattern="0[5-7][0-9]{8}" placeholder="Téléphone de l'entreprise.." required>
          <br>
          <label for="dropdown">Secteur :</label>
       
          <select id="dropdown" name="Secteur" required>
            <option disabled value selected>Selectionnez un secteur</option>

            <?php
            $tab=array("Transport / Logistique","Automatisme","Industrielle","Informatique","Agroalimentaire","Banque / Assurance","Chimie / Parachimie","Automobile","Métallurgie","Service");
        
    unset($tab[array_search($ent["Secteur"], $tab)]);
    
?>

<option value=<?php echo $ent["Secteur"];?> selected><?php echo $ent["Secteur"];?></option>
<?php  foreach($tab as $val){

echo "<option value=$val>$val</option>";

} 
          ?>
  
          </select>
         
        <br>

        <label for="dropdown">Ville :</label>
        <select id="dropdown" name="Ville" required>
            <option disabled value selected>Selectionnez une ville</option>
        <?php
            $tab=array("Casablanca","Tanger","Marrakesh","Rabat","Tetouan","Agadir","Meknes","El Jadida","Kenitra","Safi","Service");
        
    unset($tab[array_search($ent["Ville"], $tab)]);
    
?>

<option value=<?php echo $ent["Ville"];?> selected><?php echo $ent["Ville"];?></option>
<?php  foreach($tab as $val){

echo "<option value=$val>$val</option>";

} 
          ?>
          
  
          </select>
         
        <br>

       
       
         
        <br>

        <div class="btn" style="margin-top: 10px;">
          <button id="submit" name="btnEnvoyerEntreprise" type="submit">Envoyer</button>
          <button id="submit" name="btnResetEntreprise" type="reset">Annuler</button>
        </div>
</fieldset>
      </form>
    </div>

    <?php

if(isset($_GET['recherche_entreprise'])){
    $sql = 'select * from entreprise where Nom LIKE "%'.$_GET['recherche_entreprise'].'%"';
    $ent=$pdo->prepare($sql);
}
else {
    $ent=$pdo->prepare("select * from entreprise where ID_entreprise=$id");
}
$ent->execute([]);?>.

<div class="table-wrapper">
<table class="fl-table">
<thead>   
<tr>
    <th>Entreprise</th>
    <th>Secteur</th>
    <th>Ville</th>
    <th>Téléphone</th>
    <th>Email</th>
</tr>
</thead>
        
        <tbody>
            <?php 

             while ($ent1 = $ent->fetch()) { ?>
      
      <tr class="line">
            <td><?php echo $ent1['Nom']; ?> </td>
            <td><?php echo $ent1['Secteur']; ?></td>
            <td><?php echo $ent1['Ville']; ?></td>
            <td><?php echo $ent1['Tel']; ?></td>
            <td><?php echo $ent1['Email']; ?></td>
        </tr>
        <?php 
             }
            }
     ?>
        <tbody>
    </table>
     </div>
     
</form>



</html>
