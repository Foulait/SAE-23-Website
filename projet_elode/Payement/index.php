<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Responsive Product Design</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	
	<nav class= "navbar">
        <ul>
		<button> <a href="config.php">S'inscrire</a></button>
             <li><a href="#ACCEUIL">ACCEUIL</a></li>
			 Bonjour, <?php echo htmlspecialchars($_POST['nom']); ?>.

        </ul>
    </nav>

			 <section id="ACCEUIL">
				<div class="main">
					  <h1 class="headings">ELODE MARKET <br></h1>
						 <br>BIENVENU SUR LE SITE</h1>
					  <button class="btn">
						   AIMER
					  </button>
				</div>



	<section class="products">
		<h2>Our Products</h2>
		<div class="all-products">
			<div class="product">
				<img src="imag1.jpeg">
				<div class="product-info">
					<h4 class="product-title">FUJIFILM XT5
					</h4>
					<p class="product-price">$1029</p>
					<a class="product-btn" href="payement.php">Buy Now</a>

				</div>
			</div>
			<div class="product">
				<img src="imag4.webp">
				<div class="product-info">
					<h4 class="product-title">SONY 7R
					</h4>
					<p class="product-price">$1899</p>
					<a class="product-btn" href="payement.php">Buy Now</a>

				</div>
			</div>
			<div class="product">
				<img src="img. 2.jpg">
				<div class="product-info">
					<h4 class="product-title">CANON R6
					</h4>
					<p class="product-price">$2999</p>
					<a class="product-btn" href="payement.php">Buy Now</a>

				</div>
			</div>
			<div class="product">
				<img src="imag3.jpg">
				<div class="product-info">
					<h4 class="product-title">SONY ZV E1
						</h4>
					<p class="product-price">$629*</p>
					<a class="product-btn" href="payement.php">Buy Now</a>

				</div>
				
			</div>
			<div class="product">
				<img src="imag9.jpg">
				<div class="product-info">
					<h4 class="product-title">CANON EOS C
					</h4>
					<p class="product-price">$20000</p>
					<a class="product-btn" href="payement.php">Buy Now</a>

				</div>
				
			</div>
			<div class="product">
				<img src="imag7.jpg">
				<div class="product-info">
					<h4 class="product-title">LUMIX GH4
					</h4>
					<p class="product-price">$1099</p>
					<a class="product-btn" href="payement.php">Buy Now</a>
					
					
				</div>
				
			</div>
			<div class="product">
				<img src="img.jnp.jpg">
				<div class="product-info">
					<h4 class="product-title">CANON + ACCESOIRES
					</h4>
					<p class="product-price">$4899</p>
					<a class="product-btn" href="payement.php">Buy Now</a>
            
		</div>
	</section>


	
</body>
</html>