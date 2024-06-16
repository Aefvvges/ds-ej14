<?php

require_once 'modelo/provincia.php';
require_once 'modelo/direccion.php';
require_once 'modelo/datosPersona.php';
require_once 'modelo/lineaPrestamo.php';
require_once 'modelo/prestamo.php';

$Provincia = new Provincia();
$Provincia-> Id = 1;
$Provincia-> Descripcion = 'Santa Fe';

$Direccion = new Direccion();
$Direccion-> Id = 1;
$Direccion-> Calle = 'Montevideo';
$Direccion-> Numero = 34;
$Direccion-> Localidad = 'Rosario';
$Direccion-> Provincia = $Provincia;

$DatosPersona = new DatosPersona();
$DatosPersona-> Id = 1;
$DatosPersona-> Nombre = 'Daniel';
$DatosPersona-> Apellido = 'Rodriguez';
$DatosPersona-> Documento = 12456789;
$DatosPersona-> Direccion = $Direccion;

$LineaPrestamo = new LineaPrestamo();
$LineaPrestamo-> Id = 1;
$LineaPrestamo-> Descripcion = 'Personal sola firma';
$LineaPrestamo-> TasaEfectivaMensual = '15%';

$Prestamo = new Prestamo();
$Prestamo-> Id = 1;
$Prestamo-> LineaPrestamo = $LineaPrestamo;
$Prestamo-> DatosPersona = $DatosPersona;
$Prestamo-> FechaAlta = '21/08/2019';
$Prestamo-> CantidadCuotas = 36;
$Prestamo-> MontoCapital = 10000;

$Prestamo-> MostrarDatos();