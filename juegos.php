<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <meta name="description" content="titulo">
        <meta name="keywords" content="HTML5., CSS3, Javascript">
        <title>JUEGOS - QUINIELON</title>
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
          <a href="index.php">Inicio</a></li>          
          <a class = "activo" href="juegos.php">Juegos</a></li> 
          <a href="noticias.html">Noticias</a></li> 
          <a href="pago.html">Metodos de Pago</a></li> 
          <a href="cuenta.html">Mi cuenta</a></li> 
          <a href="apuestas.html">Quinielas de apuestas</a></li> 
          <a href="acercade.html">Acerca de Nosotros</a></li>
          <a href="contacto.php">Contacto</a></li> 
          <a href="form1.html">Registro</a></li>
          <!-- <a href="test.php">tests</a></li> -->
          </div>
          
        </td>
        <div class="esquina_der">
        <a href="logon.php">Iniciar sesion</a>
        </div>
        <td class ="cuerpo" width = "100%">
            <h1>Juegos Actuales</h1>
            Aqui va una seccion con los partidos que se van a disputar proximamente 
            para que el usuario pueda hacer sus apuestas comprando sus quinielas.<br>
            <div class = "productos"> 
                <table>
                    <colgroup>
                    <tr>
                    <th>Deporte</th>
                    <th></th>
                    <th>Quiniela</th>
                    <th></th>
                    <th>Fecha de Juego</th>
                    <th></th>
                    <th>Costo</th>
                    <th></th>
                    <th>Estatus</th>
                    <th>Ingresar</th>
                    <th></th>
                    </tr>
                    <?php
    $mysqli = new mysqli("127.0.0.1", "rafa", "12345", "Productos");
    if ($mysqli->connect_errno) 
    {
        echo "Error al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    $sql = "select * from Productos"; 
    $res = $mysqli->query($sql);
    while ($row = $res->fetch_assoc()) 
    {
        echo "<tr>";
        foreach($row as $ind => $val)
        {      
            echo  "<td>$val<td/>";
        }
        echo "<a href=index.html> Comprar </a>";
        echo "<tr/>";
    } 
     ?>
     </table>
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