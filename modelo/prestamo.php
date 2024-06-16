<?php

class Prestamo{
    public $Id;
    public $LineaPrestamo;
    public $DatosPersona;
    public $FechaAlta;
    public $CantidadCuotas;
    public $MontoCapital;

    public function MostrarDatos(){
        echo 'Id Prestamo: '. $this->Id. '<br>';
        echo 'Id Linea Prestamo: '. $this->LineaPrestamo->Id. '<br>';
        echo 'Descripcion Linea Prestamo: '. $this->LineaPrestamo->Descripcion. '<br>';
        echo 'Tasa Efectiva Mensual: '. $this->LineaPrestamo->TasaEfectivaMensual. '<br>';
        echo 'Id Titular: '. $this->DatosPersona->Id. '<br>';
        echo 'Nombre Titular: '. $this->DatosPersona->Nombre. '<br>';
        echo 'Apellido Titular: '. $this->DatosPersona->Apellido. '<br>';
        echo 'Documento Titular: '. $this->DatosPersona->Documento. '<br>';
        echo 'Id Direccion: '. $this->DatosPersona->Direccion->Id. '<br>';
        echo 'Calle Direccion: '. $this->DatosPersona->Direccion->Calle. '<br>';
        echo 'Numero Direccion: '. $this->DatosPersona->Direccion->Numero. '<br>';
        echo 'Localidad: '. $this->DatosPersona->Direccion->Localidad. '<br>';
        echo 'Id Provincia: '. $this->DatosPersona->Direccion->Provincia->Id. '<br>';
        echo 'Descripcion Provincia: '. $this->DatosPersona->Direccion->Provincia->Descripcion. '<br>';
    }
}