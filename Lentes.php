<?php include ('menu.php')?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tipodelentes</title>

</head>
  <body>  
  <h2>Tipos de Lentes</h2>



<div class="lentes">
  <ul>
    <li><a href= "Lentes.php?nombre=av"> Aviador </a> </li>
    <li><a href= "Lentes.php?nombre=ca"> Cat Eye </a> </li>
    <li><a href= "Lentes.php?nombre=cl"> Club Master </a> </li>
    <li><a href= "Lentes.php?nombre=de"> Deportivo </a> </li>
    <li><a href= "Lentes.php?nombre=ov"> Oversized </a> </li>
    <li><a href= "Lentes.php?nombre=re"> Rectangulares </a> </li>
    <li><a href= "Lentes.php?nombre=red"> Redondos  </a> </li>
    <li><a href= "Lentes.php?nombre=ri"> Rimless </a> </li>
    <li><a href= "Lentes.php?nombre=sh"> Shield  </a> </li>
    <li><a href= "Lentes.php?nombre=wa"> Wayfarer </a> </li>
 
</ul>
<?php include ("footer.php")?>
</div>
<?php 


if (isset($_GET ['nombre'])) {
 $Lentes = $_GET ['nombre'];
 switch($Lentes){
    case "av":
        $nombre = " Aviador" ;
        $descripcion = "Clásico diseño en forma de lágrima, popularizado por pilotos de aviación. Tienen una estructura delgada de metal y lentes grandes, proporcionando un look elegante y vintage.<br>
        Uso típico: Son muy versátiles y funcionan bien para caras ovaladas, cuadradas o triangulares.";
        $img= "img/aviators.jpg";
        break;
        case "ca":
        $nombre =  "CatEye" ;
        $descripcion = "Con un diseño elevado en las esquinas, evocan el glamour vintage de los años 50 y 60. Tienen un estilo femenino y audaz.<br>
        Uso típico: Favorecen rostros redondos y ovalados, ya que acentúan las líneas del rostro.";
        $img= "img/CatEye.jpg";
        break;
        case "cl":
        $nombre = " ClubMaster" ;
        $descripcion = "De estilo retro, con un marco superior grueso y una parte inferior metálica. Tiene un toque sofisticado y está asociado con un look intelectual o vintage.<br>
        Uso típico: Favorece rostros triangulares y ovalados, creando un equilibrio interesante.";
         $img= "img/Clubmaster.jpg";
        break;
        case "de":
        $nombre = " Deportivo" ;
        $descripcion = "Diseñados para actividades físicas, tienen lentes envolventes y ligeras, con características como resistencia a impactos y materiales antideslizantes.<br>
        Uso típico: Perfectos para practicar deportes al aire libre, como ciclismo, correr o esquí.";
        $img= "img/Deportivo.jpg";
        break;
        case "ov":
        $nombre = "Oversized" ;
        $descripcion = "Lentes grandes que cubren una mayor parte del rostro, ofreciendo un look glamuroso y protección adicional. Son populares entre celebridades.<br>
        Uso típico: Favorecen caras más pequeñas o de forma ovalada, pero pueden ajustarse a varios tipos de rostro.";
        $img= "img/Oversized.jpg";
        break;
        case "re":
        $nombre = "Rectangulares" ;
        $descripcion = "Lentes con una forma alargada y angular. Proporcionan un estilo minimalista y moderno.<br>
        Uso típico: Ideales para rostros redondos, ya que ayudan a afilar los contornos.";
        $img= "img/Rectangulares.jpg";
        break;
        case "red":
        $nombre = " Redondos" ;
        $descripcion = "Lentes circulares que evocan un estilo retro, popularizado por celebridades como John Lennon. Tienen un marco delgado y suelen ser metálicos.<br>
        Uso típico: Perfectos para rostros angulosos o cuadrados, ya que suavizan los contornos.";
        $img= "img/rendondos.jpg";
        break;
        case "ri":
        $nombre = " Rimless" ;
        $descripcion = "Gafas donde los cristales están conectados directamente a las patillas sin un marco visible. Ofrecen un look ligero y sofisticado.<br>
        Uso típico: Funciona para la mayoría de las formas de cara, especialmente en aquellos que prefieren un estilo discreto.";
        $img= "img/Rimless.jpg";
        break;
        case "sh":
        $nombre = " Shield" ;
        $descripcion = "Con un diseño envolvente de una sola pieza, estas gafas brindan una protección integral. Suelen ser voluminosas y ofrecen una apariencia futurista.<br>
        Uso típico: Utilizadas comúnmente para deportes o actividades donde la protección de los ojos es clave.";
        $img= "img/Shield.jpg";
        break;
        case "wa":
        $nombre = " Wayfarer" ;
        $descripcion = "Modelo icónico de Ray-Ban con un marco grueso y ligeramente angular, popular desde los años 50. Ofrece un estilo casual y atemporal.<br>
        Uso típico: Ideal para personas con rostros redondos o ovalados debido a sus líneas definidas.";
        $img= "img/Wayfarer.jpg";
        break;
 }

?>
<div class="Todo">
 <div class = "cont_info">
 <h2> <?php echo  $nombre; ?> </h2>
   <div class = "cont_info2">
 <p> <?php echo  $descripcion; ?>  </p>
 <div class= "cont_img">
 <img src= "<?php echo $img; ?>" alt=" <?php echo  $nombre; ?> ">
 

 <?php }
 ?>
 




</body>
</html>
