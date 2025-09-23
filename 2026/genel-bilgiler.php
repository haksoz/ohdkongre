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

		<!--===== ABOUT AREA STARTS =======-->
        <div class="choose-section-area sp2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 m-auto">
                        <div class="heading2 text-center space-margin60">
                            <h2>Genel Bilgiler</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="choose-widget-boxarea">
                            <div class="content-area">
                                <a href="#">Toplantı Adı</a>
                                <div class="space16"></div>
                                <p>2. Uluslararası Onkoloji Hemşireliği Derneği Kongresi</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="choose-widget-boxarea">
                            <div class="content-area">
                                <a href="#">Toplantı Yeri</a>
                                <div class="space16"></div>
                                <p>
                                    İstanbul Bilgi Üniversitesi Santral İstanbul Kampüsü
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="choose-widget-boxarea">
                            <div class="content-area">
                                <a href="#">Toplantı Tarihi</a>
                                <div class="space16"></div>
                                <p>07 - 09 Mayıs 2026 </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="choose-widget-boxarea">
                            <div class="content-area">
                                <a href="#">Toplantı Dili:</a>
                                <div class="space16"></div>
                                <p>Kongrenin resmi dili Türkçe’dir.</p>
                            </div>
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
