<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <meta name="description" content="titulo">
        <meta name="keywords" content="HTML5., CSS3, Javascript">
        <title>CONTACTO - QUINIELON</title>
        <link href="Estilos/general.css" rel="stylesheet" type="text/css">
    </head>
    <table border="0">
            <tr>
                <td width= "0%"></td>
                <td class="banner"colspan="6"width ="100%"><h1></h1> QUINIELÓN</h1></td>
                <td width= "0%"></td>
            </tr>
    </table>
    <nav>
           
          <div class="menu" >
          <a href="index.php">Inicio</a></li>          
          <a href="juegos.php">Juegos</a></li> 
          <a href="noticias.php">Noticias</a></li> 
          <a href="pago.html">Metodos de Pago</a></li> 
          <a href="cuenta.html">Mi cuenta</a></li> 
          <a href="apuestas.html">Quinielas de apuestas</a></li> 
          <a href="acercade.html">Acerca de Nosotros</a></li>
          <a class = "activo" href="contacto.php">Contacto</a></li> 
          <a href="form1.php">Registro</a></li>
          </div>
          <table>   
        <td class ="cuerpo" width = "100%">
            <h1>Contacto</h1>
            Buzon de Quejas y Sugerencias<br>
            <div >
            <form method="post">
            <label for="nomb">Nombre:</label><br>
            <input type="text" id="nomb" name="nomb" value=""><br>
            <label for="apell">Apellido:</label><br>
            <input type="text" id="apell" name="apell" value=""><br>
            <label for="mail">Email:</label><br>
            <input type="text" id="mail" name="mail" value=""><br>
            <label for="msj">Mensaje:</label><br>
            <textarea name="msj" rows="4" cols="50"></textarea><br>
            <input type="submit" value="Enviar">
            </form>  
            <?php
            if($_POST)
            {
                $mysqli = new mysqli("127.0.0.1", "rafa", "12345", "login2", 3306);
                if ($mysqli->connect_errno) 
                {
                    echo "<br>Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                }    
                $nomb= $_REQUEST['nomb'];
                $apell= $_REQUEST['apell'];
                $mail= $_REQUEST['mail'];
                $msj= $_REQUEST['msj'];
                $query1 = $mysqli->query("INSERT INTO Contacto (nombre,apellido,email,mensaje) VALUES ('$nomb','$apell','$mail', '$msj')");
                        echo ('¡Gracias por sus comentarios!');   
            }
    ?>    
            </div>
        </td>
        <td></td> 
        </table>  
    </nav>
    
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