
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

      <ul><a href="../../SiteEmsi/admin.php"><img src="../../siteEmsi/Image/career.jpg" alt=""></a></ul>

  </li>
</nav>
<?php
$pdo = new PDO("mysql:host=localhost;dbname=casablanca", "root", "");

   ?>
<form method="Post" action="../../SiteEmsi/session.php">
 <button class="bn632-hover bn22" name="Deconexion" id="Deconexion" style="position: fixed;">Deconexion</button>
</form>


<div  id="PathToFile" style="display:inline-flex;position: relative; top: 14%">        
        <a href="../../SiteEmsi/admin.php">Admin</a><img src="../Image/icons8-more-than-24.png" alt="">
        <a href="../../SiteEmsi/User/user.php?Ville=<?php echo $_GET['Ville'];?>">Utilisateur</a>
        <img src="../Image/icons8-more-than-24.png" alt=""><p style="color: black; text-decoration: none; cursor:default;">Modifier Utilisateur </p>
    </div>


<?php
if(isset($_GET["recherche_user"])){
    ?>
<form id="animated-2" method="get" action="ajouter_user.php">
<div class="container" style="position :relative; z-index:999; top: 120px; left: 50%;">
<?php if(isset($_GET["Ville"])) { ?><input type="hidden" name="Ville" value="<?php echo $_GET["Ville"]; ?>"> <?php } ?>
<input type="text" class="search-txt-input" placeholder="Entrez le nom et prénom de l'utilisateur..." value="<?php echo $_GET["NomPrenom"]; ?>" name="NomPrenom" maxlength="100">
<input type="submit" value="Chercher" name="recherche_user" class="search-button">
</div>
<div style="position :relative; margin-top: 40px; left: 10%;">
<input type="text" class="search-txt-input" placeholder="Entrez la ville..." value="<?php echo $_GET["Ville"]; ?>" name="Ville" maxlength="100">
<input type="submit" value="Chercher" name="recherche_user" class="search-button">
</div>
  </form>
<?php
}
else {
?>
<form id="animated-2" method="get" action="ajouter_user.php">
<div class="container" style="position :relative; z-index:999; top: 120px; left: 23%;">
<?php if(isset($_GET["Ville"])) { ?><input type="hidden" name="Ville" value="<?php echo $_GET["Ville"]; ?>"> <?php } ?>
<input type="text" class="search-txt-input" placeholder="Entrez le nom et prénom de l'utilisateur..."  name="NomPrenom" maxlength="100">
<input type="submit" value="Chercher" name="recherche_user" class="search-button">
</div>
<div style="position :relative; margin-top: 40px; left: 10%;">
<input type="text" class="search-txt-input" placeholder="Entrez la ville..." name="Ville"  maxlength="100">
<input type="submit" value="Chercher" name="recherche_user" class="search-button">
</div>
  </form>
<?php
} 
?>


     
<div class="container" >
      <form id="survey-form" action="ajouter_user.php"   method="Post" enctype="multipart/form-data">
<fieldset>
  <legend>User</legend>
  <label  id="NomPrenom" for="NomPrenom">Nom et Prénom :</label>
          <input class="input-field" type="text"  name="NomPrenom" placeholder="Nom et prénom..." required >
          <br>
          <label  id="Email" for="Email">Email :</label>
          <input class="input-field" type="text"  name="Email" placeholder="Email..." required >
          <br>
          <label for="dropdown">Ville :</label>
          <select class="dropdown" name="Ville" required>
            <option disabled value selected>Selectionnez une ville</option>
   
            <option value="casablanca">Casablanca </option>
            <option value="rabat">Rabat </option>
            <option value="marrakesh">Marrakesh </option>
            <option value="tanger">Tanger</option>
            
          </select>
          <br>
          <label  id="Pseudo" for="Pseudo">Pseudonyme :</label>
          <input class="input-field" type="text"  name="Pseudonyme" placeholder="Pseudonyme..." required >
          <br>
          <label  id="Mdp" for="Mdp">Mot de passe :</label>
          <input class="input-field" type="password"  name="MDP" placeholder="Mot de passe..." required >
          <br>
         <label for="dropdown">Admin :</label>
          <select class="dropdown" name="Admin" required>
            <option disabled value selected>Selectionnez un choix</option>
   
            <option value="1">Oui </option>
            <option value="0">Non </option>
            
          </select>
          <br>
          <label for="dropdown">Departement de Stage :</label>
          <select class="dropdown" name="DepartementStage" required>
            <option disabled value selected>Selectionnez un choix</option>
   
            <option value="1">Oui </option>
            <option value="0">Non </option>
            
          </select>
          <br><br>
    </form>
        <div class="btn" >
          <button id="submit"  name="btnAjouteruser" type="submit">Envoyer</button>
          <button id="submit" name="btnResetuser" type="reset">Annuler</button>
        </div>
</fieldset>
      </form>
    </div>
    <?php

if(isset($_POST['btnAjouteruser'])){

  $NomPrenom=$_POST['NomPrenom'];
  $Ville=$_POST['Ville'];
  $Email=$_POST['Email'];
  $Pseudonyme=$_POST['Pseudonyme'];
  $MDP=password_hash($_POST['MDP'],PASSWORD_DEFAULT);
  $admin=$_POST["Admin"];
  $DepartementStage=$_POST["DepartementStage"]; 
    $userQuery = "insert into user (Nom_Prenom,Email,Ville_CC,Pseudonyme,MDP,Admin,DepartementStage) VALUES ('$NomPrenom','$Email','$Ville','$Pseudonyme','$MDP',$admin,$DepartementStage)";
                    $result =  $pdo->prepare($userQuery);
                    $result->execute([]);
    }


if(isset($_GET['recherche_user'])){
    $sql = 'select * from user where Nom_Prenom LIKE "%'.$_GET['NomPrenom'].'%" and Ville_CC LIKE "%'.$_GET['Ville'].'%"';
    $user=$pdo->prepare($sql);

   
}
else {$user=$pdo->prepare("select * from user");
}
$user->execute([]);?>

       


        <div class="table-wrapper">
        <table class="fl-table">
        <thead>   
        <tr>
      
            <th>Nom et Prénom </th>
            <th>Email </th>
            <th>Ville</th>
            <th>Pseudonyme</th>
            <th>Admin</th>
            <th>Departement de stage </th>
            
        </tr>
        </thead>
                
                <tbody>
                    <?php 
                    
                     while ($user1 = $user->fetch()) { ?>
              
              <tr class="line">
               
                <td><?php echo $user1['Nom_Prenom']; ?></td>
                <td><?php echo $user1['Email']; ?></td>
                <td><?php echo $user1['Ville_CC']; ?></td>
                <td ><?php echo $user1['Pseudonyme']; ?></td>
                <?php 
                if($user1['Admin']== 1){
                    $Admin='Oui';
                }
                else{
                    $Admin='Non';
                }
                if($user1['DepartementStage']== 1){
                    $DepartementStage='Oui';
                }
                else {
                    $DepartementStage='Non';
                }
                ?>
                <td><?php echo $Admin; ?></td>
                <td><?php echo $DepartementStage; ?></td>
                </tr>
                <?php 
                     }
             ?>
                <tbody>
            </table>
             </div>
             
    </form>
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



</html>