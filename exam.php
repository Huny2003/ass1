<?php
$list = [
	"1 .) In was year the '@' chosen for its use in e-mail address?"=>["1980", "1981", 1982, " 1983"],
	"2 .) In was year the '@' chosen for its use in e-mail address?"=>["1980", "1981", 1982, " 1983"],
	"3 .) In was year the '@' chosen for its use in e-mail address?"=>["1980", "1981", 1982, " 1983"],
	"4 .) In was year the '@' chosen for its use in e-mail address?"=>["1980", "1981", 1982, " 1983"]
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
	<link rel="stylesheet" href="./assets/css/exam.css" />
	<title>Exam</title>
</head>

<body>
	<div class="container">
		<div class="exam" id="exam">
			<div class="exam-header">
				<div class="exam-info">
					<h3 class="exam-title">Another Exam</h3>
					<p class="exam-desc">Mabiisan Exam</p>
				</div>
				<div class="exam-time">
					<p class="exam-time-name">Remaining Time : <span>00:00</span></p>
					<button class="btn btn-icon">
						<i class="fa fa-cog"></i>
					</button>
				</div>
			</div>
			<div class="exam-body">
				<?php foreach ($list as $key => $items) : ?>
					<div class="exam-block">
						<p class="exam-block-title"><?php 
											echo $key; ?></p>
						<div class="exam-chosse">
							<div class="exam-chosse-up">
								<div class="exam-chosse-item">
									<input type="checkbox" name="" id="exam_question_1_answer_1" />
									<label for="exam_question_1_answer_1"><?php 
											echo $items[0]; ?></label>
								</div>
								<div class="exam-chosse-item">
									<input type="checkbox" name="" id="exam_question_1_answer_2" />
									<label for="exam_question_1_answer_2"><?php 
											echo $items[1]; ?></label>
								</div>
							</div>
							<div class="exam-chosse-bottom">
								<div class="exam-chosse-item">
									<input type="checkbox" name="" id="exam_question_1_answer_3" />
									<label for="exam_question_1_answer_3"><?php 
											echo $items[2]; ?></label>
								</div>
								<div class="exam-chosse-item">
									<input type="checkbox" name="" id="exam_question_1_answer_4" />
									<label for="exam_question_1_answer_4"><?php 
											echo $items[3]; ?></label>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div>
			<div class="exam-footer">
				<button class="btn btn-reset">
					Reset
				</button>
				<button class="btn btn-submit">
					Submit
				</button>
			</div>
		</div>
	</div>
</body>

</html>