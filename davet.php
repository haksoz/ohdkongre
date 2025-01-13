<!DOCTYPE html>
<html lang="TR">
<?php $page = 'davet'; ?>
<head>
	<title>1. Uluslararası Onkoloji Hemşireliği Derneği Kongresi | Davet</title>
	<?php include("head.php")?>
</head>
<body data-spy="scroll" data-target=".navbar-custom" id="page-top">
	<!-- Preloader  -->
	<div id="preloader">
		<div class="spinner">
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</div><!-- /Preloader ends -->
	<div id="page-width">
		<?php include("header.php") ?>
		<!-- Blog Page -->
		<!-- Blog Single Page  -->
		<div id="page-section">
			<section id="blog">
				<div class="container-fluid">
					<div class="jumbotron"></div>
					<div class="jumbo-heading">
                        <img src="/doc/slider-banner2.png" alt="">
					</div>
				</div><!-- /container-fluid-->
			</section><!--Section Blog ends -->
						<!-- Section Services -->
			<section class="container" id="services">
				<!-- Section heading -->
				<div class="section-heading">
					<h2 class="mt-5">Davet</h2><!-- divider -->
					<div class="hr"></div>
				</div>
				<?php include("davet-metni.php") ?>
				
			</section><!-- /section  -->
			<!-- Section team -->
		</div><!--/page-section-->

		<?php include("footer.php") ?>
	</div><!-- /page-width -->
	
    <?php include("script.php") ?>
</body>
</html>