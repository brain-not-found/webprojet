function test(){
var email = f.email.value;
var nom = f.nom.value;
var prenom = f.prenom.value;
var login = f.login.value;
var typee = f.typee.value;
var age = f.age.value;
var tel = f.tel.value;
var img = f.file.value;


if( email.length== 0)
{
alert("saisir l'E-mail");
}
else if(login.length== 0)
{
alert("saisir le nom d'utilisateur ");	
}
else if(typee.length== 0)
{
alert("saisir le type");	
}
else if(nom.length== 0)
{
alert("saisir le nom");
}
else if( prenom.length== 0)
{
alert("saisir le prenom");	
}
else if(tel.length== 0)
{
alert("saisir le numero telephone ");	
}
else if(age.length== 0)
{
alert("saisir l'age");	
}
else if(img.length== 0)
{
alert("saisir l'image");	
}
else
{
alert('ajout avec succées') ;
f.email.value="";
f.nom.value="";
f.prenom.value="";
f.login.value="";
f.typee.value="";
f.age.value="";
f.tel.value="";
f.file.value="";
}

}