<?php 
session_start();

if($_POST['action'] == 'crear') {
	crearMascota();
}
 
if($_POST['action'] == 'eliminar') {
	eliminarMascota();
}

if($_POST['action'] == 'editar') {
	editarMascota();
}

function conexion(){
	//Conexion BD	
	$conexion=mysql_connect("localhost", "root", "123");
	$bd=mysql_select_db("perritos");
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////
function crearMascota(){
	// $image = 'subidas/'.$_FILES['image']['name'];
	 echo "blablabla";
	// Obteniendo Datos
	$nombre = $_POST['name']; 
	$id_dueno = $_POST['identification']; 
	$raza = $_POST['type']; 
	$edad = $_POST['age'];
	
	// if ($_FILES['image']["error"] > 0){
 //    	echo "Error: " . $_FILES['image']['error'] . "<br>";
 //    }
 //    else
 //    {
    	
 //  		if(move_uploaded_file($_FILES['image']['tmp_name'],"subidas/" . $_FILES['image']['name'])){echo "entro";}
  	//Conexion BD
	conexion();

	//Consulta
	$consulta = "INSERT INTO mascota (nombre, id_dueno, raza, edad) VALUES ('$nombre','$id_dueno','$raza','$edad');";
	$result = mysql_query($consulta);
	header("Location: ../index.php");
	
	mysql_close();
	}
	
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////
function editarMascota(){
	// Obteniendo Datos
	$id = $_POST['id']; 
	$nombre = $_POST['name']; 
	$id_dueno = $_POST['identification']; 
	$raza = $_POST['type']; 
	$edad = $_POST['age']; 

	//Conexion BD	
	conexion();

	//Consulta
	$actualizacion = "UPDATE mascota SET nombre = '".$nombre."', id_dueno = '".$id_dueno."', raza = '".$raza."',
	edad = '".$edad."'  Where id=".$id;
	$result = mysql_query($actualizacion);
	header("Location: ../index.php?modificado=1");
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////
function eliminarMascota(){
	// Obteniendo Datos
	$id = $_POST['id']; 
	
	//Conexion BD	
	conexion();

	//Consulta
	$actualizacion = "DELETE FROM mascota WHERE id=".$id;
	$result = mysql_query($actualizacion);
	header("Location: ../index.php?modificado=1");
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////
?>