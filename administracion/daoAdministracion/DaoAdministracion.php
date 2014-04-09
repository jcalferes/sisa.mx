<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoAdministracion
 *
 * @author Usuario
 */
class DaoAdministracion {

    function guardarImagen(Imagenes $img) {
        $sql = "INSERT INTO imagenes(titulo, ruta, caracteristicas) VALUES('" . $img->getTitulo() . "', '" . $img->getRuta() . "', '" . $img->getCaracteristicas() . "')";
        try {
            $datos = mysql_query($sql);
        } catch (Exception $ex) {
            $datos = $ex->getMessage();
        }
        return $datos;
    }

}
