
<html>
    <head>
</head>
<body>

<?php 
$pdo = new PDO("mysql:host=localhost;dbname=dbEtudiant", "root", "");

?>


<form action="#" method="Get">
    Nom d'entreprise : <input type="text" name="recherche_entreprise">
    Nom et Prénom : <input type="text" name="NomPrenom" >
    <input type="submit" name="recherche_session" value="chercher">
</form>
  
    <form action="ajouter_sessionRecrutement.php" method="Post">
    <?php
    $EtudiantSession=$pdo->prepare("select * from Etudiant");
    $EtudiantSession->execute([]);
    ?>
    Nom et Prénom :<select name="NomPrenom" required>
    <option> </option>
    <?php while($EtudiantSession1=$EtudiantSession->fetch()){ ?>
    <option value="<?php echo $EtudiantSession1['id_etd']; ?> "><?php echo $EtudiantSession1['Nom_Prenom']; ?> </option>
    <?php
}
?>
</select>  <br> 
<?php 

    $sql = 'select * from entreprise';
    $entr=$pdo->prepare($sql);
    $entr->execute([]);
    ?>

    Entreprise :<select name="Entreprise" required>
        <option> </option>
        <?php  while($entr2=$entr->fetch()){ ?>
    <option value="<?php echo $entr2["ID_entreprise"]; ?>"><?php echo $entr2["Nom"];?> - <?php echo $entr2["Ville"];?> </option>
  <?php }
  ?>
</select>           <br> 

    Présence :<select name="Presence">
    <option value="" > Pas encore</option>
    <option value="P">Présent</option>
    <option value="A">Absent</option>
</select>           <br> 
    <input type="submit" name="btnEnvoyerSR" value="Envoyer">
  
    </form>
   <?php if(isset($_POST['btnEnvoyerSR'])){
   $verif=$pdo->prepare("select * from  sessionrecrutement");
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
      
        if(isset($_GET['recherche_session'])){
            $sql = 'select * from sessionrecrutement SR,Etudiant E,Entreprise En where  SR.id_entreprise=En.id_entreprise and SR.id_etd=E.ID_etd and En.Nom LIKE "%'.$_GET['recherche_entreprise'].'%" And E.Nom_Prenom "%'.$_GET['NomPrenom'].'%"';
            $SR=$pdo->prepare($sql);
        }
        else {
            $SR=$pdo->prepare("select * from sessionrecrutement SR,Etudiant E,Entreprise En  where SR.id_entreprise=En.id_entreprise and SR.id_etd=E.ID_etd");
        }
        $SR->execute([]);
        echo '<table border="2px" width="40%"><tr><th>Nom et Prénom</th><th>Email</th><th>Ville</th><th>Site</th><th>Filière</th><th>Groupe</th><th>Année de la session</th><th>Présence</th></tr>';
    while ($SR1 = $SR->fetch()) {
        echo '<tr>
        <td >' .$SR1['Nom_Prenom'] . '</td>
<td >' . $SR1['Email'] . '</td>
<td >' . $SR1['Ville'] . '</td>
<td >' . $SR1['Site'] . '</td>
<td>' . $SR1['Filiere'] . '</td>
<td>' . $SR1['Groupe'] . '</td>
<td>' . $SR1['AnneeSession'] . '</td>
<td>' . $SR1['Presence'] . '</td>
</tr>';
    }

    echo '</table>';

?>

</body>
</html>