<?PHP
class livreur{
	private $id_livreur;
	private $nom;
	private $prenom;
	private $numero;
    private $email;
    private $image;

	private $id_livraison;
	function __construct($nom,$prenom,$email,$numero,$image){

	    $this->email=$email;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->numero=$numero;
		$this->image=$image;
		
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

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
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
	
	
		
}

?>