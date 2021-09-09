<?php

class Repartidor{

    public  $apellidos;
    public  $nombre;
    public  $dni;
    public  $direccion;
    public  $celular;
    public  $fecha_nacimiento;
    public  $especialidad;
    public  $horario;

    public function nombreCompleto(){
        return $this->nombres . " " . $this->apellidos;
    }

    public function saludoCumpleanios(){
        return "Feliz cumpleaños" . $this->nombreCompleto();
    }

}