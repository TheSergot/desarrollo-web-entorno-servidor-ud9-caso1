<html>
<head>
<title>Consolas</title> <meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<style>
	.txt-heading{    
		padding: 10px 10px;
	    border-radius: 2px;
	    color: #FFF;
	    background: #6aadf1;
		margin-bottom:10px;
	}

	#product-grid {
		margin:100px;
	}
	.product-item {
		float:left;
		background: #ffffff;
		margin:15px 10px;
		padding:5px;
		border:#CCC 1px solid;
		border-radius:4px;
	}
	.product-item div{
		text-align:center;
		margin:10px;
	}
	.product-price {    
		color: #005dbb;
	    font-weight: 600;
	}
	.product-image img {
		height:200px;
		background-color:#FFF;
	}
	.clear-float{
		clear:both;
	}
	.demo-input-box{
		border-radius:2px;border:#CCC 1px solid;
		padding:2px 1px;
	}
</style>
</head>
<body>
	<span class="centrado"><h1>TODOPLAYSTATION.COM</h1></span> <br><br><br><br>
	<a href="index.php">VOLVER</a> 
<div id="product-grid">
    <div class="txt-heading">Productos disponibles</div>
	<div class="product-item">
	    <form method="post" action="carrito.php?nombre=Playstation 5&precio=599">
		<div class="product-image"><img src="./imagenes/raw/ps5.jpg"></div>
		<div><strong>PS5</strong></div>
		<div class="product-price">599 €</div>
		<div><input type="text" name="cantidad" value="1" size="2" /><input type="submit" value="Añadir al carro" class="btnAddAction" /></div>
	    </form>
	</div>
	<div class="product-item">
	    <form method="post" action="carrito.php?nombre=Playstation 4&precio=300">
		<div class="product-image"><img src="./imagenes/raw/ps4.jpg"></div>
		<div><strong>PS4</strong></div>
		<div class="product-price">300 €</div>
		<div><input type="text" name="cantidad" value="1" size="2" /><input type="submit" value="Añadir al carro" class="btnAddAction" /></div>
	    </form>
	</div>
	<div class="product-item">
	    <form method="post" action="carrito.php?nombre=Playstation 3&precio=150">
		<div class="product-image"><img src="./imagenes/raw/ps3.jpg"></div>
		<div><strong>PS3</strong></div>
		<div class="product-price">150 €</div>
		<div><input type="text" name="cantidad" value="1" size="2" /><input type="submit" value="Añadir al carro" class="btnAddAction" /></div>
	    </form>
	</div>
	<div class="product-item">
	    <form method="post" action="carrito.php?nombre=Playstation 2&precio=100">
		<div class="product-image"><img src="./imagenes/raw/ps2.jpg"></div>
		<div><strong>PS2</strong></div>
		<div class="product-price">100 €</div>
		<div><input type="text" name="cantidad" value="1" size="2" /><input type="submit" value="Añadir al carro" class="btnAddAction" /></div>
	    </form>
	</div>
	<div class="product-item">
	    <form method="post" action="carrito.php?nombre=Playstation 1&precio=199">
		<div class="product-image"><img src="./imagenes/raw/ps1.jpg"></div>
		<div><strong>PS1</strong></div>
		<div class="product-price">199 €</div>
		<div><input type="text" name="cantidad" value="1" size="2" /><input type="submit" value="Añadir al carro" class="btnAddAction" /></div>
	    </form>
	</div>
</div>
</body>
</html>