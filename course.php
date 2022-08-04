<?php
$list =  [
	"FRONTEND - WEB", "BACKEND - WEB", "PHP - MYSQL"
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
	<link rel="stylesheet" href="./assets/css/course.css" />
	<title>Course</title>
</head>

<body>
	<div class="container">
		<div class="course" id="course">
			<div class="course-body">
				<h3 class="course-title">Course list</h3>
			</div>
			<table class="table">
				<thead>
					<th class="th-name">Course Name</th>
					<th class="th-status">Status</th>
				</thead>
				<tbody>
					<?php foreach ($list as $items) : ?>
						<tr>
							<td data-label="FullName"><?php echo $items;?></td>
							<td class="td-action" data-label="Action">
								<button class="btn btn-delete">Delete</button>
								<button class="btn btn-update">Update</button>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</body>

</html>