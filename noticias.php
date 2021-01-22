<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <meta name="description" content="titulo">
        <meta name="keywords" content="HTML5., CSS3, Javascript">
        <meta name="viewport" content="width=device-width, initial scale= 1.0">
        <title>NOTICIAS - QUINIELON</title>
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
          <a class = "activo" href="noticias.php">Noticias</a></li> 
          <a href="pago.html">Metodos de Pago</a></li> 
          <a href="cuenta.html">Mi cuenta</a></li> 
          <a href="apuestas.html">Quinielas de apuestas</a></li> 
          <a href="acercade.html">Acerca de Nosotros</a></li>
          <a href="contacto.php">Contacto</a></li> 
          <a href="form1.php">Registro</a></li>
          </div>
        <table>
               
          
        
        <div class="esquina_der">
            <a href="logon.php">Iniciar sesion</a>
            </div>
        <td class ="cuerpo" width = "100%">
            <div id="canvas">
                <div id="heading">   
                    <h3> Noticias en vivo de deportes <span id="selectionTitle">Informador MX</span></h3>
                    <h4 id="date">
                        <?php
                        setlocale(LC_ALL, 'es_MX.utf8');
                    echo"Fecha: ";
                    echo(strftime('%d / %B / %Y'))
                        ?>
                    </h4>
                </div>
        
                <div id="feed-textarea">
                    <ul></ul>
                </div>
            </div>
            <?php feed("https://www.informador.mx/rss/deportes.xml") ?>
            <?php
function feed($feedURL){
$i = 0; 
$url = $feedURL; 
$rss = simplexml_load_file($url); 
    foreach($rss->channel->item as $item) 
    { 
    $link = $item->link;  
    $title = $item->title;  
    $description = strip_tags($item->description); 
     if (strlen($description) > 400) 
      { 
       $stringCut = substr($description, 0, 200);                   
       $description = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
      }
     if ($i < 20) 
      { 
       echo '<div class="cuadros1"><h4><a href="'.$link.'" target="_blank">'.$title.'</a></h4>'.$description.'<br><div class="time">';}
       $i++;
      }
    echo '<div style="clear: both;"></div>';
    }
?>	
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