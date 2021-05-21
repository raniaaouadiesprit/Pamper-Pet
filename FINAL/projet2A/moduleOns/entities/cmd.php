<?PHP
class cmd{


	private $id_commande;
	private $id_user;
	private $total;



	function __construct($id_user,$total){
		$this->id_user=$id_user;
		$this->total=$total;

	}
	
	function getid(){
		return $this->id_commande;
	}
	function getuser(){
		return $this->id_user;
	}
	function gettotal(){
		return $this->total;
	}




	function setid($id_commande){
		$this->id_commande=$id_commande;
	}
	function setuser($id_user){
		$this->id_user=$id_user;
	}
	function settotal($total){
		$this->total=$total;
	}
	
}

?>