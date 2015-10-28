
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
