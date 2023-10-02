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
  position:relative; 
    top: 5%;
    margin: 10px 70px 70px;
    box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
    
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


}
</style>


</head>
<body>
<nav id="navBar">
    <li>
    <?php
      if(isset($_GET['Ville'])){?>
    <ul><a href="../../SiteEmsi/index.php?Ville=<?php echo $_GET['Ville'];?>"><img src="../../siteEmsi/Image/career.jpg" alt=""></a></ul>
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
        <a href="../../SiteEmsi/index.php?Ville=<?php echo $_GET["Ville"];?>">Accueil Centre de Carrière <?php echo ucfirst($_GET["Ville"]); ?></a> <img  src="../Image/icons8-more-than-24.png" alt="">
        <a href="../../SiteEmsi/Evenement/Evenement.php?Ville=<?php echo $_GET["Ville"];?>">Partie Evenement</a> <img  src="../Image/icons8-more-than-24.png" alt="">
        <a href="../../SiteEmsi/Evenement/Evenement.php?Ville=<?php echo $_GET["Ville"];?>">Evenement</a>

        <?php
       }
       else {
        ?>
<a href="../../SiteEmsi/index.php">Accueil</a> <img  src="../Image/icons8-more-than-24.png" alt="">
<a href="../../SiteEmsi/Evenement/Evenement.php">Partie Evenement</a> <img  src="../Image/icons8-more-than-24.png" alt="">
<a href="../../SiteEmsi/Evenement/Evenement.php">Evenement</a>
    <?php
       }
       ?>
        <img src="../Image/icons8-more-than-24.png" alt=""><p style="color: black; text-decoration: none; cursor:default;" >Modifier Evenement</p>
    </div>

<?php
if(isset($_POST["id"])){
  $id=$_POST["id"];
}
else if(isset($_POST["row-check"])){$id=$_POST["row-check"][0];
$_SESSION["id_modif_event"]=$id; }
else if(isset($_GET["id"])){$id=$_GET["id"]; }
else if (isset($_SESSION["id_modif_event"])){
  $id=$_SESSION["id_modif_event"];
}
else {
  echo "Veuillez selectionner un événement";
}
if(isset($id)){


if(isset($_GET["recherEvent"])){
  ?>

<form id="animated-2" method="get" action="modifier_evenement.php">
<div class="container2" style="position :relative; z-index:999; top: 145px; left: 23%;">
<?php if(isset($_GET["Ville"])) { ?><input type="hidden" name="Ville" value="<?php echo $_GET["Ville"]; ?>"> <?php } ?>
<input type="hidden" name="id" value="<?php echo $id; ?>" >
<input type="text" class="search-txt-input" placeholder="Entrez le nom de l'evenement..." value="<?php echo $_GET["recherche_event"]; ?>" name="recherche_event" maxlength="100">
<input type="submit" value="Chercher" name="recherEvent" class="search-button">
</div>
<div style="position :relative; margin-top: 87px; left: 10%;">
<input type="text" class="search-txt-input" placeholder="Entrez le type de l'evenement..." value="<?php echo $_GET["Type_event"]; ?>" name="Type_event" maxlength="100">
<input type="submit" value="Chercher" name="rechercheREvent" class="search-button">
</div>
  </form>
</div>
<?php
}
else {
  ?>
  <form id="animated-2" method="get" action="modifier_evenement.php">
<div class="container2" style="position :relative; z-index:999; top: 145px; left: 23%;">
<?php if(isset($_GET["Ville"])) { ?><input type="hidden" name="Ville" value="<?php echo $_GET["Ville"]; ?>"> <?php } ?>
<input type="hidden" name="id" value="<?php echo $id; ?>" >
<input type="text" class="search-txt-input" placeholder="Entrez le nom de l'evenement..." name="recherche_event" maxlength="100">
<input type="submit" value="Chercher" name="recherEvent" class="search-button">
</div>
<div style="position :relative; margin-top: 87px; left: 10%;">
<input type="text" class="search-txt-input" placeholder="Entrez le type de l'evenement..." name="Type_event" maxlength="100">
<input type="submit" value="Chercher" name="rechercheREvent" class="search-button">
</div>
  </form>
</div>
  <?php
}


/*Update*/

if(isset($_POST["btnEnvoyerEvent"])){
$up=$pdo->prepare("Update Evenement set Nom=?,Type=?,Date=?,Depense=?,Commentaire=?,Nbr_participant=?,Annee=?,Lieu=? where ID_event=?");
$up->execute([$_POST["Nom"],$_POST["Evenement"],$_POST["Date"],$_POST["Depense"],$_POST["Commentaire"],$_POST["Nbr_participant"],$_POST["SessionDate"],$_POST["Lieu"],$id]);


}



$requete=$pdo->prepare("select * from evenement where ID_event= ?");
$requete->execute([$id]);
$ev=$requete->fetch();

 
?>








<div class="container" >
  <?php
  if(isset($_GET["Ville"])){?>
    <form id="survey-form" action="modifier_evenement.php?Ville=<?php echo $_GET["Ville"] ;?>"   method="Post" enctype="multipart/form-data">

 <?php }
  else {
?>
      <form id="survey-form" action="modifier_evenement.php"   method="Post" enctype="multipart/form-data">
<?php
  }
  ?>
<fieldset>
  <legend>Financement Evenement</legend>
        
  <label  id="NomEvenement" for="NomEvenement">Nom de l'évènement :</label>
          <input class="input-field" type="text" value=<?php echo $ev["Nom"];?> name="Nom" placeholder="Nom de l'évènement..." required >
          <input type="hidden" name="id" value="<?php echo $id; ?>" >
          <br>
          <label for="dropdown">Type de l'évènement :</label>
       
          <select id="dropdown" name="Evenement" required>
            <option disabled value selected>Selectionnez un type</option>
            <?php
            $tab=array("Seminaire","Session de recrutement","Atelier CV & LM","Atelier Entretien","Atelier Session individuel");
        
         unset($tab[array_search($_POST["Evenement"], $tab)]); 
        
    ?>
    
    <option value=<?php echo $ev["Type"];?> selected><?php echo $ev["Type"];?></option>
    <?php  foreach($tab as $val){
    ?>
    <option value="<?php echo $val;?>"><?php echo $val; ?></option>
    <?php
    }  ?>
          </select>
          <br>
          <label for="dropdown">Année de la session :</label>
          <select id="dropdown" name="SessionDate" required>
            <option disabled value selected>Selectionnez une année</option>

         <?php for($i=2000;$i<=Date ("Y")+3;$i++)
        { 
        if($i != $ev["Annee"]){
            ?>
            <option value="<?php echo $i; ?>"> <?php echo $i; ?> </option> 
<?php }
else {
    ?>
      <option value=<?php echo $ev["Annee"];?> selected><?php echo $ev["Annee"];?></option>
    <?php
}
        }
?>  


        </select> 
         
          <br>
          <label id="date"  for="date">Date :</label>
          <input class="input-field" type="date" value=<?php echo $ev["Date"];?> name="Date"  required>
          <br>
         
          <label id="tel" for="tel">Dépense :</label>
          <input class="input-field" type="number"  step="0.01"  value=<?php echo $ev["Depense"];?> name="Depense" placeholder="Dépense de l'évènement..." required>
          <br>
          <label id="nbr" for="nbr">Nombre de participant :</label>
          <input class="input-field" type="number"   name="Nbr_participant" value=<?php echo $ev["Nbr_participant"];?> placeholder="Nombre de participant..." required>
          <br>
          <label>Lieu de l'événement :</label><textarea  name="Lieu"  rows="5" cols="39"  placeholder="Lieu de l'événement..."><?php echo $ev["Nom"];?></textarea><br>

          <label>Commentaire :</label><textarea  name="Commentaire"  rows="5" cols="39" placeholder="Commentaire..."><?php echo $ev["Commentaire"];?></textarea><br>
         
        
     <br>
    </form>
        <div class="btn" >
          <button id="submit"  name="btnEnvoyerEvent" type="submit">Envoyer</button>
          <button id="submit" name="btnResetEvent" type="reset">Annuler</button>
        </div>
</fieldset>
      </form>
    </div>
    <?php




if(isset($_GET['recherche_event'])){
  $sql = 'select * from evenement where Nom LIKE "%'.$_GET['recherche_event'].'%" and Type LIKE "%'.$_GET['Type_event'].'%"';
  $event=$pdo->prepare($sql);

 
}
else {$event=$pdo->prepare("select * from evenement where ID_event=$id");
}
$event->execute([]);?>

      <form method="POST" action="ajouter_evenement.php">

      <div class="table-wrapper" style="margin-top: 3%;">
      <table class="fl-table">
      <thead>   
      <tr >
          <th>Nom </th>
          <th>Type </th>
          <th>Annee</th>
          <th>Date</th>
          <th>Lieu</th>
          <th>Dépenses</th>
          <th>Nombre de participant</th>
          <th>Commentaire</th>
      </tr>
      </thead>
              
              <tbody>
                  <?php 
                  
                   while ($event1 = $event->fetch()) { ?>
            
            <tr>
              <td><?php echo $event1['Nom']; ?></td>
              <td><?php echo $event1['Type']; ?></td>
              <td><?php echo $event1['Annee']; ?></td>
              <td><?php echo $event1['Date']; ?></td>
              <td><?php echo $event1['Lieu']; ?></td>
              <td ><?php echo $event1['Depense']; ?></td>
              <td><?php echo $event1['Nbr_participant']; ?></td>
              <td><?php echo $event1['Commentaire']; ?></td>
              </tr>
              <?php 
                   }
                }
           ?>
              <tbody>
          </table>
           </div>
        </body>
</html>