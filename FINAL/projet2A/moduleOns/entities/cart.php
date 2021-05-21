<?PHP
class cart{


	private $id;
	private $p_id;
	private $ip_add;
	private $user_id;
	private $qty;
	private $image;




	function __construct($id,$p_id,$ip_add,$user_id,$qty,$image){
		$this->id=$id;
		$this->p_id=$p_id;
		$this->ip_add=$ip_add;
		$this->user_id=$user_id;	
    	$this->qty=$qty;
    	$this->image=$image;
	
	}
	
	function getId(){
		return $this->id;
	}
	function getIdProd(){
		return $this->p_id;
	}
	function getIpAdd(){
		return $this->ip_add;
	}
	function getIdUser(){
		return $this->user_id;
	}
	function getQuantity(){
		return $this->qty;
	}
	function getImage(){
		return $this->image;
	}

	function setId($id){
		$this->id=$id;
	}
	function setIdProd($p_id){
		 $this->p_id=$p_id;
	}
	function setIpAdd($ip_add){
		 $this->ip_add=$ip_add;
	}
	function setIdUser($user_id){
		 $this->user_id=$user_id;
	}
	function setQuantity($qty){
		 $this->qty=$qty;
	}
	function setImage($Image){
		 $this->Image=$Image;
	}
	
}

?>