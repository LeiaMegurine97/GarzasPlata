<!DOCTYPE html>
<html>
    <head>
        <meta charset ="utf-8">
        <title> Login </title>
        <link rel="stylesheet" href="CSS/Estilos.css">

    </head>
    <body>
        <div class="loginBox">
            <img class="imagenLogo" src="Imagenes/Garza.png" alt="Logo Garza">
            <h1> LOGIN </h1>
            <form method = "POST" action ="consultas.php">
                <!--NO CUENTA -->
                <label for="NoEmpleado">No. Empleado</label>
                <input name="NoCuentatxt" type="text" placeholder="Ingresa tu No. Empleado">
                
                <!-- NIP -->
                <label for="Nip">NIP</label>
                <input name="Niptxt" type="password" placeholder="Ingresa tu NIP">
                
                <input type="submit" value="Iniciar Sesión">

                <a class="underlineHover" href="#">¿Olvidaste tu NIP?</a><br>

            </form>
        </div>
    </body>
</html>