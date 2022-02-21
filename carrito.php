<?php 

$aCarrito = array(); //array que contendrá la información del carrito
$sHTML = ''; //variable utilizada para escribir el código de una forma más cómoda
$fPrecioTotal = 0; //variable que almacenará el total de los precios en cesta
$existe = 0; //variable que usaremos para comprobar si un item está en el carrito o no
$gastosEnvio = 4.95; //variable fija para los gastos de envío

//Vaciamos el carrito. Al pulsar sobre el botón "Vaciar carrito" en carrito.php, se pasa el valor vaciar como 1, lo que vacía (unset) la cookie carrito.
if(isset($_GET['vaciar'])) {
	unset($_COOKIE['carrito']);
	$sHTML .= 'El carrito está vacio <br><br>';
}

//Obtenemos los productos anteriores. Si la cookie carrito está establecida, obtenemos sus valores deserilazando el array que contiene.
if(isset($_COOKIE['carrito'])) {
	$aCarrito = unserialize($_COOKIE['carrito']);
}

//Añado un nuevo articulo al carrito. Si la variable nombre Y precio están establecidas (pasadas por el método get, lo que significaria que el artículo ya está en el carro), se actualiza la cantidad en el carrito con la cantidad indicada de nuevo en el artículo.
if(isset($_GET['nombre']) && isset($_GET['precio'])) {


	for($i = 0; $i< sizeof($aCarrito); $i++) {
	    if($aCarrito[$i]['nombre'] == $_GET['nombre']) {
		$aCarrito[$i]['cantidad'] = $aCarrito[$i]['cantidad'] + $_POST['cantidad'];
		$existe = 1;
	    }
	}


// Si por el contrario el artículo no está en el carro, este se irá añadiendo al final del array.
	if($existe == 0) {
		$iUltimaPos = count($aCarrito);
		$aCarrito[$iUltimaPos]['nombre'] = $_GET['nombre'];
		$aCarrito[$iUltimaPos]['precio'] = $_GET['precio'];
		$aCarrito[$iUltimaPos]['cantidad'] = $_POST['cantidad'];
        }
}

//Creamos la cookie (serializamos) e indicamos la caducidad de 1 día.
$iTemCad = time() + (60 * 60 * 24);
setcookie('carrito', serialize($aCarrito), $iTemCad);



//Imprimimos el contenido del array
$sHTML .= '<table style="width:350px;">';
$sHTML .= '<tr><td><b>Nombre</b></td><td><b>Precio</b></td><td><b>Cantidad</b></td><td><b>Total</b></td></tr>';
foreach ($aCarrito as $key => $value) {
	$sHTML .= '<tr>';
	$sHTML .= '<td>' . $value['nombre'] . '</td><td>' . $value['precio'] . " €" . '</t><td>' . $value['cantidad']  . '</td><td>' . $value['precio']*$value['cantidad']." €" . '</td>';
	$sHTML .= '</tr>';
	$fPrecioTotal += $value['precio'];
}
$sHTML .= '</table>';

//Imprimimos el precio total
$sHTML .= '<br>------------------<br>';

if ($fPrecioTotal>0) {
	$sHTML .= 'Subtotal: ' . $fPrecioTotal . ' € <br>';
	$sHTML .= 'Gastos de envío: ' . $gastosEnvio . ' € <br><br>';
	$sHTML .= 'TOTAL: ' . $fPrecioTotal + $gastosEnvio . ' €';
}



?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>Carrito</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<span class="centrado"><h1>TODOPLAYSTATION.COM</h1></span> <br><br><br><br>
	<div>
		<?php echo $sHTML; ?>
	</div>
<br>
<a href="carrito.php?vaciar=1">Vaciar carrito</a>
<br> <br>
<a href="index.php">Volver al Menu</a>
</body>
</html>