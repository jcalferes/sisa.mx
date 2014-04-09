<?php

include '../Clases/Imagenes.php';
include '../DaoConnection/coneccion.php';
include './daoAdministracion/DaoAdministracion.php';
$imagenes = new Imagenes();
$cn = new coneccion();
$imagenes->setTitulo($_POST["titulo"]);
$imagenes->setCaracteristicas($descripcion = $_POST["descripcion"]);
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $file = $_FILES['archivo']['name'];
    if (!is_dir("../images"))
        mkdir("../images/", 0777);
    $resultado = @move_uploaded_file($_FILES["archivo"]["tmp_name"], "../index/img/slides/" . $file);
    $direccion = "img/slides/" . $file;
    $imagenes->setRuta($direccion);
}
try {
    $cn->Conectarse();
    $dao = new DaoAdministracion();
    $datos = $dao->guardarImagen($imagenes);
    $cn->cerrarBd();
} catch (Exception $ex) {
    echo $ex->getMessage();
}
