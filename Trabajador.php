<?php

trait Trabajador {

    public $costo_hora;
    public $horas_diarias;

    public function calcularSueldo(){

        return $this->costo_hora * $this->horas_diarias * 30;
    }
}