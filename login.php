<!DOCTYPE html>
<html lang="es">
<head>
<!-- GRUPO: ALVAREZ, KUS, GODOY.
    Hicimos el login con partes del sistema Login de VaidrollTeam:  
    https://vaidrollteam.blogspot.com/2020/08/login-basico-registrar-datos-ejercicio.html --> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Asistencia Login</title>
</head>

<header>
     <!-- Eliminar la etiqueta h2 del programa. Reemplazar por una barra de navegación en el Header.
                    ¿Armar yo la barra de navegación? Veremos. -->
</header> 
<main>
        <br/> 
        <form method="post" action="preparar.php">

            <label>&#128273; Ingresar usuario</label>            
            <input class="alcance" type="text" name="txtusuario"><br/><br/> 

            <label>&#128274; Ingresar contraseña</label>
            <input class="alcance" type="password" name="txtpassword" id="txtpassword"><br/>

            <div class="comboBox1">
            <input type="checkbox" onclick="verpassword()" >&nbsp; Mostrar contraseña
            </div>
            <br/> <br/>

            <div class="comboBox1">
            <button type="submit" name="btnIngresar"> Ingresar </button> &nbsp; <a class="volver" href="preparar.php?volver=1">Volver</a>
            </div>


            <br/><br/> 
            <a href="cambiarPass.php?okPass=1">¿Olvidó su contraseña?</a>
        </form>

    <script>/*Funcion para mnostrar contraseña*/
    function verpassword(){
        var tipo = document.getElementById("txtpassword");
        if(tipo.type == "password")
        {
            tipo.type = "text";
        }
        else
        {
            tipo.type = "password";
        }
    }
    </script>

</main>