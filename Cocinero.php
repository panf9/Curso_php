<?php

require_once __DIR__ . "/Persona.php";
require_once __DIR__ . "/Trabajador.php";
require_once __DIR__ . "/Usuario.php";


class Cocinero extends Persona {
    //Con poner la palabra clase extends y la clase padre, todos los métodos y atributos de la clase padre se heredan

    use Trabajador, Usuario; // Hacemos el llamado de los trait que son practicamente clases
                             // Estos sirven para poder hacer la multiple herencia
    public  $especialidad;
    public  $horario;  
    public  $hora_salida;
    public static $hora_entrada = '08:00'; // Creamos una variable estática
   
    
    public function saludoCumpleanios(){
        //Esto se conoce sobre escritura, ya que esta función existe en la clase padre
        return "Feliz cumpleaños al mejor cocinero " . $this->nombreCompleto();
    }

    public function calcularHorasTrabajadas(){
        return self::$hora_entrada . " " . $this->hora_salida;
    }
}