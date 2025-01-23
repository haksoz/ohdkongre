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
					<a href="/en/index.php">Homepage</a>
				</li>
				<li class="<?php echo $page == 'invitation' ? 'active' : '' ?>">
					<a href="/en/invitation.php">Invitation</a>
				</li>
                <li class="dropdown <?php echo $page == 'committees' ? 'active' : '' ?>">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Committees<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="/en/organizing-committee.php">Organizing Committee</a>
                        </li>
                        <li>
                            <a href="/en/scientific-committee.php">Scientific Committee</a>
                        </li>
                    </ul>
                </li>
				<li class="<?php echo $page == 'general-information' ? 'active' : '' ?>">
					<a href="/en/general-info.php">General İnformation</a>
				</li>
				<li class="<?php echo $page == 'registration-accommodation' ? 'active' : '' ?>">
					<a href="/en/registration-accommodation.php">Registration & Accommodation</a>
				</li>
				<li class="<?php echo $page == 'program' ? 'active' : '' ?>">
					<a href="/en/program.php">Scientific Program</a>
				</li>
                <li class="<?php echo $page == 'courses' ? 'active' : '' ?>">
					<a href="/en/courses.php">Courses</a>
				</li>
				<li class="<?php echo $page == 'abstract' ? 'active' : '' ?>">
					<a href="/en/abstract-submission.php">Abstract Submission</a>
				</li>
				<li class="<?php echo $page == 'contact' ? 'active' : '' ?>">
					<a href="/en/contact.php">Contact</a>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /container -->
</nav><!-- /nav -->