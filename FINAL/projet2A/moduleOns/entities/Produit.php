<?php

class Produit{

private $Image;
private $Nom;
private $Description;
private $Prix;


function __construct(  $Image,$Nom, $Description, $Prix){
    $this->Image=$Image; 

     $this->Nom=$Nom;
     $this->Description=$Description;
     $this->Prix=$Prix;
   
   
}




function getImage(){
    return $this->Image;
}

function getNom(){
    return $this->Nom;
}
function getDescription(){
    return $this->Description;
}
function getPrix(){
    return $this->Prix;
}




function Image($Image){
    $this->Image=$Image;
}


function setNom($Nom){
    $this->Nom;
}
function setDescription($Description){
    $this->Description=$Description;
}

function Prix($Prix){
    $this->Prix=$Prix;
}




}




?>