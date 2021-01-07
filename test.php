<html>
    <head>
        <title>
        test
        </title>
        <link href="Estilos/test.css" rel="stylesheet" type="text/css">
    </head>
    <body>
            <div class = "esquina_der">
            <?php
            $MostrarForm = TRUE;
            if($_POST)
            {
                $MostrarForm = FALSE;
            }
            if ($MostrarForm)
            {
                ?>
            <form action ="test.php" method="post">
            <label for="usr">Usuario:</label>
            <input type="text" id="usr" name="usr" value=""><br>
            <label for="pass">Contraseña:</label>
            <input type="password" id="pass" name="pass" value=""><br>
            <input type="submit" value="Iniciar Sesion">
            </form>
            <?php
            } 
            {
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
                        while($id==1)
                        {
                            echo "<br>Bienvenido Administrador<br>";
                            break;
                        }
                        While($id!=1)
                        {
                            echo "<br>Bienvenido Usuario<br>";
                            break;
                        }
                        
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
    </body>
</html>
