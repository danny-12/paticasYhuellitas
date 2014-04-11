<?php 
session_start();

if($_POST['action'] == 'crear') {
	crearUsuario();
}

if($_POST['action'] == 'iniciar') {
	iniciarSesion();
}

if($_POST['action'] == 'editar') {
	editarCuenta();
}

if($_GET['action'] == 'cerrar') {
	cerrarSesion();
}

function conexion(){
	//Conexion BD	
	$conexion=mysql_connect("localhost", "root", "123");
	$bd=mysql_select_db("perritos");
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////
function crearUsuario(){
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
function iniciarSesion(){
	// Obteniendo Datos
	$user = $_POST['user']; 
	$password = $_POST['password']; 

	//Conexion BD	
	conexion();

	//Consulta
	$verificacion = "SELECT * FROM usuario Where usuario = '".$user."' AND contrasenia = '".$password."' ";
	$result = mysql_query($verificacion);

	if(mysql_num_rows($result) > 0){
		$row = mysql_fetch_array($result);
		$_SESSION['id'] = $row[0];	
		$_SESSION['user'] = $user;
		header("Location: ../index.php");
	}

	else {
		header("Location: ../index.php?error=1");
	}

	mysql_close();
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////
function editarCuenta(){
	// Obteniendo Datos
	$id = $_POST['id'];
	$user = $_POST['user']; 
	$password = $_POST['password'];
	
	//Conexion BD	
	conexion();

	//Consulta
	$actualizacion = "UPDATE usuario SET usuario = '".$user."', contrasenia = '".$password."'  Where id =".$id;
	$result=mysql_query($actualizacion);
	header("Location: ../index.php?modificado=1");
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////
function cerrarSesion(){
	unset($_SESSION["id"]);	
	unset($_SESSION["user"]);
	session_destroy();
	header("Location: ../index.php");
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////
?>