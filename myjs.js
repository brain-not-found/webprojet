/* Controlle de saisir page Commande */

function test1(){

var nom = ff.nom.value;
var prenom = ff.prenom.value;
var numtelephone = ff.numtelephone.value;
var adresse = ff.adresse.value;
var cmd = ff.cmd.value;
var numcommande = ff.numcommande.value;
var etatcommande = ff.etatcommande.value;



if(nom.length== 0)
{
alert("saisir le nom d'utilisateur ");	
}

else if( prenom.length== 0)
{
alert("Saisir votre prenom ");
} 

else if( numtelephone.length== 0)
{
alert("Saisir votre numero telephone ");
} 

else if( adresse.length== 0)
{
alert("Saisir votre adresse");
} 


else if( cmd.length== 0)
{
alert("Saisir votre commande");
} 

else if( numcommande.length== 0)
{
alert("Saisir le numero du commande");
} 

else if( etatcommande.length== 0)
{
alert("Saisir l'état du commande");
}

else
{
alert('Bienvenue') ;
ff.nom.value="";
ff.prenom.value="";
ff.numtelephone.value="";
ff.adresse.value="";
ff.cmd.value="";
ff.numcommande.value="";
ff.etatcommande.value="";
}

}