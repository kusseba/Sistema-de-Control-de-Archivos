<?php 
/* GRUPO: ALVAREZ, KUS, GODOY.
Hicimos el login con partes del sistema Login de VaidrollTeam:  
https://vaidrollteam.blogspot.com/2020/08/login-basico-registrar-datos-ejercicio.html */

include('conexion.php');


if(isset($_POST["btnIngresar"])){
    
    $usu 	= $_POST["txtusuario"];
    $pass 	= $_POST["txtpassword"];



    $queryusuario = mysqli_query($conn,"SELECT * FROM profesores INNER JOIN personas ON profesores.id_per = personas.id_persona WHERE dni ='$usu' and pass = '$pass' ");
    $nr = mysqli_num_rows($queryusuario);  
    $user=mysqli_fetch_array($queryusuario);  

    if ($nr == 1 ){
        session_start();
            $_SESSION["username"]=$user['nombres'];
            header("Location: index.php");
        }else{
            echo "<script>alert('Error. Intententelo nuevamente.');window.location= 'login.php'</script>";
        }

}

if(isset($_GET["salir"])){
    session_start();
    session_destroy();
    header("Location:index.php");
}

if(isset($_POST["btnCamPass"])){

    $pass 	= $_POST["txtpassword"];
    $id 	= $_POST["txtId"];



    $queryusuario = mysqli_query($conn,"UPDATE profesores SET pass = '$pass'  WHERE  id_profesor='$id'");

    if ($bandera=$queryusuario){
            echo "<script>alert('Se restauró su contraseña.');window.location= 'login.php'</script>";
        
        }else{
            echo "<script>alert('Error. Intententelo nuevamente.');window.location= 'cambiarPass.php'</script>";
        }
}

if(isset($_GET["volver"])){
    header('Location:index.php');
}
?>