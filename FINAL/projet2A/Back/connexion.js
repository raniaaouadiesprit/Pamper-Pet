function verif()
{

	//alert("verifier les champs");
	var id_livreur = f1.id_livreur.value;

	var nom = f1.nom.value;
	var prenom = f1.prenom.value;
	var numero = f1.numero.value;
	var id_livraison = f1.id_livraison.value;
	if(id_livreur.length==0 ||nom.length==0 ||prenom.length==0 ||numero.length==0 ||id_livraison.length==0 )
	{
	alert("veuiller remplir les champs");
    event.preventDefault ();
        window.location.href="ajouterLivreur.html"
}
 else
 {  
 	 if (numero.length!=8)  {
 	 	alert("le nombre de chifre doit etre egale a 8");
      event.preventDefault ();
        window.location.href="ajouterLivreur.html"
 	 }
 	 else
 	  { 
        alert(" livreur ajouter");
      
 	 }
 	
 }
 

}