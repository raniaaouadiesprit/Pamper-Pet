<?php

class coupon{

private $code;
private $Valid;
private $pourcentage;



function __construct($code, $Valid,$pourcentage){
     $this->code=$code;
     $this->Valid=$Valid;
     $this->pourcentage=$pourcentage;

   
   
}




function getCode(){
    return $this->code;
}

function getValid(){
    return $this->Valid;
}
function getPourcentage(){
    return $this->pourcentage;
}






function setCode($code){
    $this->code;
}
function setValid($Valid){
    $this->Valid=$Valid;
}
function setPourcentage($pourcentage){
    $this->pourcentage=$pourcentage;
}




}




?>