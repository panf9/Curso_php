<?php

require_once __DIR__ . "/Persona.php";

class Cocinero extends Persona {
    //Con poner la palabra clase extends y la clase padre, todos los métodos y atributos de la clase padre se heredan

    public  $especialidad;
    public  $horario;  
    public static $hora_entrada = '08:00'; // Creamos una variable estática
    
    public function saludoCumpleanios(){
        //Esto se conoce sobre escritura, ya que esta función existe en la clase padre
        return "Feliz cumpleaños al mejor cocinero " . $this->nombreCompleto();
    }

}