<?php
$list = [
	["./assets/images/product.jpeg", "Product 101", 300.5, "Hard Disk"],
	[".//assets/images/product.jpeg", "Product 101", 3004, "Hard Disk"],
	[".//assets/images/product.jpeg", "Product 202", 100, "Hard Disk"]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- Loading icon -->
	<script src="https://kit.fontawesome.com/2f7cea7c40.js" crossorigin="anonymous"></script>
	<!-- Loading Font-->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet" />
	<!-- Loading Css -->
	<link rel="stylesheet" href="./assets/css/product.css" />
	<link rel="stylesheet" href="./reset.css">
	<link rel="stylesheet" href="./main.css">
	<title>Product</title>
</head>

<body>
	<div class="container">
		<div id="product" class="product">
			<h3 class="product-title">
				<span>all product</span>
			</h3>
			<div class="product-list">
				<?php foreach ($list as $items) : ?>
					<div class="product-item">
						<div class="card">
							<div class="card-header">
								<img src="<?php 
											echo $items[0]; ?>" alt="" class="img-fluid card-img" />
							</div>
							<div class="card-body">
								<p class="card-title"><?php
														echo $items[1]; ?></p>
								<p class="card-price"><?php
														echo $items[2]; ?></p>
								<p class="card-desc">Category: <span><?php
																		echo $items[3]; ?></span></p>
								<button class="card-btn">
									<i class="fa fa-shopping-cart"></i>
									View Detail
								</button>
							</div>
						</div>
					</div>
				<?php endforeach ?>


			</div>
		</div>
</body>

</html>