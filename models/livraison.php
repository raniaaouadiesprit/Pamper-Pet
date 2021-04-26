<?PHP
class livraison{
	private $id_livraison;
	private $destination;
	private $date;
	private $id_commande;
	function __construct($id_livraison,$destination,$date,$id_commande){
		$this->id_livraison=$id_livraison;
		$this->destination=$destination;
		$this->date=$date;
		$this->id_commande=$id_commande;
	}
	
	function getid_livraison(){
		return $this->id_livraison;
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