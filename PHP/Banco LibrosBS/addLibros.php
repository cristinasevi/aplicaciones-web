<?php
/* INSERT INTO participantes (nombre, apellidos, idProvincia, idClub)
VALUES ("Merche", "López", 8, 5) */

// Los que son valores VARCHAR o DATE se ponen con comillas, los que sean tipo INT se ponen sin comillas
// Sólo los campos númericos no llevan comillas ''

session_start();
include("conexion.php");

// Subimos el fichero elegido a la carpeta ficheros
if ($_FILES['f_portada']['size']!=0)
{
    $destino=dirname(__FILE__)."/ficheros/".$_FILES['f_portada']['name'];
    move_uploaded_file ($_FILES['f_portada']['tmp_name'],$destino);
    $ruta="./ficheros/".$_FILES['f_portada']['name'];
}
else
{
    $ruta="./ficheros/vacia.png";
}

// Creamos la consulta de inserción
$sql= "INSERT INTO libros (isbn, titulo, idModulo, idEditorial, idUsuario, precio, vendido, comentarios, imagenportada)
VALUES ('$_POST[f_isbn]', '$_POST[f_titulo]', $_POST[f_idmodulo], $_POST[f_ideditorial], '$_SESSION[usu]', $_POST[f_precio], $_POST[f_vendido], '$_POST[f_comentarios]', '$ruta')"; 
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

// Regresamos a la página de formLibros.php
header("location:FormLibros.php");
?>