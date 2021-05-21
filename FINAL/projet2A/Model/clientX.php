<?PHP
class Client{
    private $NomClient;
    private $PrenomClient;
    private $IdClient;
    private $MdpClient;
    private $AdresseClient;
    private $EmailClient;
    private $TelClient;

    function __construct($NomClient,$PrenomClient,$IdClient,$MdpClient,$AdresseClient,$EmailClient,$TelClient){
        $this->NomClient=$NomClient;
        $this->PrenomClient=$PrenomClient;
        $this->IdClient=$IdClient;
        $this->MdpClient=$MdpClient;
        $this->AdresseClient=$AdresseClient;
        $this->EmailClient=$EmailClient;
        $this->TelClient=$TelClient;
      }
    
    function getNomClient(){
        return $this->NomClient;
    }

    function setNomClient($NomClient){
        $this->NomClient;
    }

function getPrenomClient(){
        return $this->PrenomClient;
    }

    function setPrenomClient($PrenomClient){
        $this->PrenomClient;
    }
function getIdClient(){
        return $this->IdClient;
    }

    function setIdClient($IdClient){
        $this->IdClient;
    }
function getMdpClient(){
        return $this->MdpClient;
    }

    function setMdpClient($MdpClient){
        $this->MdpClient;
    }
function getAdresseClient(){
        return $this->AdresseClient;
    }

    function setAdresseClient($AdresseClient){
        $this->AdresseClient;
    }
function getEmailClient(){
        return $this->EmailClient;
    }

    function setEmailClient($EmailClient){
        $this->EmailClient;
    }
function getTelClient(){
        return $this->TelClient;
    }

    function setTelClient($TelClient){
        $this->TelClient;
    }


}
    


?>