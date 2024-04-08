<?php
class responsableV{
    private $numeroEmpleado;
    private $numeroLicencia;
    private $nombreResponsable;
    private $apellidoResponsable;

    public function __construct($numEmpleado,$numLicencia,$nomEmpleado,$apeEmpleado){
        $this->numeroEmpleado=$numEmpleado;
        $this->numeroLicencia=$numLicencia;
        $this->nombreResponsable=$nomEmpleado;
        $this->apellidoResponsable=$apeEmpleado;
    }
    public function getnumeroEmpleado(){
        return $this->numeroEmpleado;
    }

    public function getnumeroLicencia(){
        return $this->numeroLicencia;
    }   
    public function getnombreResponsable(){
        return $this->nombreResponsable;
    }   
    public function getapellidoResponsable(){
        return $this->apellidoResponsable;
    }   

    public function setnumeroEmpleado($numEmpleado){
        $this->numeroEmpleado=$numEmpleado;
    }
    public function setnumeroLicencia($numLicencia){
        $this->numeroLicencia=$numLicencia;
    }
    public function setnombreResponsable($nomEmpleado){
        $this->nombreResponsable=$nomEmpleado;
    }

    public function setapellidoResponsable($apeEmpleado){
        $this->apellidoResponsable=$apeEmpleado;
    }

    public function __tostring(){
        return "\nNumero de empleado: ".$this->getnumeroEmpleado(). "\nNumero de licencia: ". $this->getnumeroLicencia(). "\nNombre y apellido del responsable: ". $this->getnombreResponsable()." ".$this->getapellidoResponsable();
    }

   
}