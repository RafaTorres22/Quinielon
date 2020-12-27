<html>
    <head>
        <title>
        test
        </title>
    </head>
    <body>
    <table>
                    <colgroup>
                        <col span="1" >
                    <tr >
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
    $mysqli = new mysqli("127.0.0.1", "rafa", "12345", "login2");
    if ($mysqli->connect_errno) 
    {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    $sql = "select * from Productos";  //edit your table name here
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
    </body>
</html>
