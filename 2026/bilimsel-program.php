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
                        <div class="col-lg-2">
                        </div>
                        <div class="col-lg-4">
                            <div class="hero2-header">

                                <img src="doc/slider-01-metin.png" alt="" />



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
		<!--===== HERO AREA ENDS =======-->

        <div class="event-single-section-area sp1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 m-auto">
                        <div class="event2-header heading2 text-center">
                            <h2 class="text-anime-style-3">Bilimsel Program</h2>
                        </div>
                    </div>
                </div>
                <div class="space20"></div>

                <div class="row">
                    <div class="col-lg-12" data-aos="fade-up" data-aos-duration="1000">
                        <div class="tabs-button space-margin60">
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                        <span class="calender"><img src="assets/img/icons/calender2.svg" alt="" /></span>
                                        <span class="pl-8 d-flex flex-column">
											<span class="day">1. Gün</span>
											<span class="date">7 Mayıs, 2026</span>
										</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                                        <span class="calender"><img src="assets/img/icons/calender2.svg" alt="" /></span>
                                        <span class="pl-8 d-flex flex-column">
											<span class="day">2. Gün</span>
											<span class="date">8 Mayıs, 2026</span>
										</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link m-0" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                                        <span class="calender"><img src="assets/img/icons/calender2.svg" alt="" /> </span>
                                        <span class="pl-8 d-flex flex-column">
											<span class="day">3. Gün</span>
											<span class="date">9 Mayıs, 2026</span>
										</span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                                <h3 class="text-center">7 Mayıs, 2026</h3>
                                <h4 class="text-center">Yapım Aşamasında...</h4>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                                <h3 class="text-center">8 Mayıs, 2026</h3>
                                <h4 class="text-center">Yapım Aşamasında...</h4>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                                <h3 class="text-center">9 Mayıs, 2026</h3>
                                <h4 class="text-center">Yapım Aşamasında...</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php include('footer.php') ?>
        <?php include('script.php') ?>
	</body>
</html>
