function verif()
{

	//alert("verifier les champs");
	var idcl = f.IdClient.value;
	if(idcl.length<8){
	alert("Cin 8 chiffres maximum");
	 document.getElementById("sins").addEventListener("click", function(event){
  event.preventDefault()
  window.location.href="inscription.html";
});
	return false;
}
else return true;
}
/* else
 {  
 	 
        var modal = document.getElementById("myModal");
    }*/

// Get the button that opens the modal
//var btn = document.getElementById("sins");

// Get the <span> element that closes the modal
//var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
/*btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
      
 	 }
 	
 event.preventDefault ();
        window.location.href="ajouterClient.html"

}*/

function imprimer(){
	window.print();
}