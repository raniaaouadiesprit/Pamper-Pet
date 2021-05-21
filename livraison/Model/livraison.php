<?PHP
class livraison{
	private $id_livraison;
	private $id_livreur;
	private $destination;
	private $date;
	private $id_commande;
	function __construct($id_livreur,$destination,$date,$id_commande){

		$this->id_livreur=$id_livreur;
		$this->destination=$destination;
		$this->date=$date;
		$this->id_commande=$id_commande;
	}
	
	function getid_livraison(){
		return $this->id_livraison;
	}
	function getid_livreur(){
		return $this->id_livreur;
	}
	function getdestination(){
		return $this->destination;
	}
	function getdate(){
		return $this->date;
	}

	function getid_commande(){
		return $this->id_commande;
	}

	function setid_livraison($id_livraison){
		$this->id_livraison=$id_livraison;
	}
	function setid_livreur($id_livreur){
		$this->id_livreur=$id_livreur;
	}
	function setdestination($destination){
		$this->destination;
	}
	function setdate($date){
		$this->date=$date;
	}
	function setid_commande($id_commande){
		$this->id_commande=$id_commande;
	}
	
}

?>