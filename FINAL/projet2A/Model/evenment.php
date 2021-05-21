<?PHP
class Evenment{
	private $id;
	private $nbr_invt;
	private $nom_evn;
	private $date_evn;
	private $image;
	private $type_evn;

	function __construct($nbr_invt,$nom_evn,$date_evn,$image,$type_evn) {
		$this->image=$image;
		$this->nbr_invt=$nbr_invt;
		$this->nom_evn=$nom_evn;
		$this->date_evn=$date_evn;
		$this->type_evn=$type_evn;
	}

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }
	
	function getId(){
		return $this->id;
	}
	function getNbr(){
		return $this->nbr_invt;
	}
	function getNom(){
		return $this->nom_evn;
	}
	function getDate_evn(){
		return $this->date_evn;
	}
		function getType_evn(){
		return $this->type_evn;
}  



	function setNbr($nbr_invt){
		$this->nbr_invt=$nbr_invt;
	}
	function setNom($nom_evn){
		$this->nom_evn;
	}
	function setDate_evn($date_evn){
		$this->date_evn=$date_evn;
	}
function setType_evn($type_evn){
		$this->type_evn=$type_evn;
	}
}

?>