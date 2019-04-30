function test(){
var nom = f.nom.value;
var prenom = f.prenom.value;
var datedenaissance = f.datedenaissance.value;
var numerodetelephone = f.numerodetelephone.value;
var adresse = f.adresse.value;
var salaire = f.salaire.value;
var heuredetravail = f.heuredetravail.value;
var datedetravail = f.datedetravail.value;


if( nom.length== 0)
{
alert("saisir le nom de livreur");
}
else if(prenom.length== 0)
{
alert("saisir le prenom de livreur ");	
}
else if(datedenaissance.length== 0)
{
alert("saisir la date de naissance de livreur");	
}
else if(numerodetelephone.length== 0)
{
alert("saisir le  numero de telephone de livreur");
}
else if( adresse.length== 0)
{
alert("saisir l'adresse de livreur");	
}
else if(salaire.length== 0)
{
alert("saisir le salaire de livreur ");	
}
else if(heuredetravail.length== 0)
{
alert("saisir l'heure de travail de livreur");	
}
else if(datedetravail.length== 0)
{
alert("saisir la date de travail de livreur");	
}
else
{
alert('ajout avec succées') ;
f.nom.value="";
f.prenom.value="";
f.datedenaissance.value="";
f.numerodetelephone.value="";
f.adresse.value="";
f.salaire.value="";
f.heuredetravail.value="";
f.datedetravail.value="";
}

}