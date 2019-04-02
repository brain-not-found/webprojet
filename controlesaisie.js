function verifa()
{
	var cin=document.getElementById('CIN').value;
	var nom=document.getElementById('nom').value;
	var prenom=document.getElementById('prenom').value;
	var datedenaissance=document.getElementById('datedenaissance').value;
	var numerodetelephone=document.getElementById('numerodetelephone').value;
	var adresse=document.getElementById('adresse').value;
	var salaire=document.getElementById('salaire').value;
	var heuredetravail=document.getElementById('heuredetravail').value;
	var datedetravail=document.getElementById('datedetravail').value;
			
		
	if(cin.length!==8)
	{
		alert("cin doit être non vide");
		return false;
	}
	if(nom.length==0)
	{
		alert("nom doit être non vide");
		return false;
	}

if(prenom.length==0)
	{
		alert("prenom doit être non vide");
		return false;
	}


if(datedenaissance.length==0)
	{
		alert("date nom valide");
		return false;
	}

	
	if(numerodetelephone.length!==8)
	{
		alert("tel doit être non vide");
		return false;
	}

	if(adresse.length==0)
	{
		alert("adresse doit être non vide");
		return false;
	}


	if(salaire.length==0)
	{
		alert("salaire doit être non vide");
		return false;
	}

	if(heuredetravail.length==0)
	{
		alert("heure doit être non vide");
		return false;
	}
if(datedetravail.length==0)
	{
		alert("date doit être non vide");
		return false;
	}


	}