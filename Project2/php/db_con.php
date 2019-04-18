<?php require_once "credenciales.php";

function  DB_conexion(){
$db = mysqli_connect(DB_HOST,DB_USER,DB_PASSWD,DB_DATABASE);
if (!$db)
return "Error in the conexion with the db (".mysqli_connect_errno().
") : ".mysqli_connect_error();
// Establecer la codificación de los datos almacenados ("collation")
mysqli_set_charset($db,"utf32_bin");
return $db;

}

function DB_desconexion($db) {
mysqli_close($db);
}
?>
