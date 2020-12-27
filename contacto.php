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
        <table>
            <td>   
          <div class="menu" >
          <a href="index.html">Inicio</a></li>          
          <a href="juegos.php">Juegos</a></li> 
          <a href="noticias.html">Noticias</a></li> 
          <a href="pago.html">Metodos de Pago</a></li> 
          <a href="cuenta.html">Mi cuenta</a></li> 
          <a href="apuestas.html">Quinielas de apuestas</a></li> 
          <a href="acercade.html">Acerca de Nosotros</a></li>
          <a class = "activo" href="contacto.php">Contacto</a></li> 
          <a href="form1.html">Registro</a></li>
          </div>
        </td>
        <td class ="cuerpo" width = "100%">
            <h1>Contacto</h1>
            Medios de contacto.<br>
            <div class = "productos"> 
                <table>
                    <colgroup>
                    <tr>              
                    <th>Nombre</th>
                    <th></th>
                    <th>Telefono</th>
                    <th></th>
                    <th>No. de Control</th>
                    <th></th>
                    </tr>
                    <?php
    $mysqli = new mysqli("127.0.0.1", "rafa", "12345", "login2");
    if ($mysqli->connect_errno) 
    {
        echo "Error al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    $sql = "select Nombre,Telefono,No_Control from Contacto"; 
    $res = $mysqli->query($sql);
    while ($row = $res->fetch_assoc()) 
    {
        echo "<tr>";
        foreach($row as $ind => $val)
        {      
            echo  "<td>$val<td/>";
        }
        echo "<tr/>";
    } 
     ?>
     </table>
             </div>
            <img src="Archivos/MiCuenta.png" alt="Imagen de Prueba" class="EjemImg">
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