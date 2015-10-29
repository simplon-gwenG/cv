<!DOCTYPE html>
<html>
<head>
  <meta charset ="utf-8">
  </head>
  <body>
<?php

echo "<strong> Voici les données saisies </strong><br/><br/>";

echo "<u> nom </u>: ";
echo $_POST['nom']."<br/>";

echo "<u>adresse mail </u>: ";
echo $_POST['email']."<br/>";

echo "<u> téléphone </u> : ";
echo $_POST['tel']."<br/>";

echo "<u>site web </u> : ";
echo $_POST['url']."<br/>";

echo "<u> message </u> : <br/>";
echo $_POST['requete'];

$reponses = fopen ("reponses.txt", "a+");
fputs ($reponses, "Nom : ".$_POST['nom']."\r\n");
fputs ($reponses, "Adresse mail : ".$_POST['email']."\r\n");
fputs ($reponses, "Numéro de téléphone : ".$_POST['tel']."\r\n");
fputs ($reponses, "site web : ".$_POST['url']."\r\n");
fputs ($reponses, "demande de contact : ".$_POST['requete']."\r\n");
fclose ($reponses);
?>
<br/>
<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'ecodair');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>


<?php
//insertion de variables grâce à une requête préparée
$req = $bdd->prepare('INSERT INTO cv(nom, mail, telephone, web, requete) VALUES(:nom, :mail, :telephone, :web, :requete)');

$req->execute(array(
	'nom' => $nom = $_POST['nom'],
'mail' => $email = $_POST['email'],
	'telephone' => $tel = $_POST['tel'],
	'web' => $url = $_POST['url'],
	'requete' => $requete = $_POST['requete']
	));

echo 'Votre base de données a bien été mise à jour !';
?>
</body>
</html>
