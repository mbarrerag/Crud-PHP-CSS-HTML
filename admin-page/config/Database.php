<?php
/* Haremos una conexion a una base de datos */
class Database{
    public $host = 'localhost'; // Servidor
    public $user = 'root'; // Usuario de phyMyadmin
    public $pass = ''; //Contraseña de phpMyadmin
    public $db = 'sesiones'; //Base de datos (Nombre)
    public $conexion; 


    function __construct(){
        $this->conexion = $this->connectToDatabase(); /* Asignamos la funcion de conexion */
        return $this -> conexion; /* Me activa la conexion */
    }

    function connectToDatabase(){
        $conexion= mysqli_connect($this->host, $this->user, $this->pass, $this->db);

        if(mysqli_connect_error()){ /* Si hay un error que me lo muestre */
            echo "Tenemos un error de conexion " . mysqli_connect_error();
        }
        return $conexion; /* Me activa la conexion */

}
}
/**Conexion con la base de datos*/
?>