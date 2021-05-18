<?PHP
class Article{
    private $Nom_article;
    private $Quantite;
    private $Description_article;
    private $Nom_fabriquant;
    private $NomCategorie;
    private $Photo;
    private $Prix;
    function __construct($Nom_article,$Quantite,$Description_article,$Nom_fabriquant,$NomCategorie,$Photo,$Prix){
        $this->Nom_article=$Nom_article;
        $this->Quantite=$Quantite;
        $this->Description_article=$Description_article;
        $this->Nom_fabriquant=$Nom_fabriquant;
        $this->NomCategorie=$NomCategorie;
        $this->Photo=$Photo;
        $this->Prix=$Prix;
    }

    
    function getNom_article(){
        return $this->Nom_article;
    }
    function getQuantite(){
        return $this->Quantite;
    }
    function getDescription(){
        return $this->Description_article;
    }
    function getFabriquant(){
        return $this->Nom_fabriquant;
    }
    function getNomCategorie(){
        return $this->NomCategorie;
    }
    function getPhoto(){
        return $this->Photo;
    }
        function getPrix(){
        return $this->Prix;
    }

    function setNom_article($Nom_article){
        $this->Nom_article;
    }
    function setQuantite($Quantite){
        $this->Quantite=$Quantite;
    }
    function setDescription($Description_article){
        $this->Description_article;
    }
    function setFabriquant($Nom_fabriquant){
        $this->Nom_fabriquant=$Nom_fabriquant;
    }
    function setNomCategorie($NomCategorie){
        $this->NomCategorie;
    }
    function setPhoto($Photo){
        $this->Photo;
    }
    function setPrix($Prix){
        $this->Prix;
    }




    
}

?>