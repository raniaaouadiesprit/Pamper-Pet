<?PHP
class Promotion {
	private $id_promo;
	private $date_debut;
	private $date_fin;
	private $id_produit;
	private $nouv_prix;

	
	function __construct($id_promo,$date_debut,$date_fin,$id_produit,$nouv_prix){
		$this->id_promo=$id_promo;
		$this->date_debut=$date_debut;
		$this->date_fin=$date_fin;
		$this->id_produit=$id_produit;
				$this->nouv_prix=$nouv_prix;

	}
	
	function getId_promo(){
		return $this->id_promo;
	}
	function getDate_debut(){
		return $this->date_debut;
	}
	function getDate_fin(){
		return $this->date_fin;
	}
	function getid_produit(){
		return $this->id_produit;
	}
    function getNouv_prix(){
		return $this->nouv_prix;
	}
	
	
	
	

	function setId_promo($id_promo){
		$this->id_promo=$id_promo;
	}
	function setDate_debut($date_debut){
		$this->date_debut;
	}
	function setDate_fin($Date_fin){
		$this->date_fin=$date_fin;
	}
	function setid_produit($id_produit){
		$this->id_produit=$id_produit;
	}
	function setNouv_prix($nouv_prix){
		$this->nouv_prix=$nouv_prix;
	}
}

?>