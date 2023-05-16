<?php
include_once  ('../config/config.php');
include( '../config/Database.php');


class users{

    public $conexion;
    function __construct() /**Constructor*/
    {
        $db = new Database();
        $this->conexion = $db->connectToDatabase(); //Generar conexion
    }
    function save($params){
        $nombres = $params['nombres'];
        $apellidos = $params['apellidos'];
        $email = $params['email'];
        $celular = $params['celular'];
        $observaciones = $params['observaciones'];
        $durasionSesion = $params['duracionSesion'];
        $fecha = $params['fecha'];

        $insert = "INSERT INTO calendario VALUES (NULL, '$nombres','$apellidos','$email',$celular,'$observaciones','$durasionSesion','$fecha')";
        return mysqli_query($this->conexion, $insert);
     }

     function getAll(){
        $sql = "SELECT * FROM calendario ORDER BY fecha ASC";
        return mysqli_query($this->conexion, $sql);
    }

     function getOne($id){
        $sql = "SELECT * FROM calendario WHERE id = $id";
        return mysqli_query($this->conexion, $sql);   
    }

    function update($params){
        $nombres = $params['nombres'];
        $apellidos = $params['apellidos'];
        $email = $params['email'];
        $celular = $params['celular'];
        $observarciones = $params['observarciones'];
        $duracionSesion = $params['duracionSesion'];
        $fecha = $params['fecha'];
        $id = $params['id'];


        $update = " UPDATE calendario SET nombres='$nombres',apellidos='$apellidos',email='$email',celular='$celular',observarciones='$observarciones',duracionSesion='$duracionSesion', fecha='$fecha' WHERE id=$id ";
        return mysqli_query($this->conexion, $update);
     }
     function delete($id){

        $delete = "DELETE FROM calendario WHERE id = $id";
        return mysqli_query($this->conexion, $delete);
     }
}
?>