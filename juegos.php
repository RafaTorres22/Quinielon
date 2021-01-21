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
          <a href="form1.php">Registro</a></li>
          <a href="test.php">tests</a></li>
          </div>
          
        </td>
        <div class = "esquina_der">
        <?php
            $MostrarForm = TRUE;
            if($_GET)
            {
                $MostrarForm = FALSE;
            }
            if ($MostrarForm)
            {
                ?>
             <form action = juegos.php method="get">
             <label for="usr">Usuario:</label>
             <input type="text" id="usr" name="usr" value="">
             <label for="pass">Contraseña:</label>
             <input type="password" id="pass" name="pass" value=""><br>
             <input type="submit" value="Iniciar Sesion">
             </form>
             <?php
            }

            {
            if($_GET)
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
                     echo "<meta http-equiv=\"refresh\" content=\"3;url=http://rafa.torres.ddns.net\juegos.php/>";
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
            }
            ?>
            </div>
         <td class ="cuerpo" width = "100%">
            <h1>Juegos Actuales</h1>
            Aqui va una seccion con los partidos que se van a disputar proximamente 
            para que el usuario pueda hacer sus apuestas comprando sus quinielas.<br>
            <div class = "productos"> 
                <table>
                    <colgroup>
                    <tr><th>Numero</th>
                    <th></th>
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
                 }?>
        
                 <input type="button" onclick="alert('No tienes suficiente dinero pobre :v')" value="Comprar">
                 <?php
                 echo "<tr/>";
                 } 
                  ?>
     
                 </table>
     
                 </div>
                 <?php
                 if ($id ==1)
                 {
                     ?>
                     <div class = registro>
                     <p id="isc">
                      Registrar nuevo Juego:<br>
                     <form method="POST">
                     <label for = "Deporte">Deporte: </label>
                     <select name = "Deporte" id=Deporte>
                        <option value = "Futbol">Futbol</option>
                        <option value = "Basquetbol">Basquetbol</option>
                        <option value = "Voleibol">Voleibol</option>
                        <option value = "Tennis">Tennis</option>
                     </select>
                     <label for = "Quiniela">Quiniela: </label>
                      <input name = "Quiniela" type="text" id=Quiniela maxlenght="50" required/>
                     <label for = "Fecha">Fecha de juego: </label>
                     <input name = "Fecha" id="Fecha" type="datetime-local" min = "2021-01-20T00:00">
                     <label for ="Costo">Costo</label>
                     <input name = "Costo" type="text" id=Costo maxlenght="15" required/>
                     <label for ="estatus">Estatus </label>
                     <select name = "Estatus" id= "Estatus">
                     <option value = "Activo">Activo</option>
                     <option value = "Inactivo">Inactivo</option>
                     </select>
                     <input type = "submit" value="Añadir"/> <br>
                     </form>
                     <p id="isc">
                     Eliminar Juego:
                     <form method="POST">
                     <select name = "id" id= "Numero">               
                     <?php
                      $mysqli = new mysqli("127.0.0.1", "rafa", "12345", "Productos");
                      if ($mysqli->connect_errno) 
                      {
                      echo "Error al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                      }
                      $sql = "select id from Productos"; 
                      $res = $mysqli->query($sql);
                      while ($row = $res->fetch_assoc()) 
                    {
                      foreach($row as $ind => $val)
                      {      
                      echo"<option value = $val>$val</option>";
                      }
                    }
                    ?>
                     </select>
                     <input type = "submit" name="submit_1" value="Eliminar"/>
                     </form>
                     <?php
                      }
                     ?>
                     <?php
                      if($_POST)
            {
                $mysqli = new mysqli("127.0.0.1", "rafa", "12345", "Productos", 3306);
                  if ($mysqli->connect_errno) 
                 {
                    echo "<br>Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                 }    
                 $deporte= $_REQUEST['Deporte'];
                 $quiniela= $_REQUEST['Quiniela'];
                 $fecha= $_REQUEST['Fecha'];
                 $costo= $_REQUEST['Costo'];
                 $estatus= $_REQUEST['Estatus'];
                 $query1 = $mysqli->query("INSERT INTO `Productos` (`Deporte`, `Quiniela`, `Fecha`, `Costo`, `Estatus`) VALUES ('$deporte', '$quiniela', '$fecha', '$costo', '$estatus');");
               
               echo "<meta http-equiv=refresh content=1>";
            }
            ?>
            <?php
                
                 if($_POST[submit_1])
              {
                $mysqli = new mysqli("127.0.0.1", "rafa", "12345", "Productos", 3306);
                  if ($mysqli->connect_errno) 
                 {
                    echo "<br>Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                 }    
                 $id = $_REQUEST['id'];
                 $query1 = $mysqli->query("DELETE FROM `Productos`.`Productos` WHERE  `id`=$id;");
                 $query2 = $mysqli->query("ALTER TABLE Productos AUTO_INCREMENT = 1;");
                
                echo "<meta http-equiv=refresh content=1>";
            }
                  
                 ?>
                 </p>
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