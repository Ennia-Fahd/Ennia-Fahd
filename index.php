<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
$pdo = new PDO("mysql:host=localhost;dbname=casablanca", "root", "");
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="decorer.css">
<title>Home - Career Center</title>
</head>
<style>

@media only screen and (min-width: 700px) {
  /*NavBar Emsi */
    *{
        margin:0px;
        padding:0px;
        
    }
   .titre_nav{
      position: absolute;
      /* width:100%; */
      z-index: 999;
      top: 28px;
      /* line-break: auto; */
      /* line-break: loose; */
/* line-break: normal; */
/* line-break: strict; */
/* line-break: anywhere; */
      right: 2% ;
      margin-top: -5px;
    }
#navBar{
    position: relative;
    z-index:1;
    background-color:rgba(24,159,92,1);
    
}
#navBar li{
    list-style: none;
} 
#navBar img{
    border-radius: 8px;
    width: 25%;
    height: 10%;
    max-width: 25%;
    margin-left: 10px;
} 

/* 6 buttons */
     *, *::before, *::after {
    box-sizing: border-box;
    
  } 
   
    #HomeSec{
      position: relative;
      opacity: 0.30;
    
  }
 .buttons{
   
    color:green;
    font-size:20px;
    width: 60%;
    height: 100px;
   flex: 0 0 30%;
   margin: 1em 20px;
  }
 .buttons  {
      text-decoration : none;
      color:white

  }
   .buttons:hover {
      cursor : pointer;
      text-decoration : none;
      color: white;

  }


/* CSS */
.buttons{
  display:flex;
 
  flex-wrap:wrap;
}
.button-17 {
z-index:1;
 margin-top: 15%;
 flex: 0 0 30%;
 margin-left: 30px;
   position: relative;
   left: 25%;
   right: 25%;
  align-items: center;
  appearance: none;
  background-color: #fff;
  border-radius: 24px;
  border-style: none;
  box-shadow: rgba(0, 0, 0, .2) 0 3px 5px -1px,rgba(0, 0, 0, .14) 0 6px 10px 0,rgba(0, 0, 0, .12) 0 1px 18px 0;
  box-sizing: border-box;
  color: #3c4043;
  cursor: pointer;
  display: inline-flex;
  fill: currentcolor;
  /*font-family: "Google Sans",Roboto,Arial,sans-serif;*/
  font-size: 20px;
  font-weight: 500px;
  height: 48px;
  justify-content: center;
  letter-spacing: .25px;
  line-height: normal;
  max-width: 100%;
  overflow: visible;
  padding: 2px 24px;
  text-align: center;
  text-transform: none;
  transition: box-shadow 280ms cubic-bezier(.4, 0, .2, 1),opacity 15ms linear 30ms,transform 270ms cubic-bezier(0, 0, .2, 1) 0ms;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  will-change: transform,opacity;
  
}

 .button-17:hover {
  background: #F6F9FE;
  color: grey;
}

 .button-17:active {
  box-shadow: 0 4px 4px 0 rgb(60 64 67 / 30%), 0 8px 12px 6px rgb(60 64 67 / 15%);
  outline: none;
}
 .button-17:focus {
  outline: none;
  border: 2px solid grey;
}

 .button-17:not(:disabled) {
  box-shadow: rgba(60, 64, 67, .3) 0 1px 3px 0, rgba(60, 64, 67, .15) 0 4px 8px 3px;
}

 .button-17:not(:disabled):hover {
  box-shadow: rgba(60, 64, 67, .3) 0 2px 3px 0, rgba(60, 64, 67, .15) 0 6px 10px 4px;
}

 .button-17:not(:disabled):focus {
  box-shadow: rgba(60, 64, 67, .3) 0 1px 3px 0, rgba(60, 64, 67, .15) 0 4px 8px 3px;
}

 .button-17:not(:disabled):active {
  box-shadow: rgba(60, 64, 67, .3) 0 4px 4px 0, rgba(60, 64, 67, .15) 0 8px 12px 6px;
}
 .button-17:disabled {
  box-shadow: rgba(60, 64, 67, .3) 0 1px 3px 0, rgba(60, 64, 67, .15) 0 4px 8px 3px;
}

#cf img {  position:relative;
 
    animation-name: cf3FadeInOut;
    animation-timing-function: ease-in-out;
/* if you only want to cycle a finite amount of times, 
   simply change 'infinite' with # of iterations you need */
    animation-iteration-count: infinite; 
    animation-duration: 6s;
    position:fixed;
    width : 100% ;
 top: -25%;
}

#cf img:nth-of-type(1) {
    animation-delay: 5s;
}

#cf img:nth-of-type(2) {
    animation-delay: 3s;
}

#cf img:nth-of-type(3) {
    /* add some delay for the first picture as well */
    animation-delay: 1s;
}

@keyframes cf3FadeInOut {
    /* distributing times evenly */
    0% {
        opacity: 1;
    }
    25% {
        opacity: 0;
    }
    75% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}


  /*conexion button */

  .bn632-hover {
   
    top: 0px;
  z-index: 1;
  position: absolute;
    width: 160px;
    font-size: 16px;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
    margin: 10px;
    margin-left: 89%;
    height: 55px;
    text-align:center;
    border: none;
    background-size: 300% 100%;
    border-radius: 50px;
 
    -o-transition: all .4s ease-in-out;
    -webkit-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
  }

  .bn632-hover:hover {
    
    background-position: 100% 0;
    -o-transition: all .4s ease-in-out;
    -webkit-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
  }

  .bn632-hover:focus {
    outline: none;
  }

  .bn632-hover.bn22 {
    
   background-image: linear-gradient(
      to right,
      white,
      grey,
      #30dd8a,
      #2bb673
    );
    box-shadow: 0 4px 15px 0 rgba(23, 168, 108, 0.75);

  }

  /* pop up button */
  .bg-modal{
    z-index:1;
    position:fixed;
  top:0px;
  left:0px;
  width:100%;
  height:100%;
  background-color: rgb(0,0,0,0.7);

  }


  .bg-modal .card{
  margin-left:50%;

  }

  /*conexion card*/

  @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap');

  *, *:after, *:before {
    box-sizing: border-box;
  }


  body {
 
    font-family: "DM Sans", sans-serif;
    line-height: 1.5;
   
    /*background: rgb(255,255,255);
    background: linear-gradient(270deg, rgba(255,255,255,1) 12%, rgba(24,159,92,1) 46%);*/
    background: rgb(255,255,255);
background: linear-gradient(270deg, rgba(255,255,255,0.014740930551908282) 0%, rgba(24,159,92,1) 100%);
    /*background: rgb(255,255,255);
background: linear-gradient(270deg, rgba(255,255,255,0.014740930551908282) 0%, rgba(24,159,92,0.6113795860140931) 100%);*/
    overflow:hidden;
  

    
  }

  img {
    max-width: 100%;
    display: block;
  }


  input {
    appearance: none;
    border-radius: 0;
  }

  .card {
      position:  relative;
    /* display: flex; */
    flex-direction: row;
    width: 60%;
    max-width: 425px;
    top :50%;
    transform: translate(-50%,-50%) scale(1);
    background-color: #fff;
    border-radius: 20px;
    box-shadow: 0 10px 20px 0 rgba(#999, .25);
    /* padding: 2rem; */
    /* display : none */
    padding-bottom:2%;
     /*background: linear-gradient(0deg, rgba(255,255,255,1) 2%, rgba(24,159,92,1) 46%); */
  /* background: linear-gradient(0deg, rgba(255,255,255,1) 0%, rgba(24,159,92,1) 100%);*/

  }

  .card-image {
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    overflow: hidden;
    /* margin-bottom: 4%; */
    background-repeat: no-repeat;
    background-size: 100%;
    background-position: 0 5%;
    /* position: relative; */
    background-color:rgba(24,159,92,1);
    padding:4%;

    
  }

  


  .card-form {
    padding: 1rem 1rem 0;
    padding-left:5%;
    padding-right:5%;
    
  }

  .card-form p {
      
    font-size: 1.1em;
    font-weight: 700;
    color: #008000;
    margin-bottom:-3%;
    line-height: 1.222em;
    color: black;
    
  }
  .input {
    display: flex;
    flex-direction: column-reverse;
    position: relative;
    padding-top: 1.5rem;
  }
 

  .input-label {
    color: #8597a3;
    position: absolute;
    top: 1.5rem;
    transition: .25s ease;
    
  }

  .input-field {
    border: 0;
    z-index: 1;
    background-color: transparent;
    border-bottom: 2px solid #eee; 
    font: inherit;
    font-size: 1rem;
    padding: .25rem 0;
        outline:none;

      
  }

  .close {
    position: absolute;
    top: -15px;
    right: 10px;
    padding-left:2px;
    font-size: 40px;
    color: #333;
    transform: rotate(45deg);
    cursor: pointer;


  }


  .action {
    margin-top: 2rem;
  }

  .action-button {
    font: inherit;
    font-size: 1rem;
    padding: 1em;
    width: 100%;
    font-weight: 500;
    background-color:rgba(24,159,92,1);
    border-radius: 6px;
    color: #FFF;
    border: 0;
    
  }

  .action-button:hover {
    cursor: pointer;

  }
  .action-button:active {
    box-shadow: 1px,1px, black;
  }

}

@media only screen and (max-width:700px) {
  #HomeSec .buttons{
    background-color:red;
    color:green;
    font-size:20px;
    width: 60%;
    height: 100px;
   flex: 0 0 30%;
   margin: 1em 20px;
   border: 2px green solid;
   
  }
}


</style>
<body onload="onload()"> 

<nav id="navBar">
    <li>
      <?php if(isset($_GET['Ville'])){
        ?>
        <ul><a href="../../SiteEmsi/admin.php"><img src="../../siteEmsi/Image/career.jpg" alt=""></a></ul>
<?php
      }
       else { ?> <ul><img src="Image/career.jpg" alt=""></ul>
       <?php } ?>
      
    </li>
</nav>
<?php
if(isset($_POST["btnEnvoyerLogin"])){ 
  $users=$pdo->prepare("select * from user where Pseudonyme=?");
 $users->execute([$_POST["Utilisateur"]]);
 $nbr_user=$users->rowCount();
if($nbr_user!=0){
while($user=$users->fetch()){
  if(password_verify($_POST["mot_de_passe"],$user["MDP"])){
   $nom = $user['Nom_Prenom']; ?>
   <H3  class="titre_nav" >Bienvenue  <?php echo $nom ?> !</H3>
   
    <?php 
    $_SESSION['ID_USER']= $user["Id_user"];
    $_SESSION['NOM_PRENOM']= $user["Nom_Prenom"];
    $_SESSION["Ville"]=$user["Ville_CC"];
    $_SESSION["Admin"]=$user["Admin"];
    $_SESSION["DepartementStage"]=$user["DepartementStage"];
    $z=1;
    break;
  }
}

if($user["Admin"]==1){
 ?>
<script>window.location.href ="admin.php";</script> <?php
}


if(isset($z)){ ?>

<?php if($_SESSION["Admin"]==1){
  ?>
    <h1 style="position relative;  text-align:center; z-index:999; color:white; margin-top: 1%;">Bienvenue au Centre de Carrière de <?php echo ucfirst($_GET["Ville"]); ?></h1>

  <div class="buttons">

<button class="button-17"  onclick="window.location.href='./Etudiant/etudiant.php?Ville=<?php echo $_GET['Ville']; ;?>';" >Etudiant</button>
<button class="button-17"  onclick="window.location.href='./Stage/stage.php?Ville=<?php echo $_GET['Ville']; ;?>';">Stage</button>
<button class="button-17"   onclick="window.location.href='./Certificat/certificat.php?Ville=<?php echo $_GET['Ville']; ;?>';">Certificat</button>
<button class="button-17"   onclick="window.location.href='./Offre/offre.php?Ville=<?php echo $_GET['Ville']; ;?>';">Offre d'emploi et stage</button>
<button class="button-17"    onclick="window.location.href='./Entreprise/entreprise.php?Ville=<?php echo $_GET['Ville']; ;?>';">Entreprise</button>
<button class="button-17"  onclick="window.location.href='./acceuil/acceuil_evenement1.php?Ville=<?php echo $_GET['Ville']; ;?>';">Evenement</button>
</div>
<?php
} else {?>
    <h1 style="position relative;  text-align:center; z-index:999; color:white; margin-top: 1%;">Bienvenue au Centre de Carrière de <?php echo ucfirst($_SESSION["Ville"]); ?></h1>

<div class="buttons">
  <?php
if($_SESSION["DepartementStage"]==0){?>
<button class="button-17"  onclick="window.location.href='./Etudiant/etudiant.php';" >Etudiant</button>
<?php } ?>
<?php 

    if($_SESSION["Admin"]==0 and $_SESSION["DepartementStage"]==1){
    ?>
  <button class="button-17"  style=" position:relative; left: 60%;margin-top:20%;" onclick="window.location.href='./Stage/stage.php';">Stage</button>
<?php } 
else {

?>
 <button class="button-17"  onclick="window.location.href='./Stage/stage.php';">Stage</button>
<?php
}
if($_SESSION["DepartementStage"]==0){
  ?>
   <button class="button-17"   onclick="window.location.href='./Certificat/certificat.php';">Certificat</button>
   <button class="button-17"   onclick="window.location.href='./Offre/offre.php';">Offre d'emploi et stage</button>
   <button class="button-17"    onclick="window.location.href='./Entreprise/entreprise.php';">Entreprise</button>
   <button class="button-17"  onclick="window.location.href='./acceuil/acceuil_evenement1.php';">Evenement</button>
<?php }?>
 
  </div>
<?php
}
}
else{
  ?>
  
    <button onclick="ShowMenu()"  class="bn632-hover bn22" id="Connexion">S'identifier</button>
    <div class="buttons">
    <button class="button-17"   onclick="ShowMenu()"  >Etudiant</button>
      <button class="button-17"    onclick="ShowMenu()">Stage</button>
       <button class="button-17"    onclick="ShowMenu()">Certificat</button>
       <button class="button-17"    onclick="ShowMenu()">Offre d'emploi et stage</button>
       <button class="button-17"   onclick="ShowMenu()">Entreprise</button>
       <button class="button-17"    onclick="ShowMenu()" >Evenement</button>
  </div>
    <?php
  }
  
}
else{
?>
    
  <button onclick="ShowMenu()"  class="bn632-hover bn22" id="Connexion">S'identifier</button>
  <div class="buttons">
  <button class="button-17"    onclick="ShowMenu()" onclick="window.location.href='';" >Etudiant</button>
    <button class="button-17"    onclick="ShowMenu()">Stage</button>
     <button class="button-17"    onclick="ShowMenu()">Certificat</button>
     <button class="button-17"    onclick="ShowMenu()">Offre d'emploi et stage</button>
     <button class="button-17"   onclick="ShowMenu()">Entreprise</button>
     <button class="button-17"    onclick="ShowMenu()" >Evenement</button>
</div>
  <?php
}
}
elseif (isset($_SESSION['NOM_PRENOM'])){
  
  ?>

<form method="Post" action="session.php">
 <button class="bn632-hover bn22" name="Deconexion" id="Deconexion">Deconexion</button>
</form>
<?php if($_SESSION["Admin"]==1){
  ?>
      <h1 style="position relative;  text-align:center; z-index:999; color:white; margin-top: 1%;"> Bienvenue au Centre de Carrière de <?php echo ucfirst($_GET["Ville"]); ?></h1>

  <div class="buttons">
<button class="button-17"  onclick="window.location.href='./Etudiant/etudiant.php?Ville=<?php echo $_GET['Ville']; ;?>';" >Etudiant</button>
<button class="button-17"  onclick="window.location.href='./Stage/stage.php?Ville=<?php echo $_GET['Ville']; ;?>';">Stage</button>
<button class="button-17"   onclick="window.location.href='./Certificat/certificat.php?Ville=<?php echo $_GET['Ville']; ;?>';">Certificat</button>
<button class="button-17"   onclick="window.location.href='./Offre/offre.php?Ville=<?php echo $_GET['Ville']; ;?>';">Offre d'emploi et stage</button>
<button class="button-17"    onclick="window.location.href='./Entreprise/entreprise.php?Ville=<?php echo $_GET['Ville']; ;?>';">Entreprise</button>
<button class="button-17"  onclick="window.location.href='./acceuil/acceuil_evenement1.php?Ville=<?php echo $_GET['Ville']; ;?>';">Evenement</button>
</div>
<?php
} else {?>
    <h1 style="position relative;  text-align:center; z-index:999; color:white; margin-top: 1%;">Bienvenue au Centre de Carrière de <?php echo ucfirst($_SESSION["Ville"]); ?></h1>
 <div class="buttons">
  <?php
 if($_SESSION["DepartementStage"]==0){?>
<button class="button-17"  onclick="window.location.href='./Etudiant/etudiant.php';" >Etudiant</button>
<?php } ?>
<?php 

if($_SESSION["Admin"]==0 and $_SESSION["DepartementStage"]==1){
  ?>
<button class="button-17" style=" position:relative; left: 60%;margin-top:20%;" onclick="window.location.href='./Stage/stage.php';">Stage</button>
<?php } 
else {

?>
<button class="button-17"  onclick="window.location.href='./Stage/stage.php';">Stage</button>
<?php
}

if($_SESSION["DepartementStage"]==0){ ?>
   <button class="button-17"   onclick="window.location.href='./Certificat/Certificat.php';">Certificat</button>
   <button class="button-17"   onclick="window.location.href='./Offre/offre.php';">Offre d'emploi et stage</button>
   <button class="button-17"    onclick="window.location.href='./Entreprise/entreprise.php';">Entreprise</button>
   <button class="button-17"  onclick="window.location.href='./acceuil/acceuil_evenement1.php';">Evenement</button>
   <?php }?>
   
</div>
<?php

}
}
else {?>
<button onclick="ShowMenu()" class="bn632-hover bn22" id="Connexion">S'identifier</button>
<div class="buttons">
<button class="button-17"   onclick="ShowMenu()" onclick="window.location.href='';" >Etudiant</button>
  <button class="button-17"    onclick="ShowMenu()">Stage</button>
   <button class="button-17"    onclick="ShowMenu()">Certificat</button>
   <button class="button-17"    onclick="ShowMenu()">Offre d'emploi et stage</button>
   <button class="button-17"   onclick="ShowMenu()">Entreprise</button>
   <button class="button-17"    onclick="ShowMenu()" >Evenement</button>
</div>
<?php }
?>

<section id="HomeSec">

   <div id="cf">
		<img src="./Image/D1.jpg" />
    <img src="./Image/D2.jpg"  />
    <img src="./Image/D3.jpg" >
</div>

  
</section>
  
        <div  class="bg-modal" >
<div class="card" >
  <div style="width: 100%;">
		<div class="card-image" >	
    <img src="Image/career.jpg" alt="">
		</div>
    </div>
   
    <div class="close">+</div>
		<form class="card-form" method="Post">
    <p> Connectez-vous ... </p>
    
			<div class="input">
				<input type="text"  name="Utilisateur" class="input-field" placeholder="Utilisateur..."  required/>
				
			</div>
						<div class="input">
				<input type="password" name="mot_de_passe" class="input-field" placeholder="Mot de passe..." required/>
				
			</div>
			<div class="action">
				<button  class="action-button" name="btnEnvoyerLogin" >Conexion</button>
			</div>
		</form>
</div>
</div>

 
<script>
   
     document.querySelector('.close').addEventListener("click", 
      function() {
	      document.querySelector('.bg-modal').style.display = "none";
        
     });

    

    function onload(){
      	      document.querySelector('.bg-modal').style.display = "none";

    }

    function ShowMenu(){
      document.querySelector('.bg-modal').style.display = "inline"; 
      
    }
    


   
    document.addEventListener('keydown', function(event){
	if(event.key === "Escape"){
		document.querySelector('.bg-modal').style.display = "none";
	}
});

function Failed() {  

  alert ("Mot de passe ou Pseudonyme invalide !");  
}  

</script>

</body>
</html>
