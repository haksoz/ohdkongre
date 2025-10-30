<!DOCTYPE html>
<html lang="TR">
    <?php $page = 'registration-accommodation'; ?>
    <?php $pageTitle = 'Registration Accommodation'; ?>

	<?php include('head.php') ?>
	<body class="homepage2-body">
		
		<!--===== PRELOADER STARTS =======-->
		<div class="preloader">
			<div class="loading-container">
				<div class="loading"></div>
				<div id="loading-icon"><img src="../doc/ohd-logo.png" alt="" /></div>
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
                <img src="../assets/img/elements/elements9.png" alt="" class="elements9" />
                <img src="../assets/img/elements/elements10.png" alt="" class="elements10" />
                <img src="../assets/img/elements/elements11.png" alt="" class="elements11" />
                <div class="img1">
                    <img src="../doc/slider-01.png" alt="" />
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2">
                        </div>
                        <div class="col-lg-4">
                            <div class="hero2-header">

                                <img src="../doc/slider-01-metin-en.png" alt="" />



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

        <div class="team-sperkers-section-area sp1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 m-auto">
                        <div class="heading2 text-center space-margin60">
                            <h2> Registration Accommodation</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="our-team-boxarea">
                            <div class="content-area">
                                <table class="table table-bordered table-striped table-hover">
                                    <colgroup>
                                        <col span="1" style="width: 50%;">
                                        <col span="1" style="width: 25%;">
                                        <col span="1" style="width: 25%;">
                                    </colgroup>
                                    <thead>
                                        <tr>
                                            <th style="">Kayıt Tipi</th>
                                            <th>xxx 2026 <br> Öncesi Fiyatlar <br>Erken Kayıt Ücreti</th>
                                            <th>xxx 2026 <br> Sonrası Fiyatlar <br>Kayıt Ücreti</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Dernek Üyesi </td>
                                            <td>9.500 TL</td>
                                            <td>10.500 TL</td>
                                        </tr>
                                        <tr>
                                            <td>Dernek Üyesi Olmayan</td>
                                            <td>10.500 TL</td>
                                            <td>11.500 TL</td>
                                        </tr>
                                        <tr>
                                            <td>Öğrenci (Lisans Öğrencisi, herhangi bir yerde çalışmadığını bir dilekçe ile beyan eden yüksek lisans ve doktora öğrencileri)</td>
                                            <td>3.000 TL</td>
                                            <td>4.000 TL</td>
                                        </tr>
                                    </tbody>
                                </table>
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
