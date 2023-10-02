
<html>
    <head>
</head>
<body>

<?php 
$pdo = new PDO("mysql:host=localhost;dbname=dbEtudiant", "root", "");

?>


<form action="#" method="Get">
    Nom et Prénom : <input type="text" name="NomPrenom" >
    Nom du Séminaire : <input type="text" name="Sem" >
    <input type="submit" name="chercher_Sem" value="chercher">
     
</form>

  
    <form action="ajouter_seminaire.php" method="Post">
    Nom du Séminaire : <input type="text" name="NomSem"> <br>
    <?php
    $EtudiantSem=$pdo->prepare("select * from Etudiant");
    $EtudiantSem->execute([]);
    ?>
    Nom et Prénom :<select name="NomPrenom" required>
    <option> </option>
    <?php while($EtudiantSem1=$EtudiantSem->fetch()){ ?>
    <option value="<?php echo $EtudiantSem1['id_etd']; ?> "><?php echo $EtudiantSem1['Nom_Prenom']; ?> </option>
    <?php
}
?>
</select>  <br> 

Nombre de participant : <input type="number" name="Nbr_sem">
    <br>
Année de la session : <select name="SessionDate" required>
        <option> </option>
        <?php for($i=2000;$i<=Date ("Y");$i++)
        { ?>
        <option value="<?php echo $i; ?>"> <?php echo $i; ?> </option> 
<?php } ?>
        </select> <br>

    <input type="submit" name="btnEnvoyerAjouterSR" value="Envoyer">
    <input type="reset" name="btnResetAjouterSR" value="Annuler">
    </form>
   <?php if(isset($_POST['btnEnvoyerAjouterSR'])){
   $verif=$pdo->prepare("select * from seminaire ");
   $verif->execute();
   
   $exist=false; 
  while($test=$verif->fetch()){
      if($test["id_etd"]==$_POST["NomPrenom"] and $test["id_entreprise"]==$_POST["Entreprise"]){
          $exist=true;
          break;
      }
   }
   if($exist){
      echo ' Cet etudiant a déjà assisté à cette session se recrutement !';
   }
   else {
     $entr=$pdo->prepare("insert into sessionrecrutement(id_etd,id_entreprise,AnneeSession,Presence) values(?,?,?,?)");
     $entr->execute([$_POST["NomPrenom"],$_POST['Entreprise'],$_POST['SessionDate'],$_POST['Presence']]);
   }
}

   ?>

<?php
      
        if(isset($_GET['chercher_Sem'])){
            $sql = 'select * from seminaire sem,etudiant etd where etd.Nom_Prenom  LIKE "%'.$_GET['NomPrenom'].'%" and sem.Nom LIKE "%'.$_GET['Sem'].'%" and etd.ID_etd=sem.id_etd';
            $etd_sem=$pdo->prepare($sql);
        }
        else {$etd_sem=$pdo->prepare("select * from seminaire sem,etudiant etd where etd.ID_etd=sem.id_etd");
        }
        $etd_sem->execute([]);
        echo '<form action="Seminaire.php" method="post"><table border="2px" width="100%"><tr><th><input type="checkbox" class="checkall"></th><th>Nom et Prénom</th><th>Email</th><th>Filiere</th><th>Ville</th><th>Site</th><th>Groupe</th><th>Nom du Seminaire</th><th>Année</th><th>Nombre de participant</th></tr>';
    while ($etd_sem1= $etd_sem->fetch()) {
        echo '<tr>
        <td><input class="po_status" type="checkbox"  name="row-check[]" value="'.$etd_sem1["id_sem"].'"></td>
        <td>' . $etd_sem1["Nom_Prenom"] . '</td>
        <td>' . $etd_sem1["Email"] . '</td>
        <td>' . $etd_sem1["Ville"] . '</td>
<td>' . $etd_sem1["Filiere"] . '</td>
<td>' . $etd_sem1["Site"] . '</td>
<td >' . $etd_sem1["Groupe"] . '</td>
<td >' . $etd_sem1["Nom"] . '</td>
<td >' . $etd_sem1["AnneeSem"] . '</td>
<td >' . $etd_sem1["Nbr_etd"] . '</td>';
}
    

    echo '</tr></table><input type="submit" id="btnsupprimersem" name="supprimer_sem" value="supprimer">
    <input type="submit" id="btnmodifiersem" name="modifier_sem" value="Modifier"></form>';


    ?>


</body>
</html>