<!DOCTYPE html>
<html>
 <head>
	<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
  <script type="text/javascript" src="script.js"></script>
	<title>
 Formulaire de contact Gwenaelle Guezou
	</title>
<meta charset ="utf-8">
<h1 style="font-size:35px;font-weight:bold;font-family:Arial;font-style: oblique">Restons en contact</h1>
</head>
<body>
<div id="debut">
<div class="coordonnees">
  <p> <span style="font-size:20px;font-weight:bold"> Gwenaëlle Guezou </span></p>
  <p> <span style="font-style:italic">Téléphone :</span> 06 12 23 70 85 </p>
  <p> <span style="font-style:italic">Adresse :</span>17 rue Edouard Manet </p>
  <p> 11110 COURSAN </p>
  <p> <span style="font-style:italic">Email :</span> lambertleila@aol.com </p>
  <p><span style="font-style:italic">Réseaux sociaux :</span>

  </p>
</div>
<form method="post" action="traitement.php">
<p>
  <label for="name"> </label>
  <input type="text" name=" nom" placeholder="ex : Dupont" id="name" size="50" required autofocus/>
</p>
  <p>
  <label for="email"> </label>
  <input type="email" name="email" placeholder="entrez ici votre adresse mail"id="email" size="50"required />
</p>
<p>
  <label for="telephone"></label>
  <input type="tel" name="tel" placeholder="vos coordonnées téléphoniques" id="tel" size="50"/>
<p>
  <label for="url"></label>
  <input type="url" name="url" placeholder="entrez votre site ici" id="url" size="50"/>
</p>
<p>
  <label for="requete"> N'hésitez pas à me contacter :) </label><br>
  <textarea name="requete" id="requete" > </textarea>
</p>
<p>
  <input type="submit" value="envoyer"/>
</p>
</form>
</div>

</body>
</html>
