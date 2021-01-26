<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Course</title>
	<!-- Bootstrap CSS -->
	 <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800&amp;subset=vietnamese" rel="stylesheet">
	 <link rel="stylesheet" href="<?= base_url() ?>css/all.min.css">
	 <link rel="stylesheet" href="<?= base_url() ?>css/bootstrap.min.css">
	 <link rel="stylesheet" href="<?= base_url() ?>css/style.css">
	 <link rel="stylesheet" href="<?= base_url() ?>css/header_and_footer.css">
	 <link rel="stylesheet" href="<?= base_url() ?>css/css_all_course.css">
	 	<!-- chat bot -->
	<script>!function(s,u,b,i,z){var o,t,r,y;s[i]||(s._sbzaccid=z,s[i]=function(){s[i].q.push(arguments)},s[i].q=[],s[i]("setAccount",z),r=["widget.subiz.net","storage.googleapis"+(t=".com"),"app.sbz.workers.dev",i+"a"+(o=function(k,t){var n=t<=6?5:o(k,t-1)+o(k,t-3);return k!==t?n:n.toString(32)})(20,20)+t,i+"b"+o(30,30)+t,i+"c"+o(40,40)+t],(y=function(k){var t,n;s._subiz_init_2094850928430||r[k]&&(t=u.createElement(b),n=u.getElementsByTagName(b)[0],t.async=1,t.src="https://"+r[k]+"/sbz/app.js?accid="+z,n.parentNode.insertBefore(t,n),setTimeout(y,2e3,k+1))})(0))}(window,document,"script","subiz","acqvwspriuukzbzylxnj")</script>
	<!--end  chat -->
</head>
<body>
	<?php require 'header.php' ?>
	<section class="courses my-5" id="p-child-dkr">
		<div class="container">
			<h2 class="title text-center">Từ vựng tiếng Nhật</h2>
			<div class="row">
				 <?php foreach ($course_new as  $value): ?>
				 	<div class="col-12 col-md-6 col-lg-4 mb-5">
				 		<div class="card-img">
				 			<img class="card-img-top" src="<?= $value['image'] ?>" alt="Card image cap">
				 			<div class="card-body">
				 				<h5 class="card-title"><?= $value['title'] ?></h5>
				 				<p class="card-text"><?= $value['info'] ?></p>
				 				<a href="<?= BASE_URL() ?>Home/detailt_course/<?= $value['id'] ?>" class="btn btn-success">View detail</a>
				 			</div>
				 		</div>
				 	</div>
				 <?php endforeach ?>
				
			</div>

			<!--  end row -->


			<div class="pagination">
				<nav aria-label="Page navigation example">
					<ul class="pagination">
						<li class="page-item disabled">
							<a class="page-link" href="#" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
								<span class="sr-only">Previous</span>
							</a>
						</li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item disabled"><a class="page-link" href="#">2</a></li>
						<li class="page-item disabled"><a class="page-link" href="#">3</a></li>
						<li class="page-item disabled">
							<a class="page-link" href="#" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
								<span class="sr-only">Next</span>
							</a>
						</li>
					</ul>
				</nav>
			</div> <!-- end pagination -->

		</div><!-- end container -->
	</section>
	<?php require 'footer.php';?>
	
</body>
</html>