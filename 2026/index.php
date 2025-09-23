<!DOCTYPE html>
<html lang="TR">
    <?php $page = 'index'; ?>
    <?php $pageTitle = 'Anasayfa'; ?>

	<?php include('head.php') ?>
	<body class="homepage2-body">
		
		<!--===== PRELOADER STARTS =======-->
		<div class="preloader">
			<div class="loading-container">
				<div class="loading"></div>
				<div id="loading-icon"><img src="doc/ohd-logo.png" alt="" /></div>
			</div>
		</div>
		<!--===== PRELOADER ENDS =======-->

		<!--===== PAGE PROGRESS START=======-->
		<div class="paginacontainer">
			<div class="progress-wrap">
				<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
					<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
				</svg>
			</div>
		</div>
		<!--===== PAGE PROGRESS END=======-->
        <?php include('header.php') ?>

		<!--===== HERO AREA STARTS =======-->
		<div class="hero2-slider-area" style="background-color: #3d3f51">
			<div class="her2-section-area">
				<img src="assets/img/elements/elements9.png" alt="" class="elements9" />
				<img src="assets/img/elements/elements10.png" alt="" class="elements10" />
				<img src="assets/img/elements/elements11.png" alt="" class="elements11" />
				<div class="img1">
					<img src="doc/slider-01.png" alt="" />
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="hero2-header">
								
								<img src="doc/slider-01-metin.png" alt="" />

								<div class="timer">
									<div class="time-box">
										<span id="days" class="time-value">119</span>
										<div class="space8"></div>
									</div>
									<div class="space14"></div>
									<div class="time-box">
										<span id="hours" class="time-value">22</span>
										<div class="space8"></div>
									</div>
									<div class="space14"></div>
									<div class="time-box">
										<span id="minutes" class="time-value">18</span>
										<div class="space8"></div>
									</div>
									<div class="space14"></div>
									<div class="time-box" style="margin: 0">
										<span id="seconds" class="time-value">44</span>
										<div class="space8"></div>
									</div>
								</div>

							</div>
						</div>
						<!--
						<div class="col-lg-3">
							<div class="arrow-btn">
								<div class="about-btnarea">
									<img src="doc/logolar.png" style="max-width: 645px;">
								</div>
							</div>
						</div>
					-->
					</div>
				</div>
			</div>

		</div>
		<div class="testimonial-arrows">
			<div class="testimonial-prev-arrow">
				<button><i class="fa-solid fa-angle-left"></i></button>
			</div>
			<div class="testimonial-next-arrow">
				<button><i class="fa-solid fa-angle-right"></i></button>
			</div>
		</div>
		<!--===== HERO AREA ENDS =======-->

		<!--===== ABOUT AREA STARTS =======-->
		<div class="about3-section-area sp1">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-12">
						<div class="about-header heading5">
							<h5 data-aos="fade-left" data-aos-duration="800">
								II. Uluslararası Onkoloji Hemşireliği Derneği Kongresi
							</h5>
							<div class="space18"></div>
							<h2 class="text-anime-style-3">Davet</h2>
							<div class="space18"></div>
							<p data-aos="fade-left" data-aos-duration="900">


								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ultrices ante sed arcu laoreet, non tempor nisl varius. Sed mollis neque vitae interdum hendrerit. Nulla vel pulvinar lectus. Proin quis commodo nunc. Vivamus mollis urna ex, quis condimentum ipsum condimentum non. Etiam condimentum semper orci, ac fermentum magna iaculis ac. Fusce purus leo, condimentum ut erat vel, scelerisque facilisis sapien. Vivamus in iaculis orci.
							</p>
							<div class="space12"></div>
							<p data-aos="fade-left" data-aos-duration="900">
								Proin finibus vehicula molestie. Duis mattis, nunc et vestibulum tempor, ipsum ipsum sodales ex, eget dignissim augue mi convallis massa. Vivamus sagittis orci et condimentum tempus. In nisl sapien, consectetur eu mattis eget, semper nec velit. Aliquam vitae magna enim. Donec vel velit neque. Vestibulum nec neque erat. Duis non rutrum sem. Donec pharetra maximus augue, eget tincidunt tellus. Donec porta, ligula nec vestibulum consequat, odio dolor vehicula lorem, quis aliquam eros mi ornare mauris. Suspendisse semper ullamcorper elementum.
							</p>
							<div class="space12"></div>
							<p data-aos="fade-left" data-aos-duration="900">
								Pellentesque dignissim imperdiet arcu id eleifend. Donec vitae sollicitudin ante. Sed aliquet risus ut nibh imperdiet, at viverra leo suscipit. Duis sapien diam, condimentum eget justo ac, rutrum posuere nisl. Vestibulum id efficitur est. In vel ultricies massa. In maximus bibendum orci vitae laoreet. Nulla facilisi. Cras et rutrum nisl, vitae fringilla tellus. Suspendisse non nibh est. Pellentesque tincidunt finibus faucibus.
							</p>
							<div class="space12"></div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!--===== ABOUT AREA ENDS =======-->

		<!--===== FOOTER AREA STARTS =======-->
        <?php include('footer.php') ?>
		<!--===== FOOTER AREA ENDS =======-->

        <?php include('script.php') ?>
	</body>
</html>
