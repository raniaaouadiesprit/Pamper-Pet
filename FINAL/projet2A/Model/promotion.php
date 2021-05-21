<?PHP
class Promotion {
	private $id_promo;
	private $date_debut;
	private $date_fin;
	private $idArticle;
	private $nouv_prix;

	
	function __construct($date_debut,$date_fin,$idArticle,$nouv_prix){

		$this->date_debut=$date_debut;
		$this->date_fin=$date_fin;
		$this->idArticle=$idArticle;
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
	function getidArticle(){
		return $this->idArticle;
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
	function setidArticle($idArticle){
		$this->idArticle=$idArticle;
	}
	function setNouv_prix($nouv_prix){
		$this->nouv_prix=$nouv_prix;
	}
}

?>