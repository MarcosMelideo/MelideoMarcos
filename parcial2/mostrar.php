<?php
require_once 'clases/Profesor.php';
require_once 'clases/Alumno.php';
require_once 'clases/funciones.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$materia = $_POST['materia'];

$nombre_a = $_POST['nombre_a'];
$apellido_a = $_POST['apellido_a'];
$edad_a = $_POST['edad_a'];
$materia_a = $_POST['materia_a'];

$profesor = new Profesor ($nombre, $apellido, $edad);
$profesor->nombre_completo();

$alumno = new Alumno ($nombre_a, $apellido_a, $edad_a);
$alumno->nombre_completo();

$mostrar = new mostrar ();
$mostrar->diferencia_edad($edad, $edad_a);
$mostrar->comparar_materia ($materia, $materia_a);
echo '<br> <br> año nacimiento alumno: ';
$mostrar->año_nacimiento ($edad);
echo '<br> <br> año nacimiento profesor: ';
$mostrar->año_nacimiento ($edad_a);
?>