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
 .input-file:hover + .input-file-trigger,
 .input-file:focus + .input-file-trigger,
 .input-file-trigger:hover,
.input-file-trigger:active {
  background: #58CE91;
  color: #ffffff;
}


.file-return:not(:empty) {
  margin: 1em 0;
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
        <a href="../../SiteEmsi/index.php?Ville=<?php echo $_GET["Ville"];?>">Accueil Centre de <?php echo ucfirst($_GET["Ville"]); ?></a> <img  src="../Image/icons8-more-than-24.png" alt="">
        <a href="../../SiteEmsi/Certificat/Certificat.php?Ville=<?php echo $_GET["Ville"];?>">Certificat des Etudiants</a> 
        <?php
       }
       else {
        ?>
<a href="../../SiteEmsi/index.php">Accueil</a> <img  src="../Image/icons8-more-than-24.png" alt="">
<a href="../../SiteEmsi/Certificat/Certificat.php">Liste des Certificats des Etudiants</a>
    <?php
       }
       ?>
        <img src="../Image/icons8-more-than-24.png" alt=""><p style="color: black; text-decoration: none; cursor:default;" >Certificat des Etudiants</p>
    </div>
<?php
if(isset($_GET["chercher_etd_certif"])){
    ?>
<form id="animated-2" method="get" action="Ajouter_certificatEtudiant.php">
<div class="container2" style="position :relative; z-index:999; top: 120px; left: 23%;">
<?php if(isset($_GET["Ville"])) { ?><input type="hidden" name="Ville" value="<?php echo $_GET["Ville"]; ?>"> <?php } ?>
<input type="text" class="search-txt-input" placeholder="Entrez le nom et prénom de l'étudiant..." value="<?php echo $_GET["NomPrenom"]; ?>" name="NomPrenom" maxlength="100">
<input type="submit" value="Chercher" name="chercher_etd_certif" class="search-button">
</div>
<div style="position :relative; margin-top: 72px; left: 10%;">
<input type="text" class="search-txt-input" placeholder="Entrez le nom du Certificat..." value="<?php echo $_GET["Certificat"]; ?>" name="Certificat" maxlength="100">
<input type="submit" value="Chercher" name="chercher_etd_certif" class="search-button">
</div>
  </form>
    <?php
}
else {
?>
<form id="animated-2" method="get" action="Ajouter_certificatEtudiant.php">
<div class="container2" style="position :relative; z-index:999; top: 155px; left: 23%;">
<?php if(isset($_GET["Ville"])) { ?><input type="hidden" name="Ville" value="<?php echo $_GET["Ville"]; ?>"> <?php } ?>
<input type="text" class="search-txt-input" placeholder="Entrez le nom et prénom de l'étudiant..." name="NomPrenom" maxlength="100">
<input type="submit" value="Chercher" name="chercher_etd_certif" class="search-button">
</div>
<div style="position :relative; margin-top: 102px; left: 10%;">
<input type="text" class="search-txt-input" placeholder="Entrez le nom du Certificat..." name="Certificat" maxlength="100">
<input type="submit" value="Chercher" name="chercher_etd_certif" class="search-button">
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
      <form id="survey-form" action="ajouter_certificatEtudiant.php?Ville=<?php echo $_GET['Ville']; ?>"  method="Post" enctype="multipart/form-data">



<?php
}
else {
    ?>
      <form id="survey-form" action="ajouter_certificatEtudiant.php"   method="Post" enctype="multipart/form-data">
        <?php
}
?>   
<fieldset>
  <legend>Certificats Etudiant</legend>
        
          <label for="dropdown">Nom et Prénom :</label>
          <?php $certifetd=$pdo->prepare("select * from Etudiant");
          $certifetd->execute([]);?>
       
          <select id="s2" class="dropdown"  onchange="SelectRedirect2();"" name="NomPrenom" required>
            <option disabled value selected>Selectionnez un étudiant</option>
          <?php while($certifetd1=$certifetd->fetch()){ ?>
            <option value="<?php echo $certifetd1['id_etd']; ?> "><?php echo $certifetd1['Nom_Prenom']; ?> </option>
            <?php } ?>
            <option>Autre</option> 
          </select>
     
         <br>
       
          <label for="dropdown">Certification possédé :</label>
          <?php
          $certifetd=$pdo->prepare("select * from Certificat");
          $certifetd->execute([]);
        ?>
     
          <select name="NomCertificat" id="s1" class="dropdown"  onchange="SelectRedirect();" required>
          <option disabled value selected>Selectionner un Certificat</option>
          <?php while($certifetd1=$certifetd->fetch()){ ?>
    <option  value="<?php echo $certifetd1['id_certif']; ?>"><?php echo $certifetd1['Nom']; ?></option>
    <?php
}
?> 
<option>Autre</option>
          </select>
<br>

  <div class="input-file-container" style="top: 20px;"> 
  <label>Importer Certificat :</label> 
    <input class="input-file"  id="my-file"name="ImageCertificat" type="file">
    <label tabindex="0" for="my-file" class="input-file-trigger" >Selectionner un fichier...</label>
  </div>
  <p style="text-align: center;" class="file-return"></p>

    <br><br>
    </form>
        <div class="btn" >
          <button id="submit"  name="btnAjouterCertifEtd" type="submit">Envoyer</button>
          <button id="submit" name="btnResetCertifEtd" type="reset">Annuler</button>
        </div>
</fieldset>
      </form>
    </div>
    <?php

if(isset($_POST['btnAjouterCertifEtd'])){

    $verif=$pdo->prepare("select * from  etd_certif");
    $verif->execute();
    
    $exist=false;
   while($test=$verif->fetch()){
       if($test["Id_etd"]==$_POST["NomPrenom"] and $test["Id_certif"]==$_POST["NomCertificat"]){
           $exist=true;
           break;
       }
    }
    if($exist){
       echo ' Cet etudiant posséde déjà cette certification !';
    }
    else {
      
      $nom_image_certificat= $_FILES['ImageCertificat']['name'];
      $nom_image_certificat2="";
      $tmp_img_name=$_FILES["ImageCertificat"]["tmp_name"];
        $img=explode(".",$nom_image_certificat);
   
        if(!empty($nom_image_certificat)){
        $img[0]=$img[0].uniqid("",true);
       
        $nom_image_certificat2=implode(".",$img);

      move_uploaded_file($tmp_img_name,getcwd()."\..\..\SiteEmsi\Image\Certificats\ ".$nom_image_certificat2);
        }

      $data=$pdo->prepare("insert into etd_certif (id_etd,id_certif,Certificat) values (?,?,?)");
      $data->execute([$_POST["NomPrenom"],$_POST["NomCertificat"],$nom_image_certificat2]);

   }
   }


   if(isset($_GET['chercher_etd_certif'])){
    $sql = 'select * from etudiant en,etd_certif c ,certificat cert  where en.Nom_Prenom LIKE "%'.$_GET['NomPrenom'].'%" and cert.Nom LIKE "%'.$_GET['Certificat'].'%" and en.id_etd=c.Id_etd and c.Id_certif=cert.id_certif';

    $certif_etd=$pdo->prepare($sql);
}
else {$certif_etd=$pdo->prepare("select * from etudiant");
}
$certif_etd->execute([]);
?>
        
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
            <th>Certification possédé</th>
            <th>Nombre de certificat</th>
        </tr>
        </thead>
                
                <tbody>
                    <?php 
                       while ($certif_etd1 = $certif_etd->fetch()) {
                        $certif_etd2 = $pdo->prepare("select * from etd_certif ct,certificat c where ct.Id_certif=c.id_certif and ct.id_etd=?");
                        $certif_etd2->execute([$certif_etd1["id_etd"]]);
                        $i=0;
                        while($certif_etd3=$certif_etd2->fetch()){
                            $i=$i+1;
                        }
                        if($i!=0){


            ?>
            <tr>
<td><?php echo $certif_etd1["Nom_Prenom"]; ?></td>
<td><?php echo$certif_etd1["Email"]; ?></td>
<td><?php echo $certif_etd1["Filiere"]; ?></td>
<td><?php echo $certif_etd1["Groupe"]; ?></td>
<td><?php echo $certif_etd1["Site"]; ?></td>
<td><?php echo $certif_etd1["Ville"]; ?></td>
                <?php 
$certif_etd2 = $pdo->prepare("select * from etd_certif ct,certificat c where ct.Id_certif=c.id_certif and id_etd=?");
$certif_etd2->execute([$certif_etd1["id_etd"]]);

   echo '<td>';
   while($certif_etd3=$certif_etd2->fetch()){
   if (empty($certif_etd3["Certificat"])){ ?>
    <div class="one"> <?php echo $certif_etd3["Nom"]; ?></div>
    <?php
   }
   else {
      ?>
     
     <div class="one">
  <a onclick="window.open(this.href); return false;" href="<?php echo '../../SiteEmsi/Image/Certificats/ '.$certif_etd3["Certificat"]; ?>"><?php echo $certif_etd3["Nom"]; ?><img src="../../SiteEmsi/Image/Certificats/icone.svg">
 </a></div>
  <?php
}
   }

   echo '</td><td>'.$i.'</td></tr>';
               
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
    window.location="../Certificat/Certificat_secondaire.php?Ville=<?php echo $_GET["Ville"]; ?>";
 <?php }
  else {?>
  window.location="../Certificat/Certificat_secondaire.php";
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
    button     = document.querySelector( ".input-file-trigger" ),
    the_return = document.querySelector(".file-return");
      


fileInput.addEventListener( "change", function( event ) {  
    the_return.innerHTML =  document.getElementById('my-file').files[0].name;
});  
</script>

</html>