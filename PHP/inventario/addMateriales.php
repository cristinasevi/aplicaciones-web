<?php
/* INSERT INTO participantes (nombre, apellidos, idProvincia, idClub)
VALUES ("Merche", "López", 8, 5) */

// Los que son valores VARCHAR o DATE se ponen con comillas, los que sean tipo INT se ponen sin comillas
// Sólo los campos númericos no llevan comillas ''

session_start();
include("conexion.php");

// Subimos el fichero elegido a la carpeta ficheros
if ($_FILES['f_imagen']['size']!=0)
{
    $destino=dirname(__FILE__)."/ficheros/".$_FILES['f_imagen']['name'];
    move_uploaded_file ($_FILES['f_imagen']['tmp_name'],$destino);
    $ruta="./ficheros/".$_FILES['f_imagen']['name'];
}
else
{
    $ruta="./ficheros/vacia.png";
}

// Creamos la consulta de inserción
$sql= "INSERT INTO materiales (NombreMat, idAula, Cantidad, idProveedor, idMarca, imagen)
VALUES ('$_POST[f_material]', '$_POST[f_aula]', $_POST[f_cantidad], $_POST[f_proveedor], $_POST[f_marca],'$ruta')"; 
// Para fechaAlta se puede poner now() que guarda la fecha y hora exacta y va sin comillas

/*
INSERT INTO nombre_de_la_tabla (todos_los_campos_de_la_tabla_que_se_les_pueda_meter_contenido)
VALUES (información_que_se_guarda_en_cada_campo) --> $_POST[nombre_que_le_has_puesto_en_el_formulario]
el orden tiene que ser el mismo
*/

// Ejecutar la consulta
mysqli_query($conexion, $sql) or die ("Error en la consulta $sql"); // $sql --> para ver el error que tienes

// Cerramos la conexión
mysqli_close($conexion);

// Regresamos a la página de formMateriales.php
header("location:formMateriales.php");
?>