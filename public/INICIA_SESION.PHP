
<?php 
include "conexion.php";

$db= new conexion();
$db->conectar();




    $sql="SELECT * FROM `usuarios` WHERE  idusuario='".$_POST['rut']."' and clave='".$_POST['password']."'";
     

   $datos=$db->consulta($sql);
    $cont=0;
    while($row = $db->fetch_array($datos)){
?>
    <br>
    USUARIO = <?php echo $row[2]; ?>
    




<?php     
    } 





?>