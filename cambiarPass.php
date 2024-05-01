<!DOCTYPE html>
<html lang="es">
<head>
<!-- GRUPO: ALVAREZ, KUS, GODOY.
    Hicimos el login con partes del sistema Login de VaidrollTeam:  
    https://vaidrollteam.blogspot.com/2020/08/login-basico-registrar-datos-ejercicio.html --> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Asistencia</title>
</head>
<body>
    
    <?php 
    $ok=1;
    session_start();

    if( isset($_SESSION["username"])){
        $n=$_SESSION["username"];
        $nom= mb_convert_case($n, MB_CASE_TITLE, "ISO-8859-1");
        $mensaje="El sistema está en construcción. Tenga buen día";
        $img="programadorTrabajando.gif";
        echo "
            <header>
                <h2>Bienbenido ".$nom." </h2>
            </header> 
            
            <nav>
                <a href=\"preparar.php?salir=".$ok."\">Logout</a>
            </nav>";
    }else{
        $mensaje="Para ingresar al sistema precione 'Login' del nav ";
        $img="prgifCompuDurmiendo.gif";
        echo ' 
            <header>
                <h2>Sistema de Asistencia</h2>
            </header> 
            <nav>
                <a href="login.php">Login</a>
            </nav>';

    }

?>
<main>

<?php

if(isset($_GET["okPass"])){
if(isset($_POST["txtDni"])){
    
include('conexion.php');

    $dni= $_POST["txtDni"];
    $queryusuario = mysqli_query($conn,"SELECT * FROM profesores INNER JOIN personas ON profesores.id_per = personas.id_persona WHERE dni ='$dni'");
    $nr = mysqli_num_rows($queryusuario);
    $user=mysqli_fetch_array($queryusuario);//una vez encontrado el usuario se pide su nueva contraseña que se envia en el form2
    $id=$user['id_profesor'];
    if($nr == 1){
        $recuperarPass= "
        
                <label> Ingresar nueva contraseña</label>
                <input type='text' name='txtpassword' id='txtpassword'><br/>
                <input type='hidden' name='txtId' value=".$id."><br/>
                <div class='comboBox1'>
                    <button type='submit' name='btnCamPass'> Guardar </button>&nbsp; <a class='volver' href='preparar.php?volver=1'>Volver</a>";
    }else{
        $recuperarPass= "Solicite ayuda al técnico.";
    }
}
?>

<form method="POST" action=""><!--Este form envia la el dni a la consulta de arriba-->

    <label>Ingrese su dni:</label>            
    <input type="text" name="txtDni"><br/><br/> 
    <div class="comboBox1">
    <button type='submit'> Enviar </button> &nbsp; <a class="volver" href="preparar.php?volver=1">Volver</a>
    </div>
</form>
    <form method="POST" action="preparar.php"><!--form2: Este form envia la la contraseña al preparar.php-->

    <?php    
    echo $recuperarPass;
    ?>
    </form>
<?php    
}
?>

</main>

<footer>
    <br/><br/>
    <h3><a href="www.facebook.com">@asistenciaMantoFB</a></h3>
    <br/><br/>
</footer>
</body>
</html>