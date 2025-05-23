<!DOCTYPE html>
<html lang="EN">
<?php $page = 'index'; ?>
<head>
    <title>1st International Oncology Nursing Association Congress | Home</title>
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
    <?php include ("header.php") ?>
    <!-- Home Page -->
    <div class="home" id="main">
        <div class="relative">
            <img class="banner-img banner-desktop" src="/doc/ohd-slider-en.png" alt="">
            <img class="banner-img banner-mobil" src="/doc/ohd-slider-en.png" alt="">
        </div>
        <!-- Section Services -->
        <section >
            <div class="container">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-6 wow fadeInLeft news-addon-one animated" data-wow-delay="0ms" style="visibility: visible; animation-delay: 0ms; animation-name: fadeInLeft;">
                        <a href="/en/registration-accommodation.php">
                            <div class="serviceBox bg-color2" style="padding:4px 0 4px 0; margin-top: 0px;">
                                <!-- service image-->
                                <div class="service-content text-light">
                                    <h4 class="title" style="padding-left: 0px; padding-right: 0px;">Registration & Accommodation</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-6 wow fadeInRight news-addon-one animated" data-wow-delay="0ms" style="visibility: visible; animation-delay: 0ms; animation-name: fadeInRight;">
                        <a href="/en/program.php">
                            <div class="serviceBox bg-color1" style="padding-right: 0px; padding-left: 0px; margin-top: 0px;">
                                <!-- service image-->
                                <div class="service-content text-light">
                                    <h4 class="title" style="padding-left: 0px; padding-right: 0px;">Scientific Program</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-6 wow fadeInLeft news-addon-one animated" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInLeft;">
                        <a href="/en/abstract-submission.php">
                            <div class="serviceBox bg-color3" style="padding-right: 0px; padding-left: 0px; margin-top: 0px;">
                                <div class="service-content text-light">
                                    <h4 class="title" style="padding-left: 0px; padding-right: 0px;">Abstract Submission</h4>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <section class="container">
            <!-- Section heading -->

            <div class="section-heading">
                <h2>Invitation</h2><!-- divider -->
                <div class="hr"></div>
            </div>
            <?php include("invitation-text.php") ?>

        </section><!-- /section  -->

        <section class="container-fluid small-section" id="testimonials">
            <div class="section-heading">
                <h2 class="text-light">General Information</h2><!-- divider -->
                <div class="hr"></div>
            </div><!-- Testimonial Slider -->
            <div class="container">
                <div class="owl-carousel" id="testimonial-slider">
                    <!-- Testimonial 1 -->
                    <div class="testimonial">
                        <div class="description">
                            <p>
                                <b>Congress Date and Place:</b><br>
                                The 1st International Oncology Nursing Association Congress will be held between 21-25 May 2025 at Ankara Gazi University Rectorate Campus Technology Faculty Tashkent Building Congress Halls.
                            </p>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="description">
                            <p>
                                <b>Badge: </b> <br>
                                All participants and accompanying persons are required to wear their badges at the entrance to the congress centre, during scientific sessions, stand areas and other social programmes in order to ensure the healthy running and safety of the congress. Guests without badges will not be able to participate in congress activities.
                            </p>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="description">
                            <p>
                                <b>Certificate of Participation: </b><br>
                                PartiParticipation certificates will be sent digitally to all participants of the scientific programme to those who complete and submit the online questionnaire after the Congress.
                            </p>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="description">
                            <p>
                                <b>Letter of Invitation: </b><br>
                                An invitation letter will be sent to the congress participants who have completed the registration process upon request. This invitation letter is only intended to help the participants to obtain permission from the institutions to which they are affiliated and will not provide any financial support to the participant.
                            </p>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="description">
                            <p>
                                <b>Exhibition Area: </b><br>
                                During the congress, pharmaceutical and medical device companies will be able to exhibit their products in the area reserved for them in the symposium centre. The exhibition area will be open throughout the congress.
                            </p>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="description">
                            <p>
                                <b>Organiser: </b><br>
                                The Organising Committee has appointed Bosphorus Mice as the Official Agent of the Meeting. We kindly ask you to contact Bosphorus Mice for any request within the framework of the meeting.
                            </p>
                        </div>
                    </div>

                </div><!--/Testimonial Slider -->
            </div><!--/container -->
        </section><!-- /Section -->
    </div><!-- /main-->

    <?php include("footer.php") ?>

</div><!-- /page-width -->
<?php include("script.php") ?>
</body>
</html>
