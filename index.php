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
    session_start();

    if( isset($_SESSION["username"])){
        $n=$_SESSION["username"];
        $nom= mb_convert_case($n, MB_CASE_TITLE, "ISO-8859-1");/*pone en formato Titulo a la variable string*/
        $mensaje="El sistema está en construcción. Tenga buen día";
        $img="programadorTrabajando.gif";
        echo "
            <header>
                <h2>Bienbenido ".$nom." </h2>
            </header> 
            
            <nav>
                <a href='preparar.php?salir=1'>Logout</a>
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
    <h2><?php echo $mensaje; ?></h2>
    <img src="<?php echo $img; ?>" alt="<?php echo $img; ?>">
</main>

<footer>
    <br/><br/>
    <h3><a href="www.facebook.com">@asistenciaMantoFB</a></h3>
    <br/><br/>
</footer>
</body>
</html>