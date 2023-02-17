<!DOCTYPE html>
<html>
    <head>
        <meta charset ="utf-8">
        <title> Login </title>
        <link rel="stylesheet" href="CSS/login.css">

    </head>
    <body>
        <div id="contenedor">
            <div class="loginBox">
                <img class="imagenLogo" src="Imagenes/Garza.png" alt="Logo Garza">
                <h1> LOGIN </h1>
                <form method = "POST" action ="consultas.php">
                    <!--NO CUENTA -->
                    <label for="NoEmpleado">No. Empleado</label>
                    <input name="NoCuentatxt" type="text" onkeypress="return onlyNumberKey(event)" minlegth="6" maxlength="6" placeholder="Ingresa tu No. Empleado">
                    
                    <!-- NIP -->
                    <label for="Nip">NIP</label>
                    <input name="Niptxt" type="password" onkeypress="return onlyNumberKey(event)" minlegth="4" maxlength="4" placeholder="Ingresa tu NIP">
                    
                    <input type="submit" value="Iniciar Sesión">

                    <a class="underlineHover" href="#">¿Olvidaste tu NIP?</a><br>

                </form>
            </div>
        </div>

        <script>
        function onlyNumberKey(evt) {
              
            // Only ASCII character in that range allowed
            var ASCIICode = (evt.which) ? evt.which : evt.keyCode
            if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                return false;
            return true;
        }
        </script>
        <script>
            function detailssubmit() {
                alert("Your details were Submitted");
            }
        </script>

    </body>
</html>