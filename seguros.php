<html>
<head>
<title>Seguros</title> <meta charset="utf-8">
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
		<div class="product-item" style="background-color: orange;">
		    <form method="post" action="carrito.php?nombre=Garantia%20Bronce&precio=9.99">
			<div><strong>Garantía Bronce</strong></div>
			<div class="product-price">9.99€</div>
			<div><input type="text" name="cantidad" value="1" size="2" /><input type="submit" value="Añadir al carro" class="btnAddAction" /></div>
		    </form>
		</div>
		<div class="product-item" style="background-color: silver">
		    <form method="post" action="carrito.php?nombre=Garantia%20Plata&precio=14.99">
			<div><strong>Garantía Plata</strong></div>
			<div class="product-price">14.99€</div>
			<div><input type="text" name="cantidad" value="1" size="2" /><input type="submit" value="Añadir al carro" class="btnAddAction" /></div>
		    </form>
		</div>
		<div class="product-item" style="background-color: gold;">
		    <form method="post" action="carrito.php?nombre=Garantia%20Oro&precio=19.99">
			<div><strong>Garantía Oro</strong></div>
			<div class="product-price">19.99€</div>
			<div><input type="text" name="cantidad" value="1" size="2" /><input type="submit" value="Añadir al carro" class="btnAddAction" /></div>
		    </form>
		</div>
	</div>
</div>
</body>
</html>