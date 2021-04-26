<?PHP
class livreur{
	private $id_livreur;
	private $nom;
	private $prenom;
	private $numero;
	private $id_livraison;
	function __construct($id_livreur,$nom,$prenom,$numero,$id_livraison){
		$this->id_livreur=$id_livreur;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->numero=$numero;
		$this->id_livraison=$id_livraison;
	}
	
	function getid_livreur(){
		return $this->id_livreur;
	}
	function getnom(){
		return $this->nom;
	}
	function getprenom(){
		return $this->prenom;
	}

	function getnumero(){
		return $this->numero;
	}

	function getid_livraison(){
		return $this->id_livraison;
	}

	function setid_livreur($id_livreur){
		$this->id_livreur=$id_livreur;
	}
	function setnom($nom){
		$this->nom=$nom;
	}
	function setprenom($prenom){
		$this->prenom=$prenom;
	}
	function setnumero($numero){
		$this->numero=$numero;
	}
	
	function setid_livraison($id_livraison){
		$this->id_livraison=$id_livraison;
	}
		
}

?>