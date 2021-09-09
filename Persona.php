<?php

class Persona {

    public  $apellidos;
    public  $nombre;
    public  $dni;
    public  $direccion;
    public  $celular;
    public  $fecha_nacimiento;

    public function nombreCompleto(){
        return $this->nombre . " " . $this->apellidos;
    }

    public function saludoCumpleanios(){
        return "Feliz cumpleaños" . $this->nombreCompleto();
    }

}