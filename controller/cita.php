<?php 
session_start();

if($_POST['action'] == 'crear') {
	crearMascota();
}
 
if($_POST['action'] == 'eliminar') {
	iniciarSesion();
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
	// Obteniendo Datos
	$user=$_POST['user']; 
	$password=$_POST['password']; 
	$email=$_POST['email']; 

	//Conexion BD
	conexion();

	//Consulta
	$consulta = "INSERT INTO usuario (usuario, contrasenia, email) VALUES ('$user','$password','$email');";
	$result=mysql_query($consulta);
	header("Location: ../index.php");
	$_SESSION["user"] = $user;
	mysql_close();
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////
function editarMascota(){
	// Obteniendo Datos
	$user=$_POST['user']; 
	$password=$_POST['password'];

	//Conexion BD	
	conexion();

	//Consulta
	$actualizacion = "UPDATE usuario SET usuario = '".$user."', contrasenia = '".$password."'  Where id=".$id;
	$result=mysql_query($actualizacion);
	header("Location: ../index.php?modificado=1");
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////
?>