<?php
include_once ("viaje.php");
include_once("pasajeros.php");
$objPasajeros= new pasajero();
$pasajeros= $objPasajeros->getpasajeros();
$objviaje= new viaje(10001,"madrid",15,$pasajeros);
echo $ojbviaje;
$objviaje->mostrar_lista();
$objPasajeros->otroPasajero("juan","sastre",44516645,2804640560);
$objviaje->setpasajeros($objPasajeros->getpasajeros());
$objviaje->mostrar_lista();

