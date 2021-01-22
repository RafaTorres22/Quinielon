<!DOCTYPE html>
<html lang="es">
    <head>
   <!-- Seccion Head  -->
        <meta charset="UTF-8"/>
        <meta name="description" content="titulo">
        <meta name="keywords" content="HTML5., CSS3, Javascript">
        <meta name="viewport" content="width=device-width, initial scale= 1.0">
        <title>REGISTRO - QUINIELON</title>
        <link href="Estilos/general.css" rel="stylesheet" type="text/css">
    </head>
   <!-- Banner principal de la pagina -->
    <table border="0">
            <tr>
                <td width= "0%"></td>
                <td class="banner"colspan="6"width ="100%"><h1></h1> QUINIELÓN</h1></td>
                <td width= "0%"></td>
            </tr>
    </table>
    <nav>
          <!--Menu de navegacion horizontal en la pagina   -->
          <div class="menu" >
          <a href="index.php">Inicio</a></li>          
          <a href="juegos.php">Juegos</a></li> 
          <a href="noticias.php">Noticias</a></li> 
          <a href="pago.html">Metodos de Pago</a></li> 
          <a href="cuenta.html">Mi cuenta</a></li> 
          <a href="apuestas.html">Quinielas de apuestas</a></li> 
          <a href="acercade.html">Acerca de Nosotros</a></li>
          <a href="contacto.php">Contacto</a></li> 
          <a class = "activo" href="form1.php">Registro</a></li>
          </div>
          <table>
        <div class="esquina_der">
            <a href="logon.php">Iniciar sesion</a>
            </div>
        <td class ="cuerpo" width = "100%">
            <!-- Cuerpo de la pagina -->
            <p2><h2>Formulario de registro</h2></p2>
            <p>Escribe tus datos de usuario en el siguiente formulario </p>
        <!-- Formulario de alta de Usuarios -->
            <form method="POST">
                <p id="isc">
                    <label for="usuario">Usuario: </label>
                    <input name="usuario" type="text" id=usuario maxlenght="32"/>
                </p>
                <p id="isc">
                    <label for="password">Contraseña: </label>
                    <input name="password" type="password" id=password maxlenght="16"/>
                </p>
                <p id="isc">
                    <label for="nombre">Nombre completo: </label>
                    <input name="nombre" type="text" id=nombre maxlenght="64"/>
                </p id="isc">
                <p id="isc">
                    <label for="direccion">Dirección: </label>
                    <input name="direccion" type="text" id=direccion maxlenght="128"/>
                </p>
                <p id="isc">
                    <label for="ciudad">Ciudad: </label>
                    <select name="ciudad" id=ciudad>
                        <option value="Acapulco">Acapulco</option>
                        <option value="Chilpancingo">Chilpancingo</option>
                        <option value="Iguala">Iguala</option>
                        <option value="Taxco">Taxco</option>
                        <option value="Zihuatanejo">Zihuatanejo</option>
                        <option value="Ixtapa">Ixtapa</option>
                        <!-- resto de ciudades... -->
                    </select>
                </p>            
                <p class="iscb">
                    <label for="descripcion">Descripcion Personal : </label><br/>
                    <textarea name="descripcion" id= descripcion rows="4" cols="50"></textarea>
                </p>
                <p2>
                    <input type="checkbox" name="terminos" value="terminos"/>
                    <label for="terminos">Acepto los términos y condiciones de uso</label>
                </p2>
                <p>
                    <input type="submit" value="Enviar"/>
                    <input type="reset" value="Borrar formulario"/>
                </p>
            </form>
            <?php
            //Insercion de datos del formulario en la base de datos
            if($_POST)
            {
                $mysqli = new mysqli("127.0.0.1", "rafa", "12345", "login2", 3306);
                if ($mysqli->connect_errno) 
                {
                    echo "<br>Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                }    
                $usuario= $_REQUEST['usuario'];
                $password= $_REQUEST['password'];
                $nombre= $_REQUEST['nombre'];
                $direccion= $_REQUEST['direccion'];
                $ciudad= $_REQUEST['ciudad'];
                $descripcion= $_REQUEST['descripcion'];
                $query1 = $mysqli->query("INSERT INTO usr (Usuario,Contra,Nombre,Direccion,Ciudad,Descripcion) VALUES ('$usuario','$password','$nombre', '$direccion','$ciudad','$descripcion')");
                        echo ('¡Gracias por registrarse!');   
            }
    ?>    


        </td>
        <td></td> 
        </table>  
    </nav>
    <!-- footer de la pagina -->
        <footer>
            <table>
       <td></td> 
       <td class = "footer" width = 100%> Copyright&copy; 2020 - 
         Página creada por Equipo 3 - Todos los derechos reservados</td>
         <td></td>
        </table>
     </footer> 
     
    </body>
</html>