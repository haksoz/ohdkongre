<?php
// Otomatik sayfa tespiti - menü active class'ı için
$currentFile = basename($_SERVER['PHP_SELF'], '.php');

$pageMap = [
    'index' => 'index',
    'organizing-committee' => 'committees',
    'scientific-committee' => 'committees',
    'general-info' => 'general-info',
    'registration-accommodation' => 'registration-accommodation',
    'scientific-program' => 'scientific-program',
    'abstract-submission' => 'abstract-submission',
    'contact' => 'contact',
    'committees' => 'committees'
];

$page = isset($pageMap[$currentFile]) ? $pageMap[$currentFile] : $currentFile;
?>
<!--=====HEADER START=======-->
<header>
    <div class="header-area homepage2 header header-sticky d-none d-lg-block" id="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-1" style="padding:0px;">
                    <div class="sol-logo" style="background-color: #ffffff; display: flex; align-items: center; height: 100%; border-radius: 0px 0px 0px 8px;">
                        <div class="site-logo" style="padding-right: 5px; padding-left: 5px;">
                            <a href="#"><img src="/doc/ohd-logo.png" alt="" /></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-11" style="padding-left:0px;">
                    <div class="menu-top-area">
                        <div class="top-menu-area tema-slogani">

                            <p class="tema-slogani">Strength, Science, and Compassion: Oncology Nursing.</p>

                            <!--
                            <ul style="padding-right: 20px;">
                                <li>
                                    <a href="mailto:salih.gonca@bosphorusmice.net"><img src="/assets/img/icons/mail1.svg" alt="" />salih.gonca@bosphorusmice.net <span> | </span></a>
                                </li>
                                <li>
                                    <a href="tel:+902162350686"><img src="/assets/img/icons/phn1.svg" alt="" />+90 (216) 235 06 86</a>
                                </li>
                            </ul>
                            -->
                            <ul>
                                <!--
                                <li class="mobile-hidden">
                                    <a href="../en/index.php">
                                        <img alt="" src="/doc/united-kingdom.png" style="max-width: 30px;">
                                    </a>
                                </li>
                                -->
                                <li class="mobile-hidden">
                                    <a href="../index.php">
                                        Türkçe
                                        <!--
                                        <img alt="" src="/doc/square.png" style="max-width: 30px;">
                                        -->
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <div class="header-elements">
                        <div class="main-menu">
                            <ul>
                                <li class="<?php echo $page == 'index' ? 'active' : '' ?>"><a href="/en/index.php">Homepage</a></li>
                                <li class="<?php echo $page == 'committees' ? 'active' : '' ?>">
                                    <a href="#">
                                        Committees
                                        <i class="fa-solid fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-padding">
                                        <li><a href="/en/organizing-committee.php">Organizing Committee</a></li>
                                        <li><a href="/en/scientific-committee.php">Scientific Committee</a></li>
                                    </ul>
                                </li>
                                <li class="<?php echo $page == 'general-info' ? 'active' : '' ?>"><a href="/en/general-info.php">Information</a></li>
                                <li class="<?php echo $page == 'registration-accommodation' ? 'active' : '' ?>"><a href="/en/registration-accommodation.php">Registration Accommodation</a></li>
                                <li class="<?php echo $page == 'scientific-program' ? 'active' : '' ?>"><a href="/en/scientific-program.php">Program</a></li>
                                <li class="<?php echo $page == 'abstract-submission' ? 'active' : '' ?>"><a href="/en/abstract-submission.php">Abstract Submission</a></li>
                                <li class="<?php echo $page == 'contact' ? 'active' : '' ?>"><a href="/en/contact.php">Contact</a></li>
                            </ul>
                        </div>
                        <div class="body-overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--=====HEADER END =======-->

<!--===== MOBILE HEADER STARTS =======-->
<div class="mobile-header mobile-haeder2 d-block d-lg-none">
    <div class="container-fluid">
        <div class="col-12">
            <div class="mobile-header-elements">
                <div class="mobile-logo" style="flex-grow: 1">
                    <a href="#"><img src="/doc/ohd-logo.png" alt="" /></a>
                </div>
                <div class="bayrak" style="display: flex; flex-grow: 4; justify-content: flex-end;">
                    <!--
                    <div class="mobile-float" style="padding-right: 20px;">
                        <a href="../en/index.php">
                            <img alt="" src="/doc/united-kingdom.png" style="max-width: 30px;">
                        </a>
                    </div>
                    -->
                    <div class="mobile-float tr" style="padding-right: 20px;">
                        <a href="../index.php">
                            Türkçe
                            <!--
                            <img alt="" src="/doc/square.png" style="max-width: 30px;">
                            -->
                        </a>
                    </div>
                </div>
                <div class="mobile-nav-icon dots-menu" style="flex-grow: 1">
                    <i class="fa-solid fa-bars-staggered"></i>
                </div>
            </div>
        </div>
        
    </div>
            <p class="tema-slogani-mobil">Strength, Science, and Compassion: Oncology Nursing.</p>

</div>

<div class="mobile-sidebar mobile-sidebar2">
    <div class="logosicon-area">
        <div class="logos">
            <img src="/doc/ohd-logo.png" alt="" style="max-width: 100px;" />
        </div>
        <div class="menu-close">
            <i class="fa-solid fa-xmark"></i>
        </div>
    </div>
    <div class="mobile-nav mobile-nav1">
        <ul class="mobile-nav-list nav-list1">

            <li class="<?php echo $page == 'index' ? 'active' : '' ?>"><a href="index.php">Homepage</a></li>
            <li class="<?php echo $page == 'committees' ? 'active' : '' ?>">
                <a href="#">Committees</a>
                <ul class="sub-menu">
                    <li><a href="/en/organizing-committee.php">Organizing Committee</a></li>
                    <li><a href="/en/scientific-committee.php">Scientific Committee</a></li>
                </ul>
            </li>
            <li class="<?php echo $page == 'general-info' ? 'active' : '' ?>"><a href="/en/general-info.php">Information</a></li>
            <li class="<?php echo $page == 'registration-accommodation' ? 'active' : '' ?>"><a href="/en/registration-accommodation.php">Registration Accommodation</a></li>
            <li class="<?php echo $page == 'scientific-program' ? 'active' : '' ?>"><a href="/en/scientific-program.php">Scientific Program</a></li>
            <li class="<?php echo $page == 'abstract-submission' ? 'active' : '' ?>"><a href="/en/abstract-submission.php">Abstract Submission</a></li>
            <li class="<?php echo $page == 'contact' ? 'active' : '' ?>"><a href="/en/contact.php">Contact</a></li>

        </ul>
    </div>
</div>
<!--===== MOBILE HEADER STARTS =======-->