windows.alert=function envoyer(alertMessage) {
	var name = document.getElementById("nom").value;
	var mail = document.getElementById("email").value;
	var telephone = document.getElementById("tel").value;
	var web = document.getElementById("url").value;
	var msg = document.getElementById("requete").value;
	alert("les données envoyées sont: "name", "mail", "telephone", "web", "msg");
};
