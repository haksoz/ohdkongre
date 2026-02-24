<!DOCTYPE html>
<html lang="TR">
    <?php $page = 'index'; ?>
    <?php $pageTitle = 'Anasayfa'; ?>

	<?php include('head.php') ?>
	<body class="homepage2-body">
		

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

        <?php include('banner-area.php') ?>

        <div class="team-sperkers-section-area sp1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 m-auto">
                        <div class="heading2 text-center space-margin60">
                            <h2> Kurullar</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="our-team-boxarea">
                            <div class="content-area">
                                <a href="">Bilimsel Kurul</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="our-team-boxarea">
                            <div class="content-area">
                                <a href="">Düzenleme Kurulu</a>
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
