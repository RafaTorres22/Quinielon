<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <meta name="description" content="titulo">
        <meta name="keywords" content="HTML5., CSS3, Javascript">
        <title>QUINIELON</title>
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
        <table>
            <td>   
          <div class="menu" >
          <a class = "activo" href="index.php">Inicio</a></li>          
          <a href="juegos.php">Juegos</a></li> 
          <a href="noticias.html">Noticias</a></li> 
          <a href="pago.html">Metodos de Pago</a></li> 
          <a href="cuenta.html">Mi cuenta</a></li> 
          <a href="apuestas.html">Quinielas de apuestas</a></li> 
          <a href="acercade.html">Acerca de Nosotros</a></li>
          <a href="contacto.php">Contacto</a></li>
          <a href="form1.html">Registro</a></li>
          </div>
        </td>
        <div class = "esquina_der">
            <form method="post">
            <label for="usr">Usuario:</label>
            <input type="text" id="usr" name="usr" value="">
            <label for="pass">Contraseña:</label>
            <input type="password" id="pass" name="pass" value="">
            <input type="submit" value="Iniciar Sesion">
            
            <?php
            if($_POST)
            {
                $mysqli = new mysqli("127.0.0.1", "rafa", "12345", "login2", 3306);
                if ($mysqli->connect_errno) 
                {
                    echo "<br>Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                }    
                $usuario= $_REQUEST['usr'];
                $pass= $_REQUEST['pass'];
                $query1 = $mysqli->query("SELECT * FROM usr WHERE usr.Usuario='$usuario' AND Contra='$pass'");
                if($query1->num_rows != 1)
                {  
                     echo "<br>Usuario y/o Contraseña incorrectos. Intente de nuevo";               
                     echo "<meta http-equiv=\"refresh\" content=\"3;url=http://192.168.1.69/logon.php\" />";
                }
                else
                {
                    $query1->data_seek(0);
                    $fila = $query1->fetch_assoc();
                    $id=$fila['ID'];
                    $usrBD = $fila['Usuario']; 
                    $query2 = $mysqli->query("SELECT * FROM Cat WHERE ID='$id'");
                    $query2->data_seek(0);
                    $fila = $query2->fetch_assoc();
                    $Des=$fila['Descripcion'];
                    echo "<br>Bienvenido $Des<br>";
                    echo "$usrBD<br>"; 
                    $fecha =new DateTime('NOW');
                    echo"Fecha: ";
                        echo $fecha->format('d/m/Y');
                        echo"<br>Hora: "; 
                        echo $fecha->format('h:i a');
                }
            }
            ?>
            </div>
        <td class ="cuerpo" width = "100%">
          <h1>Apuestas de la Liga MX</h1>
          Apuesta por tu equipo favorito, y si la suerte esta a tu favor, seras ganador! 
           <BR>
            <img src="Archivos/MX_logo.png" alt="Imagen de Prueba" class="EjemImg">
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