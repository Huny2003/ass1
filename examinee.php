<?php
$list = [
	["Dave Limasac", "Product 101", "Female", "2019-12-21", "BACKEND-WEB", "Second year", "dave@gmail.com", "dave"],
	["Dave Limasac", "Product 101", "Female", "2019-12-21", "BACKEND-WEB", "Second year", "dave@gmail.com", "dave"],
	["Dave Limasac", "Product 101", "Female", "2019-12-21", "BACKEND-WEB", "Second year", "dave@gmail.com", "dave"],
	["Dave Limasac", "Product 101", "Female", "2019-12-21", "BACKEND-WEB", "Second year", "dave@gmail.com", "dave"],
	["Dave Limasac", "Product 101", "Female", "2019-12-21", "BACKEND-WEB", "Second year", "dave@gmail.com", "dave"],
	["Dave Limasac", "Product 101", "Female", "2019-12-21", "BACKEND-WEB", "Second year", "dave@gmail.com", "dave"],
	["Dave Limasac", "Product 101", "Female", "2019-12-21", "BACKEND-WEB", "Second year", "dave@gmail.com", "dave"],
	["Dave Limasac", "Product 101", "Female", "2019-12-21", "BACKEND-WEB", "Second year", "dave@gmail.com", "dave"]

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
	<link rel="stylesheet" href="./assets/css/reset.css" />

	<link rel="stylesheet" href="./assets/css/main.css" />
	<link rel="stylesheet" href="./assets/css/examinee.css" />
	<title>Examinee</title>
</head>

<body>
	<div class="container">
		<div id="examinee" class="examinee">
			<table class="table">
				<thead>
					<th>FullName</th>
					<th>Gender</th>
					<th>Brithday</th>
					<th>Course</th>
					<th>Year level</th>
					<th>Email</th>
					<th>Password</th>
					<th>Status</th>
					<th></th>
				</thead>
				<tbody>
					<?php if ($list) {
					?>
						<?php foreach ($list as $items) : ?>
							<tr>
								<td data-label="FullName"><?php
															echo $items[0]; ?></td>
								<td data-label="Gender"><?php
														echo $items[1]; ?></td>
								<td data-label="Brithday"><?php
															echo $items[2]; ?></td>
								<td data-label="Course"><?php
														echo $items[3]; ?></td>
								<td data-label="Year level"><?php
															echo $items[4]; ?></td>
								<td data-label="Email"><?php
														echo $items[5]; ?></td>
								<td data-label="Password"><?php
															echo $items[6]; ?></td>
								<td data-label="Status">
									<span class="active">active</span>
								</td>
								<td data-label="Action">
									<button class="btn btn-update">Update</button>
								</td>
							</tr>
						<?php endforeach ?>
					<?php
					}else{
						echo "Bảng không có dữ liệu";
					} ?>

				</tbody>
			</table>
		</div>
	</div>
</body>

</html>