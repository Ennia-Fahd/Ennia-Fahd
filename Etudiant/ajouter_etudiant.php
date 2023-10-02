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
  overflow: auto;
 
        background: rgb(187,191,197);
        background: linear-gradient(180deg, rgba(187,191,197,0.6702031154258579) 55%, rgba(255,255,255,0.014740930551908282) 100%);
overflow-x: auto;
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
        <a href="../../SiteEmsi/index.php?Ville=<?php echo $_GET["Ville"];?>">Accueil Centre de Carrière <?php echo ucfirst($_GET["Ville"]); ?></a> <img  src="../Image/icons8-more-than-24.png" alt="">
        <a href="../../SiteEmsi/Etudiant/Etudiant.php?Ville=<?php echo $_GET["Ville"];?>">Etudiant</a> 
        <?php
       }
       else {
        ?>
<a href="../../SiteEmsi/index.php">Accueil</a> <img  src="../Image/icons8-more-than-24.png" alt="">
<a href="../../SiteEmsi/Etudiant/Etudiant.php">Etudiant</a> 

    <?php
       }
       ?>
        <img src="../Image/icons8-more-than-24.png" alt=""><p style="color: black; text-decoration: none; cursor:default;" >Ajouter Etudiant</p>
    </div>
    
<?php
if(!empty($_GET["recherche_nomprenom"])){
    ?>
<div class="container" >
<form id="animated-2" method="get" action="ajouter_etudiant.php" style="position:relative; top: 70px; left:35%;">
<?php if(isset($_GET["Ville"])) { ?><input type="hidden" name="Ville" value="<?php echo $_GET["Ville"]; ?>"> <?php } ?>
    <input type="text" class="search-txt-input" placeholder="Entrez le nom et prénom..." value="<?php echo $_GET["recherche_nomprenom"];?>" name="recherche_nomprenom" maxlength="100">
    <input type="submit" value="Chercher" class="search-button">
  </form>
</div>
<?php } 
else {
?>
<div class="container" >
<form id="animated-2" method="get" action="ajouter_etudiant.php" style="position:relative; top: 70px; left:35%;">
<?php if(isset($_GET["Ville"])) { ?><input type="hidden" name="Ville" value="<?php echo $_GET["Ville"]; ?>"> <?php } ?>
    <input type="text" class="search-txt-input" placeholder="Entrez le nom et prénom..." name="recherche_nomprenom" maxlength="100">
    <input type="submit" value="Chercher" class="search-button">
  </form>
</div>
<?php

}

if(isset($_POST['btnEnvoyerEtudiant'])){
   
    $entr=$pdo->prepare("insert into Etudiant(Nom_Prenom,Email,Ville,Site,Filiere,Groupe,Classement) values(?,?,?,?,?,?,?)");
    $entr->execute([$_POST['NomPrenom'],$_POST['Email'],$_SESSION["Ville"],$_POST['Site'],$_POST['Annee'].$_POST['Filiere'],'G'.$_POST['Groupe'],$_POST['Classement']]);
  }
  ?>
     



    
<div class="container" style="background:transparent;">
      <?php
if(isset($_GET["Ville"])){
?>
      <form id="survey-form" action="ajouter_etudiant.phpVille=<?php echo $_GET['Ville']; ?>" method="Post">



<?php
}
else {
    ?>
      <form id="survey-form" action="ajouter_etudiant.php" method="Post">


<?php
}
?>   
<fieldset>
  <legend>Etudiant</legend>

          <label  id="NomPrenom" for="NomPrenom">Nom et Prénom :</label>
          <input class="input-field" type="text" id="name" name="NomPrenom"  placeholder="entrez le nom et prénom..." required autofocus>

          <br>
          <label id="email"  for="email"> Email :</label>
          <input class="input-field" type="email" id="email" name="Email" placeholder="Email de l'étudiant.." required>
          <br>
         
          <label for="dropdown">Site :</label>
     
          <select id="dropdown" name="Site" required>
            <option disabled value selected>Selectionnez un site</option>
        <?php 
        if($_SESSION["Ville"]=="casablanca"){
?>
    <option value="Maarif">Maarif</option>
    <option value="Oranger">Oranger</option>
    <option value="Centre">Centre</option>
    <option value="Moulay youssef">Moulay youssef</option>
   
  <?php } ?>
  <?php 
  if($_SESSION["Ville"]=="marrakesh"){
?>
    <option value="Gueliz">Gueliz</option>
    <option value="Centre">Centre</option>
   
  <?php } ?>
  <?php 
  if($_SESSION["Ville"]=="rabat"){
?>
    <option value="Agdal 1">Agdal 1</option>
    <option value="Agdal 2">Agdal 2</option>
    <option value="Bouregreg">Bouregreg</option>
    <option value="Centre 1">Centre 1</option>
   
  <?php }
   ?>

<?php 
  if($_SESSION["Ville"]=="rabat"){
?>
    <option value="Tanger">Tanger</option>
   
  <?php }
   ?>
          </select>
         
        <br>

        <label for="dropdown">Année :</label>
       
          <select id="dropdown" name="Annee" required>
            <option disabled value selected>Selectionnez une Année</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    
          </select>
          <br>
          <label for="dropdown">Filière :</label>
          <select id="dropdown" name="Filiere" required>
            <option disabled value selected>Selectionnez une Filière</option>
            <option value="AP">AP</option>
    <option value="IIR">IIR</option>
    <option value="GC">GC</option>
    <option value="IFA">IFA</option>
    <option value="GI">GI</option>
    <option value="IAII">IAII</option>
    
          </select>
         
        <br>

        
          <label id="Groupe"  for="Groupe"> Groupe :</label>
          <input class="input-field" type="number" id="Groupe" name="Groupe" placeholder="Groupe de l'étudiant.." required>
          <br>
          <label id="Classement"  for="Classement"> Classement :</label>
          <input class="input-field" type="number" id="Classement" name="Classement" placeholder="Classement de l'étudiant.." required>
          <br>
       
         
        <br>

        <div class="btn" style="margin-top: 10px;">
          <button id="submit" name="btnEnvoyerEtudiant" type="submit">Envoyer</button>
          <button id="submit" name="btnResetEtudiant" type="reset">Annuler</button>
        </div>
</fieldset>
      </form>
    </div>

    <?php

 
//exporter
        if(isset($_GET['recherche_nomprenom'])){
            $sql = 'select * from etudiant where Nom_Prenom LIKE "%'.$_GET['recherche_nomprenom'].'%"';
            $etd=$pdo->prepare($sql);
        }
        else {
            $etd=$pdo->prepare("select * from etudiant");
        }
        $etd->execute([]);?>
       
       <div class="table-wrapper">
        <table class="fl-table">
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
            



</html>
