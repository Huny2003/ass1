<?php
$list =  [
	"CCTV", "Computer Set", "Hard Disk", "Keyboard", "laptops", "Memory", "Mouse"
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
	<link rel="stylesheet" href="./assets/css/category.css" />
	<link rel="stylesheet" href="./assets/css/main.css" />
	<link rel="stylesheet" href="./assets/css/category.css" />
	<title>Category</title>
</head>

<body>
	<div class="container">
		<div id="category" class="category">
			<table class="table">
				<thead>
					<th>Name</th>
					<th colspan="2">Action</th>
				</thead>
				<tbody>
					<?php foreach ($list as $items) : ?>
						<tr>
							<td><?php echo $items;?></td>
							<td>
								<a href="" class="btn btn-edit"><i class="fa fa-edit"></i>Edit</a>
							</td>
							<td>
								<a href="" class="btn btn-delete"><i class="fa fa-times-circle"></i> Delete</a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</body>

</html>