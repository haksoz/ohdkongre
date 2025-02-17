<!-- Navbar -->
<nav class="navbar navbar-custom navbar-fixed-top" id="navbar-custom">
	<div class="container">
		<!-- Logo and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button class="navbar-toggle" data-target="#navbar-brand" data-toggle="collapse" type="button"><i class="fa fa-bars"></i></button> 
			<!-- 
			<div class="navbar-brand page-scroll">
				<a href="index-demo.php">
					<img alt="" class="img-responsive" src="/doc/onkoloji-hemsireligi-dernegi-logo.png">
				</a>
			</div>
		-->
		</div><!-- /.navbar-header -->

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="navbar-brand">
			<ul class="nav navbar-nav page-scroll navbar-right">
				<li class="<?php echo $page == 'index' ? 'active' : '' ?>">
					<a href="/index.php">Anasayfa</a>
				</li>
				<li class="<?php echo $page == 'davet' ? 'active' : '' ?>">
					<a href="/davet.php">Davet</a>
				</li>
                <li class="dropdown <?php echo $page == 'kurullar' ? 'active' : '' ?>">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Kurullar<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="/duzenleme-kurulu.php">Düzenleme Kurulu</a>
                        </li>
                        <li>
                            <a href="/bilimsel-kurul.php">Bilimsel Kurul</a>
                        </li>
                    </ul>
                </li>
				<li class="<?php echo $page == 'genel-bilgiler' ? 'active' : '' ?>">
					<a href="/genel-bilgiler.php">Genel Bilgiler</a>
				</li>
				<li class="<?php echo $page == 'kayit-konaklama' ? 'active' : '' ?>">
					<a href="/kayit-konaklama.php">Kayıt & Konaklama</a>
				</li>
				<li class="<?php echo $page == 'program' ? 'active' : '' ?>">
					<a href="/program.php">Bilimsel Program</a>
				</li>
                <li class="<?php echo $page == 'kurslar' ? 'active' : '' ?>">
					<a href="/kurslar.php">Kurslar</a>
				</li>
				<li class="<?php echo $page == 'bildiri' ? 'active' : '' ?>">
					<a href="/bildiri-gonderimi.php">Bildiri Gönderimi</a>
				</li>
				<li class="<?php echo $page == 'iletisim' ? 'active' : '' ?>">
					<a href="/iletisim.php">İletişim</a>
				</li>
				<li>
                         <a href="/en/index.php">
                         	<img alt="" src="doc/united-kingdom.png" style="max-width: 30px;"></a>
                     </li>
                     <li>
                         <a href="/index.php">
                         	<img alt="" src="doc/square.png" style="max-width: 30px;"></a>
                     </li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /container -->
</nav><!-- /nav -->