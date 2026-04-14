<?php
// Otomatik sayfa tespiti - menü active class'ı için
$currentFile = basename($_SERVER['PHP_SELF'], '.php');

$pageMap = [
    'index' => 'index',
    'duzenleme-kurulu' => 'kurullar',
    'bilimsel-kurul' => 'kurullar',
    'genel-bilgiler' => 'genel-bilgiler',
    'kayit-konaklama' => 'kayit-konaklama',
    'kurslar' => 'kurslar',
    'bilimsel-program' => 'bilimsel-program',
    'bildiri-gonderimi' => 'bildiri-gonderimi',
    'iletisim' => 'iletisim',
    'kurullar' => 'kurullar'
];

$page = isset($pageMap[$currentFile]) ? $pageMap[$currentFile] : $currentFile;
?>
<!--=====HEADER START=======-->
<header>
    <div class="header-area homepage2 header header-sticky d-none d-lg-block" id="header">
        <div class="top-info-bar">
            <a href="ulasim.php" class="info-bar-link">
                <p class="">İstanbul Bilgi Üniversitesi santralistanbul Kampüsü'ne nasıl gelebilirim?</p>
            </a>
        </div>
        <div class="container header-container">
            <div class="row">
                <div class="col-lg-1" style="padding:0px;">
                    <div class="sol-logo" style="background-color: #ffffff; display: flex; align-items: center; height: 100%; border-radius: 0px 0px 0px 8px;">
                        <div class="site-logo" style="padding-right: 5px; padding-left: 5px;">
                            <a href="/index.php"><img src="doc/ohd-logo.png" alt="" /></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-11" style="padding-left:0px;">
                    <div class="menu-top-area">
                        <div class="top-menu-area tema-slogani">
                            
                            <p class="tema-slogani">Güç, Bilim ve Şefkat: Onkoloji Hemşireliği</p>
                            <!--
                            <ul style="padding-right: 20px;">
                                <li>
                                    <a href="mailto:ohdkongre@bosphorusmice.net"><img src="assets/img/icons/mail1.svg" alt="" />ohdkongre@bosphorusmice.net <span> | </span></a>
                                </li>
                                <li>
                                    <a href="tel:+902162350686"><img src="assets/img/icons/phn1.svg" alt="" />+90 (216) 235 06 86</a>
                                </li>
                            </ul>
                            -->
                            <ul>
                                <li class="mobile-hidden">
                                    <a href="en/index.php">
                                        English
                                        <!--
                                        <img alt="" src="doc/united-kingdom.png" style="max-width: 30px;">
                                        -->
                                    </a>
                                </li>
                                <!--
                                <li class="mobile-hidden">
                                    <a href="index.php">
                                        <img alt="" src="doc/square.png" style="max-width: 30px;">
                                    </a>
                                </li>
                                -->
                            </ul>

                        </div>
                    </div>
                    <div class="header-elements">
                        <div class="main-menu">
                            <ul>
                                <li class="<?php echo $page == 'index' ? 'active' : '' ?>"><a href="index.php">Anasayfa</a></li>
                                <li class="<?php echo $page == 'kurullar' ? 'active' : '' ?>">
                                    <a href="#">
                                        Kurullar
                                        <i class="fa-solid fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-padding">
                                        <li><a href="duzenleme-kurulu.php">Düzenleme Kurulu</a></li>
                                        <li><a href="bilimsel-kurul.php">Bilimsel Kurul</a></li>
                                    </ul>
                                </li>
                                <li class="<?php echo $page == 'genel-bilgiler' ? 'active' : '' ?>"><a href="genel-bilgiler.php">Genel Bilgiler</a></li>
                                <li class="<?php echo $page == 'kayit-konaklama' ? 'active' : '' ?>"><a href="kayit-konaklama.php">Kayıt & Konaklama</a></li>
                                <li class="<?php echo $page == 'kurslar' ? 'active' : '' ?>"><a href="kurslar.php">Kurslar</a></li>
                                <li class="<?php echo $page == 'bilimsel-program' ? 'active' : '' ?>"><a href="bilimsel-program.php">Bilimsel Program</a></li>
                                <li class="<?php echo $page == 'bildiri-gonderimi' ? 'active' : '' ?>"><a href="bildiri-gonderimi.php">Bildiri Gönderimi</a></li>
                                <li class="<?php echo $page == 'iletisim' ? 'active' : '' ?>"><a href="iletisim.php">İletişim</a></li>
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
<div class="mobile-header mobile-haeder2 d-block d-lg-none" style="padding-top:0px;">
    <div class="top-info-bar" style="margin-bottom:15px;">
        <a href="ulasim.php" class="info-bar-link">
            <p class="">İstanbul Bilgi Üniversitesi santralistanbul Kampüsü'ne nasıl gelebilirim?</p>
        </a>
     </div>
    <div class="container-fluid">
        <div class="col-12">
            <div class="mobile-header-elements">
                <div class="mobile-logo" style="flex-grow: 1">
                    <a href="#"><img src="doc/ohd-logo.png" alt="" /></a>
                </div>
                <div class="bayrak" style="display: flex; flex-grow: 4; justify-content: flex-end;">
                    <div class="mobile-float" style="padding-right: 20px;">
                        <a href="en/index.php">
                            English
                            <!--
                            <img alt="" src="doc/united-kingdom.png" style="max-width: 30px;">
                            -->
                        </a>
                    </div>
                    <!--
                    <div class="mobile-float tr" style="padding-right: 20px;">
                        <a href="index.php">
                            <img alt="" src="doc/square.png" style="max-width: 30px;">
                        </a>
                    </div>
                    -->
                </div>
                <div class="mobile-nav-icon dots-menu" style="flex-grow: 1">
                    <i class="fa-solid fa-bars-staggered"></i>
                </div>
            </div>
        </div>
    </div>
            <p class="tema-slogani-mobil">Güç, Bilim ve Şefkat: Onkoloji Hemşireliği</p>

</div>

<div class="mobile-sidebar mobile-sidebar2">
    <div class="logosicon-area">
        <div class="logos">
            <img src="doc/ohd-logo.png" alt="" style="max-width: 100px;" />
        </div>
        <div class="menu-close">
            <i class="fa-solid fa-xmark"></i>
        </div>
    </div>
    <div class="mobile-nav mobile-nav1">
        <ul class="mobile-nav-list nav-list1">

            <li class="<?php echo $page == 'index' ? 'active' : '' ?>"><a href="index.php">Anasayfa</a></li>
            <li class="<?php echo $page == 'kurullar' ? 'active' : '' ?>">
                <a href="#">Kurullar</a>
                <ul class="sub-menu">
                    <li><a href="duzenleme-kurulu.php">Düzenleme Kurulu</a></li>
                    <li><a href="bilimsel-kurul.php">Bilimsel Kurul</a></li>
                </ul>
            </li>
            <li class="<?php echo $page == 'genel-bilgiler' ? 'active' : '' ?>"><a href="genel-bilgiler.php">Genel Bilgiler</a></li>
            <li class="<?php echo $page == 'kayit-konaklama' ? 'active' : '' ?>"><a href="kayit-konaklama.php">Kayıt & Konaklama</a></li>
            <li class="<?php echo $page == 'kurslar' ? 'active' : '' ?>"><a href="kurslar.php">Kurslar</a></li>
            <li class="<?php echo $page == 'bilimsel-program' ? 'active' : '' ?>"><a href="bilimsel-program.php">Bilimsel Program</a></li>
            <li class="<?php echo $page == 'bildiri-gonderimi' ? 'active' : '' ?>"><a href="bildiri-gonderimi.php">Bildiri Gönderimi</a></li>
            <li class="<?php echo $page == 'iletisim' ? 'active' : '' ?>"><a href="iletisim.php">İletişim</a></li>

        </ul>
    </div>
</div>
<!--===== MOBILE HEADER STARTS =======-->