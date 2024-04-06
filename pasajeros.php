<?php
class pasajero{

 private $pasajeros;

 public function __construct(){
    $this->pasajeros = [
        ["nombre" => "pablo", "apellido" => "ortega", "documento" => 44779803, "telefono" => "299323423"],
        ["nombre" => "marta", "apellido" => "garcia", "documento" => 34567895, "telefono" => "280343445" ],
        ["nombre" => "julia", "apellido" => "muller", "documento" => 34234642, "telefono" => "342345123" ],
        ["nombre" => "esteban", "apellido" => "martinez", "documento" => 34628689, "telefono" => "34213436" ],
        ["nombre" => "david", "apellido" => "jones", "documento" => 54164556, "telefono" => "43534679" ],
        ["nombre" => "lionel", "apellido" => "messi", "documento" => 23214525, "telefono" => "342672323" ],
        ["nombre" => "sol", "apellido" => "vera", "documento" => 42453434, "telefono" => "435372454" ],
      ];
    }
      public function getpasajeros(){
       return $this->pasajeros;
      }
      public function setpasajeros($pasajeros){
        $this->pasajeros=$pasajeros;
      }
      //se ingresa otro pasajero al vuelo
      public function otroPasajero($nombre,$apellido,$documento,$numero){
        $pasajeros=$this->getpasajeros();
        $posicion=count($pasajeros);
        $pasajeros[$posicion]["nombre"]=$nombre;
        $pasajeros[$posicion]["apellido"]=$apellido;
        $pasajeros[$posicion]["documento"]=$documento;
        $pasajeros[$posicion]["telefono"]=$numero;
        $this->setpasajeros($pasajeros);
      }
      //retorna el los datos de un pasajero segun su documento sino esta retorna un false
      public function verDatosPasajero($documento){
        $pasajeros = $this->getpasajeros();
        $cantPasajeros=count($pasajeros);
        for($i=0;$i<$cantPasajeros;$i++ ){
            if($pasajeros[$i]["documento"]==$documento){
                $datosCompleto= $pasajeros[$i]["nombre"] ." ".$pasajeros[$i]["apellido"]." dni: ".$pasajeros[$i]["documento"]." numero de telefono: ".$pasajeros[$i]["telefono"];
                $i=$cantPasajeros +10000;
            }else{
                $datosCompleto=false;
            }
        }
        return $datosCompleto;

      }
      //se compueba si el pasajero esta en el vuelo

      public function estaPasajero($documento){
        $pasajeros= $this->getpasajeros();
        $cantPasajeros=count($pasajeros);

        for($i=0;$i<$cantPasajeros;$i++ ){
            if($pasajeros[$i]["documento"]==$documento){
                $esta=true;
                $i=$cantPasajeros +10000;
            }else{
                $esta=false;
            }
        }
        return $esta;
      }
    
}