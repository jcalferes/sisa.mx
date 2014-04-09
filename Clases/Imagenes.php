<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Imagenes
 *
 * @author Usuario
 */
class Imagenes {
    private $idImagen;
    private $ruta;
    private $titulo;
    private $caracteristicas;
    
    
    public function getIdImagen() {
        return $this->idImagen;
    }

    public function getRuta() {
        return $this->ruta;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getCaracteristicas() {
        return $this->caracteristicas;
    }

    public function setIdImagen($idImagen) {
        $this->idImagen = $idImagen;
    }

    public function setRuta($ruta) {
        $this->ruta = $ruta;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setCaracteristicas($caracteristicas) {
        $this->caracteristicas = $caracteristicas;
    }


    
}
