<?php
/*La empresa de Transporte de Pasajeros “Viaje Feliz” quiere registrar la información referente
 a sus viajes. De cada viaje se precisa almacenar el código del mismo, destino, cantidad máxima de pasajeros y los pasajeros del viaje.

Realice la implementación de la clase Viaje e implemente los métodos necesarios para modificar los atributos de dicha clase
(incluso los datos de los pasajeros). Utilice clases y arreglos  para   almacenar la información correspondiente a los pasajeros.
 Cada pasajero guarda  su “nombre”, “apellido” y “numero de documento”.

Implementar un script testViaje.php que cree una instancia de la clase Viaje y presente un menú que permita cargar la información del viaje,
 modificar y ver sus datos.

Modificar la clase Viaje para que ahora los pasajeros sean un objeto que tenga los atributos nombre,
 apellido, numero de documento y teléfono. El viaje ahora contiene una referencia a una colección de objetos de la clase Pasajero.
  También se desea guardar la información de la persona responsable de realizar el viaje, para ello cree una clase ResponsableV que registre el
   número de empleado, número de licencia, nombre y apellido. La clase Viaje debe hacer referencia al responsable de realizar el viaje.

Implementar las operaciones que permiten modificar el nombre, apellido y teléfono de un pasajero. Luego implementar la 
operación que agrega los pasajeros al viaje, solicitando por consola la información de los mismos. Se debe verificar que el pasajero 
no este cargado mas de una vez en el viaje. De la misma forma cargue la información del responsable del viaje.*/ 
class viaje{
    private $codigo_vuelo;
    private $destino;
    private $cant_maxima;
    private $pasajeros;
    private $responsable;
    

    public function __construct($cod,$dest,$cant,$coleccionPasajeros,$objResponsable){
        $this->codigo_vuelo=$cod;
        $this->destino= $dest;
        $this->cant_maxima= $cant;
        $this->pasajeros=$coleccionPasajeros;
        $this->responsable= $objResponsable;
    }

    //gets
    public function getcodigo_vuelo(){
        return $this->codigo_vuelo;
    }
    public function getdestino(){
        return $this->destino;
    }
    public function getcant_maxima(){
        return $this->cant_maxima;
    }
    public function getpasajeros(){
        return $this->pasajeros;
    }
    public function getresponsable(){
        return $this->responsable;
    }

    //sets

    public function setcodigo_vuelo($codigo){
         $this->codigo_vuelo =$codigo ;
    }
    public function setdestino($destino){
        $this->destino =$destino ;
    }
    public function setcant_maxima($maximo){
        $this->cant_maxima =$maximo;
    }
    public function setpasajeros($coleccionPasajeros){
        $this->pasajeros = $coleccionPasajeros ;
    }
    public function setresponsable($objResponsable){
        $this->responsable=$objResponsable;
    }
    

    public function __tostring(){
        return "\ncodigo de vuelo: ". $this->getcodigo_vuelo()."\n\ndestino del viaje: ".$this->getdestino()."\ncantidad maxima de pasajeros: ". $this->getcant_maxima()."\nlista de pasajeros".$this->mostrar_lista()."\n Datos del resposable: ".$this->getresponsable();
    }
    //muestra la lista de pasajeros
    public function mostrar_lista(){
        $pasajeros = $this->getpasajeros();
        $cantPasajeros=count($pasajeros);
        $cadena =" ";
        for($i=0;$i<$cantPasajeros;$i++ ){
            $datosCompleto= $pasajeros[$i]["nombre"] ." ".$pasajeros[$i]["apellido"]." dni: ".$pasajeros[$i]["documento"]." numero de telefono: ".$pasajeros[$i]["telefono"];
            $cadena= $cadena." \n".$datosCompleto;
        }
        return $cadena;
    }
}

