<?php
include_once ("viaje.php");
include_once("pasajeros.php");

//funcion
function seleccionarOpcion(){

    do{
        echo "\n\n";
        echo "Menú de opciones:\n";
        echo "1) ver datos de vuelo\n";
        echo "2) ver lista de pasajeros\n";
        echo "3) ingresar un nuevo pasajero al vuelo \n";
        echo "4) ver datos de un pasajero\n";
        echo "5) cambiar datos de un pasajero\n";
        echo "6) ver datos del responsable\n";
        echo "7) cambiar datos de el responsable\n";
        echo "8) cambiar datos de vuelo\n";
        echo "9) salir \n";
        echo "Ingrese su opción: ";
        $opcion = trim(fgets(STDIN));

        $opcionValida = false;
        if($opcion >= 1 && $opcion <= 9){
            $opcionValida = true; 
        } else{
            echo("Por favor, seleccione una opcion valida (1 al 8)");
        }
    }while($opcionValida = false);
    return $opcion;
}

//PROGRAMA PRINCIPAL

//datos del vuelo
echo "ingrese codigo de vuelo: ";
$codigo=trim(fgets(STDIN));
echo "ingrese el destino: ";
$destino=trim(fgets(STDIN));
echo "ingrese la cant. maxima de pasajeros: ";
$maximo=trim(fgets(STDIN));
//datos del responsable
echo "ingrese numero de empleado del responsable de vuelo: ";
$numEmpleado=trim(fgets(STDIN));
echo"ingrese el numero de licensia del mismo: ";
$numLicensia=trim(fgets(STDIN));
echo "ingrese el nombre del empleado: ";
$nomEmpleado=trim(fgets(STDIN));
echo "ingrese el apellido del empleado: ";
$apeEmpleado=trim(fgets(STDIN));

//objetos
$objPasajeros= new pasajero();
$pasajeros= $objPasajeros->getpasajeros();
$objviaje= new viaje($codigo,$destino,$maximo,$pasajeros);
do{
$opcion = seleccionarOpcion();
switch ($opcion){
    case 1:
        echo $objviaje;
    break;

    case 2:
        $lista=$objviaje->mostrar_lista();
      echo "\nlista de pasajeros".$lista."\n" ;
    break;   

    case 3:
        echo "ingrese el documento: ";
        $documento = trim(fgets(STDIN));
        $esta=$objPasajeros->estaPasajero($documento);
        if($esta){
            echo"el pasajero ya esta dentro del vuelo, debido a que el documento ya esta asociado a uno";
        }else{
           echo "ingrese el nombre: ";
        $nombre= trim(fgets(STDIN));
        echo "ingrese el apellido: ";
        $apellido= trim(fgets(STDIN));
        echo "ingrese el telefono: ";
        $numero= trim(fgets(STDIN));
        $objPasajeros->otroPasajero($nombre,$apellido,$documento,$numero);
        $objviaje->setpasajeros($objPasajeros->getpasajeros());
        }

    break;  

    
    case 4:
        echo "ingrese el documento del pasajero: ";
        $documento=trim(fgets(STDIN));
        $datos=$objPasajeros->verDatosPasajero($documento);
        if($datos==false){
            echo "el pasajero no esta en este vuelo";
        }else{
            echo $datos;
        }

    break;  

    case 5:

    break;  

    case 6:

    break; 
    
    case 7:

    break; 

    case 8:

    break;
}
}while($opcion!= 9);




/*
echo $objviaje."\n" ;
$lista=$objviaje->mostrar_lista();
echo "\nlista de pasajeros".$lista."\n" ;
$objPasajeros->otroPasajero("juan","sastre",44516645,2804640560);
$objviaje->setpasajeros($objPasajeros->getpasajeros());
$lista= $objviaje->mostrar_lista();
echo "\nlista de pasajeros".$lista."\n";*/


