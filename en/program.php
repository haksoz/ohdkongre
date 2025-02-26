<!DOCTYPE html>
<html lang="en">
<?php $page = 'program'; ?>

<head>
    <title>1st International Oncology Nursing Association Congress | Scientific Program</title>
    <?php include("head.php") ?>
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
    <?php include("header.php") ?><!-- Blog Page -->
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
            </div>
        </section>
        <section class="container-fluid" id="about">
            <!-- Section heading -->
            <div class="section-heading" style="margin-top: 30px;">
                <h2>SCIENTIFIC PROGRAM</h2><!-- divider -->
                <div class="hr"></div>
            </div><!-- Parallax object -->
            <div class="container">
                <div class="row justify-content-center" style="padding-top: 10%;padding-bottom: 10%;">
                    <div class="text-center">
                        <h4 class="text-center">Under Construction</h4>
                    </div>
                </div>
            </div><!-- /container -->
        </section><!-- /section ends-->
    </div><!--/page-section-->
    <?php include("footer.php") ?>
</div><!-- /page-width -->
<?php include("script.php") ?>
<div class="modal micromodal-slide" id="modal-1" aria-hidden="false" style="position:relative;z-index:99999;">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title" style="width:80%;">
            <header class="modal__header" style="height: 20px;">
                <h2 class="modal__title" id="modal-1-title">
                    Kurs Detayı
                </h2>
                <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
            </header>
            <main class="modal__content" id="modal-1-content" style="margin-top:1rem;">
                <!-- Görsel buraya dinamik olarak yüklenecek -->
            </main>
        </div>
    </div>
</div>
<script src="/js/micromodal.min.js?v=43543"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const courseButtons = document.querySelectorAll('.course-detail-btn');

        courseButtons.forEach(button => {
            button.addEventListener('click', function() {
                const courseName = this.getAttribute('data-course');
                const modalContent = document.getElementById('modal-1-content');
                modalContent.innerHTML = `<img src="/doc/kurslar/${courseName}.jpg?v=2" class="w-100" alt="Kurs Detayı">`;

                MicroModal.show('modal-1', {
                    onShow: modal => console.info(`${modal.id} is shown`),
                    openClass: 'is-open',
                    disableScroll: true,
                    disableFocus: false,
                    awaitOpenAnimation: false,
                    awaitCloseAnimation: false,
                    debugMode: true
                });
            });
        });
    });
</script>
<link rel="stylesheet" href="/css/modal.css??v=01327">
</body>

</html>