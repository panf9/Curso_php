<?php

class Cliente{

    public  $apellidos;
    public  $nombre;
    public  $dni;
    public  $direccion;
    public  $celular;
    public  $fecha_nacimiento;
    public  $referencia_directa;
    public  $email;

    public function nombreCompleto(){
        return $this->nombres . " " . $this->apellidos;
    }

    public function saludoCumpleanios(){
        return "Feliz cumpleaños" . $this->nombreCompleto();
    }

}