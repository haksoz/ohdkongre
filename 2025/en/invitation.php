<!DOCTYPE html>
<html lang="en">
<?php $page = 'invitation'; ?>
<head>
    <title>1st International Congress of Oncology Nursing Association | Invitation</title>
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
                    <div class="container">
                        <img src="/doc/slider-banner-en.png" alt="">
                    </div>
                </div>
            </div><!-- /container-fluid-->
        </section><!--Section Blog ends -->
        <!-- Section Services -->
        <section class="container" id="services">
            <!-- Section heading -->
            <div class="section-heading">
                <h2 class="mt-5">Invitation</h2><!-- divider -->
                <div class="hr"></div>
            </div>
            <?php include("invitation-text.php") ?>

        </section><!-- /section  -->
        <!-- Section team -->
    </div><!--/page-section-->

    <?php include("footer.php") ?>
</div><!-- /page-width -->

<?php include("script.php") ?>
</body>
</html>
