
<?php
header("Content-Type: text/html;charset=utf-8");

//-----------------variables globales ---------------

$GLOBALS["nro_opciones_perfil"] = 7;  //-- total de opciones configurables por tipos de usuarios en campo articulo/representante/persona


if(session_status() === PHP_SESSION_NONE) session_start();

function mayuscula_inicio($texto){
	
   $primera=substr($texto,0,1);
   $resto=substr($texto,1,strlen($texto)-1);
   $string=strtoupper($primera).strtolower($resto);
  
   return $string;
}

function limpia_post(){
 // Modificamos las variables de formularios 
 	foreach( $_POST as $variable => $valor ){ 
    $_POST [ $variable ] = str_replace ( "'", "" , $_POST [ $variable ]); 
    $_POST [ $variable ] = str_replace ( "\"", "" , $_POST [ $variable ]); 
    $_POST [ $variable ] = str_replace ( "=", "" , $_POST [ $variable ]); 
    $_POST [ $variable ] = str_replace ( "(", "" , $_POST [ $variable ]); 
    $_POST [ $variable ] = str_replace ( ")", "" , $_POST [ $variable ]); 
    $_POST [ $variable ] = str_replace ( ";", "" , $_POST [ $variable ]); 
    $_POST [ $variable ] = str_replace ( ".", "" , $_POST [ $variable ]); 
    $_POST [ $variable ] = str_replace ( ":", "" , $_POST [ $variable ]); 
    $_POST [ $variable ] = str_replace ( "&", "" , $_POST [ $variable ]); 
    $_POST [ $variable ] = str_replace ( "#", "" , $_POST [ $variable ]); 
    $_POST [ $variable ] = str_replace ( "/", "" , $_POST [ $variable ]); 
    $_POST [ $variable ] = str_replace ( "?", "" , $_POST [ $variable ]); 
    }
}

function error_llamado($mensaje,$link){
	$texto="";
	if (strlen($mensaje)>0){
		$texto=$mensaje;
	} else {
		$texto="ERROR de LLamado!!";
	}
	$lnk="";
	if (strlen($link)>0){
		$lnk=$link;
	} else {
		$lnk="index.php";
	}

	echo "<script>alert('".$texto."'); location.href ='".$lnk."';</script>";
	
}

function encrypt($data){
	$key=$GLOBALS["key"];
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
    $encrypted=openssl_encrypt($data, "aes-256-cbc", $key, 0, $iv);
    // return the encrypted string with $iv joined 
    return base64_encode($encrypted."::".$iv);
}
 
/**
 * function to decrypt
 * @param string $data
 * @param string $key
 */
function decrypt($data){
	$key=$GLOBALS["key"];
    list($encrypted_data, $iv) = explode('::', base64_decode($data), 2);
    return openssl_decrypt($encrypted_data, 'aes-256-cbc', $key, 0, $iv);
}
 
 



//error_reporting(0);   // no reportar errores

class conexion {
	public $conexion;
	private $total_consultas;

	public function conectar()
	{
		

		$servidor = "localhost";
		$usuario = "root";
		$password = "";
		$nombreBD = "sinner";
		$this->conexion = @new mysqli($servidor, $usuario, $password, $nombreBD);
		mysqli_character_set_name($this->conexion);
		

		if ($this->conexion->connect_errno) {
			die('Connect Error: ' . $this->conexion->connect_errno);
		} else {
			$this->conexion->set_charset("utf8");
		}


		if (!$this->conexion->set_charset("utf8")) { // Condicional para asignar utf-8
			die("Error mostrando el conjunto de caracteres utf8");
		}
	}

	public function consulta($consulta)
	{

		$this->total_consultas++;

		$resultado = mysqli_query($this->conexion, $consulta);

		if (!$resultado) {
			echo 'MySQL Error: ' . mysqli_error($this->conexion);
			echo "consulta[" . $consulta . "]";

			exit;
		}

		return $resultado;
	}


	public function fetch_array($consulta) //Recupera una fila de resultados como un array asociativo, un array numérico o como ambos
	{

		return mysqli_fetch_array($consulta);
	}


	public function num_rows($consulta) //Obtener el número de filas de un conjunto de resultados
	{

		return mysqli_num_rows($consulta);
	}

	public function close_mysql($conexion)
	{
		mysqli_close($conexion);
	}


	public function getTotalConsultas()
	{
		return $this->total_consultas;
	}
	function executeQuery($cons)
	{
		$this->consulta = mysqli_query($cons, $this->conexion->conexion());
		return $this->consulta;
	}
}

//**************** Funciones Comunes ***************************** */
function correo($correo_destino,$asunto,$mensaje){
	$to = $correo_destino;
	$subject = $asunto;
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$message = $mensaje;
	mail($to, $subject, $message, $headers);
}

function validacorreo($str){
  return (false !== filter_var($str, FILTER_VALIDATE_EMAIL));
}

function validatelefono($numero){
	$patron="[ +]*([0-9][ -]*){12}";  // --- 12 numeros antecedidos por un signo + o nada
	$valido=preg_match($patron, $numero);
	return $valido;
}

function validarut($r){
	$r=strtoupper(ereg_replace('\.|,|-','',$r));
	$sub_rut=substr($r,0,strlen($r)-1);
	$sub_dv=substr($r,-1);
	$x=2;
	$s=0;
	for ( $i=strlen($sub_rut)-1;$i>=0;$i-- )
	{
		if ( $x >7 )
		{
			$x=2;
		}
		$s += $sub_rut[$i]*$x;
		$x++;
	}
	$dv=11-($s%11);
	if ( $dv==10 )
	{
		$dv='K';
	}
	if ( $dv==11 )
	{
		$dv='0';
	}
	if ( $dv==$sub_dv )
	{
		return true;
	}
	else
	{
		return false;
	}
}


function crear_select($idselect,$descrip,$sql,$inicial,$todos){
	
	$db= new conexion();
	$db->conectar();
	$datos=$db->consulta($sql );
    echo "<div class='form-group'>";
    echo "<label for='".$idselect."'>".$descrip."</label>";
	echo "<select id='".$idselect."' class='form-control' name='".$idselect."'>";
	if($todos=="S"){echo "<option value='' selected>Todos</option>";}

 	$num=0;
	$aux=0;
	$aux2=0;
	if($db->num_rows($datos)){
		while($row = $db->fetch_array($datos)){
			if ($row[0]==$inicial) {
				echo "<option value='".$row[0]."' selected>".$row[1]."</option>";
				$aux2=1;
			} else {
				echo "<option value='".$row[0]."'>".$row[1]."</option>";
			}
		 	$num++;
		} 


    } 
	echo "</select>";
    echo "</div>";
    return $num;
};


function colocar_titulo($volver){
	if(session_status() === PHP_SESSION_NONE) session_start();

	$tipo="sin tipo de usuario!!";
	if (isset( $_SESSION['tipuser'])) {
		switch ($_SESSION['tipuser']) {
			case 0:
				$tipo="Usuario Administrador";
				break;
			case 1:
				$tipo="Usuario Legal";
				break;
			case 2:
				$tipo="usuario Estandar";
				break;
		};
	};

                
    ?>
	

	<div class='row text-center align-content-center align-items-center bg-sistema5 text-light'>

		<div class="col-12 col-xl-2  ">
			<img src="img/logo.JPG" alt="" srcset="" class="img-thumbnail rounded mx-auto d-block " >
		</div>
		<div class='col-2 col-xl-2 '>
			<?php
			if (!empty($volver)&&isset( $_SESSION['tipuser'])){
				?>

				<a href='<?php echo $volver; ?>'  class='btn btn-light' title='Volver' >
					<i class='icon-share-alt icon-2x w-100'></i>
				</a>
			<?php
			};
			?>
		</div>
		<div class="col-8 col-xl-6 ">
			<?php 
				if (isset( $_SESSION['idpersona'])) { 
					$linea1="PERSONA[";
					$linea1.="Rol:".$_SESSION['rol_p']."|"; 
					$linea1.="Nombre:".$_SESSION["nombre_p"]."|";
					$linea1.="Periodo:".date('d/m/Y',strtotime($_SESSION["fini_p"]))."-";
					if ($_SESSION["ffin_p"]=='') {
						$linea1.="Indefinido|";
					} else {
						$linea1.=date('d/m/Y',strtotime($_SESSION["ffin_p"]))."|";
					} 
					$linea1.="Perfil:".mayuscula_inicio($_SESSION["idtipo_perfil_nombre"])."]";
					echo "<div class='bg-primary text-light w-100 small'>".$linea1."</div>";
				}
			?>
			
			<?php
				if (isset( $_SESSION['rutnum'])) { 
					//$linea2="[Id Usuario:".$_SESSION["rutnum"]."]";
					$linea2="<br> USUARIO [Nombre:".mayuscula_inicio($_SESSION["paterno"])." ".mayuscula_inicio($_SESSION["materno"])." ".mayuscula_inicio($_SESSION["nombres"])."|";
					$linea2.="Tipo Usuario:".$_SESSION["tipuser_nombre"]."]";
					echo "<div class='bg-info text-light w-100 small'>".$linea2."</div>";
				}

			?>  

		</div>
		

		<div class='col-2 col-xl-2 '>
		    <?php
				if (isset( $_SESSION['tipuser'])) { ?>
					<a href='index.php' class='btn btn-light'  title='Cerrar Sesion' >
						<i class='icon-signout icon-2x '></i>
					</a>
			<?php 
				}
			?>
		</div>
	</div>
<?php 	 
}

function auditoria($bd, $query, $tipmov)
{
	if(session_status() === PHP_SESSION_NONE) session_start();

	if (!isset( $_SESSION["idpersona"])||$_SESSION["idpersona"]=="0") {
		$idpersona="9999999999";
	} else {
		$idpersona = $_SESSION["idpersona"];
	}
	
	$rutnum = $_SESSION["rutnum"];
	$tipuser = $_SESSION['tipuser'];
	$db = new conexion();
	$db->conectar();
	$sql = 'insert into mov_auditoria(bd,query,idpersona,rutnum,tipuser,tipmov)';
	$sql = $sql . ' values ("' . $bd . '"';
	$sql = $sql . ',"' . $query . '"';
	$sql = $sql . ',"' . $idpersona . '"';
	$sql = $sql . ',"' . $rutnum . '"';
	$sql = $sql . ',"' . $tipuser . '"';
	$sql = $sql . ',"' . $tipmov . '")';

	$consulta = $db->consulta($sql);
}

function validanro($nro, $minimo, $maximo)
{
	$error = false;
	if ($nro < $minimo) {
		$error = true;
	}
	if ($nro > $maximo) {
		$error = true;
	}
	return (!$error);
}
function validatxt($texto, $minimo, $maximo)
{
	$error = false;
	if (strlen($texto) < $minimo) {
		$error = true;
	}
	if (strlen($texto) > $maximo) {
		$error = true;
	}
	return (!$error);
}

function validafecha($fecha){
	$valores = explode('/', $fecha);
	if(count($valores) == 3 && checkdate($valores[1], $valores[0], $valores[2])){
		return true;
    }
	return false;
}

function cleanString($texto){
	$string = mysqli_real_escape_string($texto);
	
	$string = htmlspecialchars($string);

	return $string;
}

function cleanString2($string){
	$string = mysqli_real_escape_string($string);
	//$string=htmlspecialchars($string);

	return $string;
}

function fechaSql($fecha_nom){
	$patron = explode("/", $fecha_nom);
	$fechana = $patron[2] . "-" . $patron[1] . "-" . $patron[0];
	return $fechana;
}

function fechaNormal($fecha_nom)
{
	$patron = explode("-", $fecha_nom);
	$fechana = $patron[2] . "-" . $patron[1] . "-" . $patron[0];
	return $fechana;
}

function quitar_tildes($cadena)
{
	$cadBuscar = array("á", "Á", "é", "É", "í", "Í", "ó", "Ó", "ú", "Ú");
	$cadPoner = array("a", "A", "e", "E", "i", "I", "o", "O", "u", "U");
	$cadena = str_replace($cadBuscar, $cadPoner, $cadena);
	$cadena =  strtoupper($cadena);
	return $cadena;
}

function colocar_tildes($cadena)
{
	$cadBuscar = array("a", "A", "e", "E", "i", "I", "o", "O", "u", "U");
	$cadPoner   = array("á", "Á", "é", "É", "í", "Í", "ó", "Ó", "ú", "Ú");


	$cadena = str_replace($cadBuscar, $cadPoner, $cadena);
	$cadena =  strtoupper($cadena);
	return $cadena;
}


function puntos($s)
{

	$s = str_replace('"', '', $s);
	$s = str_replace(':', '', $s);
	$s = str_replace('.', '', $s);
	$s = str_replace(',', '', $s);
	$s = str_replace(';', '', $s);

	return $s;
}

function properText($str)
{
	$str = mb_convert_encoding($str, "HTML-ENTITIES", "UTF-8");
	$str = preg_replace('[a-zA-Z áéíóúÁÉÍÓÚñÑ.]+', htmlentities('${1}'), $str);
	return ($str);
}

/**
 * File: SimpleImage.php
 * Author: Simon Jarvis
 * Modified by: Miguel Fermín
 * Based in: http://www.white-hat-web-design.co.uk/articles/php-image-resizing.php
 * 
 * This program is free software; you can redistribute it and/or 
 * modify it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation; either version 2 
 * of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful, 
 * but WITHOUT ANY WARRANTY; without even the implied warranty of 
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the 
 * GNU General Public License for more details: 
 * http://www.gnu.org/licenses/gpl.html
 */
class SimpleImage
{

	public $image;
	public $image_type;
	public function __construct($filename = null)
	{
		if (!empty($filename)) {
			$this->load($filename);
		}
	}
	public function load($filename)
	{
		$image_info = getimagesize($filename);
		$this->image_type = $image_info[2];
		if ($this->image_type == IMAGETYPE_JPEG) {
			$this->image = imagecreatefromjpeg($filename);
		} elseif ($this->image_type == IMAGETYPE_GIF) {
			$this->image = imagecreatefromgif($filename);
		} elseif ($this->image_type == IMAGETYPE_PNG) {
			$this->image = imagecreatefrompng($filename);
		} else {
			throw new Exception("The file you're trying to open is not supported");
		}
	}
	public function save($filename, $image_type = IMAGETYPE_JPEG, $compression = 75, $permissions = null)
	{
		if ($image_type == IMAGETYPE_JPEG) {
			imagejpeg($this->image, $filename, $compression);
		} elseif ($image_type == IMAGETYPE_GIF) {
			imagegif($this->image, $filename);
		} elseif ($image_type == IMAGETYPE_PNG) {
			imagepng($this->image, $filename);
		}
		if ($permissions != null) {
			chmod($filename, $permissions);
		}
	}
	public function output($image_type = IMAGETYPE_JPEG, $quality = 80)
	{
		if ($image_type == IMAGETYPE_JPEG) {
			header("Content-type: image/jpeg");
			imagejpeg($this->image, null, $quality);
		} elseif ($image_type == IMAGETYPE_GIF) {
			header("Content-type: image/gif");
			imagegif($this->image);
		} elseif ($image_type == IMAGETYPE_PNG) {
			header("Content-type: image/png");
			imagepng($this->image);
		}
	}

	public function getWidth()
	{
		return imagesx($this->image);
	}
	public function getHeight()
	{
		return imagesy($this->image);
	}
	public function resizeToHeight($height)
	{
		$ratio = $height / $this->getHeight();
		$width = round($this->getWidth() * $ratio);
		$this->resize($width, $height);
	}
	public function resizeToWidth($width)
	{
		$ratio = $width / $this->getWidth();
		$height = round($this->getHeight() * $ratio);
		$this->resize($width, $height);
	}
	public function square($size)
	{
		$new_image = imagecreatetruecolor($size, $size);
		if ($this->getWidth() > $this->getHeight()) {
			$this->resizeToHeight($size);

			imagecolortransparent($new_image, imagecolorallocate($new_image, 0, 0, 0));
			imagealphablending($new_image, false);
			imagesavealpha($new_image, true);
			imagecopy($new_image, $this->image, 0, 0, ($this->getWidth() - $size) / 2, 0, $size, $size);
		} else {
			$this->resizeToWidth($size);

			imagecolortransparent($new_image, imagecolorallocate($new_image, 0, 0, 0));
			imagealphablending($new_image, false);
			imagesavealpha($new_image, true);
			imagecopy($new_image, $this->image, 0, 0, 0, ($this->getHeight() - $size) / 2, $size, $size);
		}
		$this->image = $new_image;
	}

	public function scale($scale)
	{
		$width = $this->getWidth() * $scale / 100;
		$height = $this->getHeight() * $scale / 100;
		$this->resize($width, $height);
	}

	public function resize($width, $height)
	{
		$new_image = imagecreatetruecolor($width, $height);

		imagecolortransparent($new_image, imagecolorallocate($new_image, 0, 0, 0));
		imagealphablending($new_image, false);
		imagesavealpha($new_image, true);

		imagecopyresampled($new_image, $this->image, 0, 0, 0, 0, $width, $height, $this->getWidth(), $this->getHeight());
		$this->image = $new_image;
	}
	public function cut($x, $y, $width, $height)
	{
		$new_image = imagecreatetruecolor($width, $height);
		imagecolortransparent($new_image, imagecolorallocate($new_image, 0, 0, 0));
		imagealphablending($new_image, false);
		imagesavealpha($new_image, true);
		imagecopy($new_image, $this->image, 0, 0, $x, $y, $width, $height);
		$this->image = $new_image;
	}
	public function maxarea($width, $height = null)
	{
		$height = $height ? $height : $width;

		if ($this->getWidth() > $width) {
			$this->resizeToWidth($width);
		}
		if ($this->getHeight() > $height) {
			$this->resizeToheight($height);
		}
	}

	public function minarea($width, $height = null)
	{
		$height = $height ? $height : $width;

		if ($this->getWidth() < $width) {
			$this->resizeToWidth($width);
		}
		if ($this->getHeight() < $height) {
			$this->resizeToheight($height);
		}
	}
	public function cutFromCenter($width, $height)
	{

		if ($width < $this->getWidth() && $width > $height) {
			$this->resizeToWidth($width);
		}
		if ($height < $this->getHeight() && $width < $height) {
			$this->resizeToHeight($height);
		}

		$x = ($this->getWidth() / 2) - ($width / 2);
		$y = ($this->getHeight() / 2) - ($height / 2);

		return $this->cut($x, $y, $width, $height);
	}
	public function maxareafill($width, $height, $red = 0, $green = 0, $blue = 0)
	{
		$this->maxarea($width, $height);
		$new_image = imagecreatetruecolor($width, $height);
		$color_fill = imagecolorallocate($new_image, $red, $green, $blue);
		imagefill($new_image, 0, 0, $color_fill);
		imagecopyresampled(
			$new_image,
			$this->image,
			floor(($width - $this->getWidth()) / 2),
			floor(($height - $this->getHeight()) / 2),
			0,
			0,
			$this->getWidth(),
			$this->getHeight(),
			$this->getWidth(),
			$this->getHeight()
		);
		$this->image = $new_image;
	}
}

// Usage:
// Load the original image
//$image = new SimpleImage('lemon.jpg');
// Resize the image to 600px width and the proportional height
//$image->resizeToWidth(600);
//$image->save('lemon_resized.jpg');
// Create a squared version of the image
//7$image->square(200);
//$image->save('lemon_squared.jpg');
// Scales the image to 75%
//$image->scale(75);
//$image->save('lemon_scaled.jpg');
// Resize the image to specific width and height
//$image->resize(80,60);
//$image->save('lemon_resized2.jpg');
// Resize the canvas and fill the empty space with a color of your choice
//$image->maxareafill(600,400, 32, 39, 240);
//$image->save('lemon_filled.jpg');
// Output the image to the browser:
//$image->output();

//********************** Clases BDatos********* */
