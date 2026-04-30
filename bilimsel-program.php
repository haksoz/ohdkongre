<!DOCTYPE html>
<html lang="TR">
<?php $page = 'index'; ?>
<?php $pageTitle = 'bilimsel-program'; ?>

<?php include('head.php') ?>
<link rel="stylesheet" href="/assets/css/tpk-tab.css?v=43">
<script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>
<link rel="stylesheet" href="/assets/css/modal.css">
<style>
    .course-eye-icon {
        width: 24px;
        height: 24px;
        pointer-events: none;
    }
    .course-detail-cell {
        cursor: pointer;
        transition: background-color 0.2s;
    }
    .course-detail-cell:hover {
        background-color: #f0f0f0;
    }
    #course-modal .modal__container {
        max-width: 800px;
    }
</style>
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

<!-- Service Details Section Start -->
<section class="event_part service-dtails overflow-hidden pt-4 pb-5 space-bottom position-relative">
    <div class="container">
        <div class="common-content-box mb-40 wow fadeInUp" data-wow-delay=".3s">
            <h1 class="mb-lg-4 mb-md-4 mb-4 text-center">Bilimsel Program</h1>
        </div>

        <ul class="tabs clearfix" data-tabgroup="first-tab-group">
            <a class="active single_event_list wow fadeInDown aragun" data-wow-delay=".3s" href="#kurs1"
               style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;">
                <div class="event_date">
                    <h3>07 <span>Mayıs</span></h3>
                </div>
                <div class="event_content">
                    <h4>Kurslar</h4>
                    <p>2026, Perşembe</p>
                </div>
            </a>
            <a class="active single_event_list wow fadeInDown ilkgun" data-wow-delay=".2s" href="#gun1"
               style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;">
                <div class="event_date">
                    <h3>08 <span>Mayıs</span></h3>
                </div>
                <div class="event_content">
                    <h4>Bilimsel Program</h4>
                    <p>2026, Cuma</p>
                </div>
            </a>
            <a class="active single_event_list wow fadeInDown aragun" data-wow-delay=".3s" href="#gun2"
               style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;">
                <div class="event_date">
                    <h3>09 <span>Mayıs</span></h3>
                </div>
                <div class="event_content">
                    <h4>Bilimsel Program</h4>
                    <p>2026, Cumartesi</p>
                </div>
            </a>
        </ul>

        <div id="first-tab-group" class="tabgroup" style="box-shadow: 0 3px 10px rgba(0, 0, 0, 0.3);">
            <style type="text/css">
                .tg {
                    border-collapse: collapse;
                    border-spacing: 0;
                    margin: 0px auto;
                    width: 100%;
                }

                .tg td {
                    font-size: 14px;
                    overflow: hidden;
                    padding: 10px 5px;
                    word-break: normal;
                }

                .tg th {
                    font-size: 18px;
                    font-weight: normal;
                    overflow: hidden;
                    padding: 10px 5px;
                    word-break: normal;
                }

                .tg .tg-smvl {
                    background-color: #6db1a0;
                    color: #fff !important;
                    font-weight: bold !important;
                    text-align: center;
                    vertical-align: middle;
                    border: 1px solid #ddd;
                }

                .tg .tg-0pky {
                    background-color: #ecdcc5;
                    text-align: left;
                    vertical-align: initial;
                    border-radius: 0;
                    color: #000000 !important;
                    border-right: 2px solid #fff;
                }

                .tg .tg-0pky2 {
                    background-color: #ecce9d;
                    text-align: left;
                    vertical-align: initial;
                    border-radius: 0;
                    color: #000000 !important;
                    border-right: 2px solid #fff;
                }

                .tg .tg-pidv {
                    background-color: #6db1a0;
                    color: #fff !important;
                    font-weight: 500;
                    text-align: center;
                    vertical-align: middle;
                }

                .tg .tg-pidv2 {
                    background-color: #0c6c6b;
                    color: #fff !important;
                    font-weight: 800 !important;
                    text-align: center;
                    vertical-align: middle;
                    font-size: 15px;
                }

                .tg .font-weight-600 {
                    font-weight: 600;
                }

                .tg tr {
                    border: 3px solid #fff;
                }

                @media screen and (max-width: 991px) {
                    .tabs {
                        padding: 0px 26px 10px 26px !important;
                    }
                }

                @media screen and (max-width: 767px) {
                    .tabgroup div {
                        padding: 10px 0px 10px 0px;
                    }

                    .tg {
                        min-width: 700px;
                        overflow-x: scroll;
                    }

                    .tg col {
                        width: auto !important;
                    }

                    .tg-wrap {
                        overflow-x: auto;
                        -webkit-overflow-scrolling: touch;
                        margin: auto 0px;
                    }

                    .tabs {
                        padding: 0px 26px 10px 26px !important;
                    }
                }
            </style>
            <div id="kurs1">
                <div class="gun_title" style="background-color: #d3b37f;">
                    <h2>Kurslar</h2>
                </div>
                <div class="container ">
                    <h5 style="margin-top: 20px;text-transform: none;color:#ed1c25;text-align: center;">Kurslar Bilgi Üniversitesi Dolapdere Kampüsü'nde düzenlenecektir.<br>
                        Detaylı bilgi için :<a href="tel:+905303243824">0530 324 38 24</a> arayabilirsiniz</h5>

                    <table class="table table-bordered table-striped table-hover mt-4">
                        <colgroup>
                            <col span="1" style="width: 80%;">
                            <col span="1" style="width: 20%;">
                        </colgroup>
                        <thead style="background-color: #604c59; color: #ffffff;">
                        <tr>
                            <th style="vertical-align: middle;">Kurs Adı</th>
                            <th style="vertical-align: middle; text-align: center;">Detay</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Pediatri Onkoloji Hemşireliğinde Kanıta Dayalı Uygulamalar Kursu</td>
                            <td class="text-center course-detail-cell" data-image="/doc/posterler/pediatri-onkoloji-hemsireliginde-kanita-dayali-uygulamalar-kursu.jpg"><img src="/doc/ico-show.svg" class="course-eye-icon" alt="Detay"></td>
                        </tr>
                        <tr>
                            <td>Onkoloji Hemşireliğinde Temel Kanser Eğitimi Kursu</td>
                            <td class="text-center course-detail-cell" data-image="/doc/posterler/onkoloji-hemsireliginde-temel-kanser-egitimi-kursu.jpg"><img src="/doc/ico-show.svg" class="course-eye-icon" alt="Detay"></td>
                        </tr>
                        <tr>
                            <td>İmmünoterapi Kursu</td>
                            <td class="text-center course-detail-cell" data-image="/doc/posterler/immunoterapi-kursu.jpg"><img src="/doc/ico-show.svg" class="course-eye-icon" alt="Detay"></td>
                        </tr>
                        <tr>
                            <td>Kanserde Tamamlayıcı ve Bütünleşik Sağlık Uygulamaları Kursu</td>
                            <td class="text-center course-detail-cell" data-image="/doc/posterler/kanserde-tamamlayici-ve-butunlesik-saglik-uygulamalari-kursu.jpg"><img src="/doc/ico-show.svg" class="course-eye-icon" alt="Detay"></td>
                        </tr>
                        <tr>
                            <td>Meme Kanseri Yolculuğunu Anlamak: Sağ Kalımı Güçlendiren Bütüncül Bakım ve Uzun Yaşam Stratejileri Kursu</td>
                            <td class="text-center course-detail-cell" data-image="/doc/posterler/meme-kanseri-yolculugunu-anlamak-sagkalimi-guclendiren-butuncul-bakim-ve-uzun-yasam-stratejileri-kursu.jpg?v=2"><img src="/doc/ico-show.svg" class="course-eye-icon" alt="Detay"></td>
                        </tr>
                        <tr>
                            <td>Radyasyon Onkolojisi Hemşireliğinde İnteraktif Beceri Eğitimi Kursu</td>
                            <td class="text-center course-detail-cell" data-image="/doc/posterler/radyasyon-onkolojisi-hemsireliginde-interaktif-beceri-egitimi-kursu.jpg"><img src="/doc/ico-show.svg" class="course-eye-icon" alt="Detay"></td>
                        </tr>
                        <tr>
                            <td>Temel Düzey Kök Hücre Nakli Hemşireliği Kursu</td>
                            <td class="text-center course-detail-cell" data-image="/doc/posterler/temel-duzey-kok-hucre-nakli-hemsireligi-kursu.jpg"><img src="/doc/ico-show.svg" class="course-eye-icon" alt="Detay"></td>
                        </tr>
                        </tbody>
                    </table>

                </div>

                <!-- Course Modal -->
                <div class="modal micromodal-slide" id="course-modal" aria-hidden="true">
                    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
                        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="course-modal-title" style="max-width: 800px;">
                            <header class="modal__header" style="height: 20px;">
                                <h2 class="modal__title" id="course-modal-title"></h2>
                                <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
                            </header>
                            <main class="modal__content" id="course-modal-content" style="margin-top: 1rem;">
                                <img id="course-poster-img" src="" alt="Kurs Poster" style="width: 100%;">
                            </main>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 1. GÜN - 8 MAYIS CUMA -->
            <div id="gun1">
                <div class="gun_title" style="background-color: #72606b;">
                    <h2>8 Mayıs 2026, Cuma | Bilimsel Program</h2>
                </div>
                <ul class="tabs clearfix" data-tabgroup="second-tab-group">
                    <li><a href="#gun1-salonA" class="active">A Salonu</a></li>
                    <li><a href="#gun1-salonB">B Salonu</a></li>
                    <li><a href="#gun1-sozel1">Sözel Bildiriler</a></li>
                </ul>

                <section id="second-tab-group" class="tabgroup">
                    <!-- A SALONU -->
                    <div id="gun1-salonA">
                        <div class="tg-wrap">
                            <table class="tg">
                                <colgroup>
                                    <col style="width: 110px">
                                    <col style="width: calc(100% - 110px)">
                                </colgroup>

                                <!-- Açılış Konuşmaları -->
                                <tr>
                                    <td class="tg-pidv">09:00-09:30</td>
                                    <td class="tg-0pky2">Açılış Konuşmaları<br>
                                        <b>Kongre Başkanı:</b> Perihan Güner<br>
                                        <b>İstanbul Bilgi Ü. Sağlık Bilimleri Fakültesi Dekanı:</b> Zeynep Şimşek<br>
                                        <b>İstanbul Bilgi Ü. Rektörü:</b> M. Ege Yazgan
                                    </td>
                                </tr>

                                <!-- Defile -->
                                <tr>
                                    <td class="tg-pidv">09:30-10:00</td>
                                    <td class="tg-0pky">Defile: İyileştiren Eller, Bilimle Güçlenen Hemşireler</td>
                                </tr>

                                <!-- Açılış Konferansı-1 -->
                                <tr>
                                    <td class="tg-pidv" rowspan="2">10:00-10:30</td>
                                    <td class="tg-0pky2">Açılış Konferansı-1: Liderlik, Güçlendirme ve Profesyonel Kimlik<br>
                                        <b>Oturum Başkanları:</b> Sultan Kav, Sevinç Kutlutürkan<br>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky">
                                        Onkoloji Hemşireliğinde Liderlik, Güçlendirme ve Mesleki Kimlik<br>
                                        <b>Konuşmacı:</b> Annie Young
                                    </td>
                                </tr>

                                <!-- Ara -->
                                <tr>
                                    <td class="tg-pidv">10.30-11.00</td>
                                    <td class="tg-pidv" style="background-color: #55b9c8; color:#ffffff !important;"><b>Ara</b></td>
                                </tr>

                                <!-- Panel-1 -->
                                <tr>
                                    <td class="tg-pidv" rowspan="4">11:00-12:00</td>
                                    <td class="tg-0pky2">Panel-1: Bilimsel ve Teknolojik Yeniliklerin Onkoloji Hemşireliğine Yansıması<br>
                                        <b>Oturum Başkanları:</b> Ayfer Karadakovan, Nimet Ovayolu, Kamile Kırca</td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky">
                                        Yenilikçi Kanser Bakımının Sunumunda Hemşirelik Araştırmalarının Entegrasyonu<br>
                                        <b>Konuşmacı:</b> Cherith Semple
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky">
                                        Dijital Dönüşüm, Yenilikçi Teknolojiler ve Klinik Karar Destek Sistemleri: <em>iNTERVENE</em> projesi<br>
                                        <b>Konuşmacı:</b> Nikolina Dodlek
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky">
                                        Teknoloji Hızlanırken İnsani Bakımı Korumak: Onkoloji Hemşireliğinde Denge Arayışı<br>
                                        <b>Konuşmacı:</b> Ayşe Gül Parlak
                                    </td>
                                </tr>

                                <!-- Uydu Sempozyumu-1 -->
                                <tr>
                                    <td class="tg-pidv" rowspan="3">12:00-12:30</td>
                                    <td class="tg-0pky2 position-relative">
                                        Uydu Sempozyumu-1: Semptom Yönetiminde Kanıta Dayalı Çözüm Yolları<br>
                                        <b>Oturum Başkanları:</b> Fatma Gündoğdu, Derya Subaşı Sezgin<br>
                                        <img src="/doc/musocamin.png" class="position-absolute top-0 p-2 rounded-3" style="right: 0" alt=" Mucosamin Radioderm">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky">
                                        Meme Kanseri İlişkili Radyoterapide Radyodermatitin Yönetimi<br>
                                        <b>Konuşmacı:</b> Ayşe Korkmaz
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky">
                                        Kemik İliği Nakli Hastalarında Mukozitin Yönetimi<br>
                                        <b>Konuşmacı:</b> Gülcan Çelik
                                    </td>
                                </tr>

                                <!-- Öğle Yemeği -->
                                <tr>
                                    <td class="tg-pidv">12.30-13.30</td>
                                    <td class="tg-pidv" style="background-color: #55b9c8; color:#ffffff !important;"><b>ÖĞLE YEMEĞİ</b></td>
                                </tr>

                                <!-- Konferans-2 -->
                                <tr>
                                    <td class="tg-pidv" rowspan="3">13:30-14:00</td>
                                    <td class="tg-0pky2">Konferans-2: Onkoloji Hemşireliğinde Küresel İşbirlikleri<br>
                                        <b>Oturum Başkanları:</b> Özlem Ovayolu, Remziye Semerci
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky">
                                        Onkoloji Hemşireliğinde Küresel İş Birlikleri<br>
                                        <b>Konuşmacı:</b> Darcy Burbage
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky">
                                        Onkoloji Hemşireliğinde Liderlik ve Sağlık Politikaları<br>
                                        <b>Konuşmacı:</b> Julia Downing
                                    </td>
                                </tr>

                                <!-- Panel-2 -->
                                <tr>
                                    <td class="tg-pidv" rowspan="4">14:00-15:00</td>
                                    <td class="tg-0pky2">Panel-2: Psikososyal Bakımın Klinik Uygulamaya Entegrasyonu<br>
                                        <b>Oturum Başkanları:</b>  Perihan Güner, Ayşe Okanlı, Zeynep Karakuş
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky text-capitalize">
                                        Hasta perspektifinden umut ve umutsuzluk<br>
                                        <b>Konuşmacı:</b> Behice Belkıs Çalışkan
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky">
                                        Zorluktan Güce Kanser hastalarında psikolojık dayanıklılık mekanizmaları<br>
                                        <b>Konuşmacı:</b> Yeter Sinem Üzar Özçetin
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky">
                                        Onkoloji Hastalarında Psikoseksüel Bakım<br>
                                        <b>Konuşmacı:</b> Lorraine Grover
                                    </td>
                                </tr>

                                <!-- Ara -->
                                <tr>
                                    <td class="tg-pidv">15.00-15.30</td>
                                    <td class="tg-pidv" style="background-color: #55b9c8; color:#ffffff !important;"><b>Ara</b></td>
                                </tr>

                                <!-- Panel-3 -->
                                <tr>
                                    <td class="tg-pidv" rowspan="3">15:30-16:15</td>
                                    <td class="tg-0pky2">Panel -3: Onkoloji Hemşireliğinde Savunuculuk<br>
                                        <b>Oturum Başkanları:</b> Öznur Usta Yeşil Balkan, Miray Aksu
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky">
                                        Tele-Onkoloji Hemşireliği: Uzaktan İzlem ve Dijital Hasta Eğitiminin Geleceği<br>
                                        <b>Konuşmacı:</b> Pınar Bedir
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky">
                                        Onkoloji Hemşireliğinde Savunuculuk Misyonunun Dönüşümü<br>
                                        <b>Konuşmacı:</b> İlknur Yazıcıoğlu
                                    </td>
                                </tr>

                                <!-- Panel-4 -->
                                <tr>
                                    <td class="tg-pidv" rowspan="3">16:15-17:00</td>
                                    <td class="tg-0pky2">Panel 4: Onkoloji Hemşiresi Yetkinlik Eğitimi ve Gelecek Perspektifi Hemşire, Hasta ve Klinik Üçgeni<br>
                                        <b>Oturum Başkanları:</b> Münevver Erkul, Sevgül Özdemir
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky">
                                        Onkoloji Hemşireliğinde Yetkinlik Eğitimi ve Profesyonel Konum<br>
                                        <b>Konuşmacı:</b> Özlem Topkaya
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky">
                                        Onkoloji Hemşireliğinde Hasta Odaklı Eğitim, Hemşire ve Hasta Perspektifi: Güncel Durum<br>
                                        <b>Konuşmacı:</b> Esra Tayaz
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <!-- B SALONU -->
                    <div id="gun1-salonB">
                        <div class="tg-wrap">
                            <table class="tg">
                                <colgroup>
                                    <col style="width: 110px">
                                    <col style="width: calc(100% - 110px)">
                                </colgroup>

                                <!-- Panel-10 -->
                                <tr>
                                    <td class="tg-pidv" rowspan="3">11:00-12:00</td>
                                    <td class="tg-0pky2">Panel-10: Oyun Teknoloji ve Dokunuş: Pediatrik Onkoloji Bakım Ortamında Nonfarmakolojik Yaklaşımlar<br>
                                        <b>Oturum Başkanları:</b> Pınar Taşpınar, Pınar Yılmaz
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky">
                                        Oyun Yoluyla Baş Etme: Pediatrik Onkolojide Terapötik Oyun ve İletişim<br>
                                        <b>Konuşmacı:</b> Tuba Arpacı
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky">
                                        Dijital Teknolojilerle Pediatrik Onkolojide Semptom Yönetimi<br>
                                        <b>Konuşmacı:</b> Aslı Akdeniz Kudubeş
                                    </td>
                                </tr>

                                <!-- Panel-11 -->
                                <tr>
                                    <td class="tg-pidv" rowspan="3">12:00-12:30</td>
                                    <td class="tg-0pky2">Panel-11: Jinekolojik Kanser Hemşireliği Komisyonu<br>
                                        <b>Oturum Başkanları:</b> Gülten Güvenç, Gönül Kurt
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky">
                                        Jinekolojik Onkoloji Hemşireliğinde Önleme, Tarama ve Erken Tanı: Mevcut Durum ve Gelecek Perspektifleri<br>
                                        <b>Konuşmacı:</b> Ayşe Kılıç Uçar
                                    </td>
                                </tr>
                                                                <tr>
                                                                    <td class="tg-0pky">
                                                                        Jinekolojik Onkolojide Navigatör Hemşirenin Rolleri<br>
                                                                        <b>Konuşmacı:</b> Filiz Ünal Toprak
                                                                    </td>
                                                                </tr>

                                <!-- Öğle Yemeği -->
                                <tr>
                                    <td class="tg-pidv">12:30-13:30</td>
                                    <td class="tg-pidv" style="background-color: #55b9c8; color:#ffffff !important;"><b>ÖĞLE YEMEĞİ</b></td>
                                </tr>

                                <!-- Panel-12 -->
                                <tr>
                                    <td class="tg-pidv" rowspan="3">13:30-14:00</td>
                                    <td class="tg-0pky2">Panel-12: Kök Hücre Nakil Hemşireliği<br>
                                        <b>Oturum Başkanları:</b> Yasemin Karacan, Dilek Urtekin
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky">
                                        Güncel Tedavi ve Klinik Araştırmalar<br>
                                        <b>Konuşmacı:</b> Gül Hatice Tarakçıoğlu Çelik
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky">
                                        Klinik Modeller ve İyi Klinik Uygulamaları<br>
                                        <b>Konuşmacı:</b> Tuğba Menekli
                                    </td>
                                </tr>

                                <!-- Panel-13 -->
                                <tr>
                                    <td class="tg-pidv" rowspan="3">14:00-14:30</td>
                                    <td class="tg-0pky2">Panel-13: Radyoterapide Hasta Bildirimli Ölçümler<br>
                                        <b>Oturum Başkanları:</b> Ükke Karabacak, Vildan Kocatepe
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky">
                                        Hasta Bildirimli Sonuçların Klinik Karar Verme Sürecine Entegrasyonu<br>
                                        <b>Konuşmacı:</b> Berkay Alikan
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky">
                                        Hasta Bildirimli Sonuçların Semptom Yönetimi ve Tedavi Kalitesine Etkisi<br>
                                        <b>Konuşmacı:</b> Ülkü Saygılı Düzova
                                    </td>
                                </tr>

                                <!-- Panel-14 -->
                                <tr>
                                    <td class="tg-pidv" rowspan="3">14:30-15:00</td>
                                    <td class="tg-0pky2">Panel-14: Kemoterapi Ünitesinde Bilinenler, Bilinmeyenler: Görünmeyen Riskler ve Hemşire Güvenliği<br>
                                        <b>Oturum Başkanları:</b> Dilek Yıldırım, Zeliha Genç
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky">
                                        Güvenlik Standartlar Ne Diyor?<br>
                                        <b>Konuşmacı:</b> Funda Çam
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky">
                                        Standartlar Yetiyor mu? Kemoterapide Sessiz Riskler<br>
                                        <b>Konuşmacı:</b> Zeyno Bayram
                                    </td>
                                </tr>

                                <!-- Ara -->
                                <tr>
                                    <td class="tg-pidv">15.00-15.30</td>
                                    <td class="tg-pidv" style="background-color: #55b9c8; color:#ffffff !important;"><b>Ara</b></td>
                                </tr>

                                <!-- Panel-15 -->
                                <tr>
                                    <td class="tg-pidv" rowspan="3">15:30-16:00</td>
                                    <td class="tg-0pky2">Panel-15: Meme Kanserinde Hemşirelik Bakımının Bugünü ve Yarını<br>
                                        <b>Oturum Başkanları:</b> Özgül Karayurt, Ayla Gürsoy
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky text-capitalize">
                                        Sağ kalım sürecinde yaşam kalitesini arttıran kanıta dayalı yaklaşımlar<br>
                                        <b>Konuşmacı:</b> Çisem Baştarcan
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky">
                                        Öz Doku ile Meme Rekonstrüksiyonunda Güncel Yaklaşımlar ve Hemşirelik Bakımı<br>
                                        <b>Konuşmacı:</b> Başak Arı
                                    </td>
                                </tr>

                                <!-- Atölye Çalışması 1 -->
                                <tr>
                                    <td class="tg-pidv">16:00-17:00</td>
                                    <td class="tg-0pky2">Atölye Çalışması-1: Duygusal Özgürlük Teknikleri (EFT Emotional Freedom Techniques)<br>
                                        <b>Konuşmacı:</b> Esin Akın</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <!-- Sözel Bildiriler 1 -->
                    <div id="gun1-sozel1">
                        <div class="tg-wrap">
                            <?php include('sozel-bildiriler-1.php') ?>
                        </div>
                    </div>
                </section>
            </div>

            <!-- 2. GÜN - 9 MAYIS CUMARTESİ -->
            <div id="gun2">
                <div class="gun_title" style="background-color: #d3b37f;">
                    <h2>9 Mayıs 2026, Cumartesi | Bilimsel Program</h2>
                </div>
                <ul class="tabs clearfix" data-tabgroup="third-tab-group">
                    <li><a href="#gun2-salonA" class="active">A Salonu</a></li>
                    <li><a href="#gun2-salonB">B Salonu</a></li>
                    <li><a href="#gun2-sozel2">Sözel Bildiriler</a></li>
                </ul>

                <section id="third-tab-group" class="tabgroup">
                    <!-- A SALONU -->
                    <div id="gun2-salonA">
                        <div class="tg-wrap">
                            <table class="tg">
                                <colgroup>
                                    <col style="width: 110px">
                                    <col style="width: calc(100% - 110px)">
                                </colgroup>

                                <!-- Panel-5 -->
                                <tr>
                                    <td class="tg-pidv" rowspan="7">09:00-10:30</td>
                                    <td class="tg-0pky2">Panel-5: İnterdisipliner İşbirliği ve Hastaya Bütüncül Yaklaşım<br>
                                        <b>Oturum Başkanları:</b> Gülbeyaz Can, Vildan Kocatepe, Ferhan Çetin Şeref, Ünal Önsüz
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky"><b>Hekim:</b> Meltem Dağdelen</td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky"><b>Onkoloji Hemşiresi:</b> Zeyno Bayram</td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky"><b>Diyetisyen:</b> Dilşat Baş</td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky"><b>Fizyoterapist:</b> Alis Kostanoğlu</td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky"><b>KLP Hemşiresi:</b> Nesibe Kalyoncu</td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky"><b>Akademisyen Hemşire:</b> Funda Çam</td>
                                </tr>

                                <!-- Ara -->
                                <tr>
                                    <td class="tg-pidv">10.30-11.00</td>
                                    <td class="tg-pidv" style="background-color: #55b9c8; color:#ffffff !important;"><b>Ara</b></td>
                                </tr>

                                <!-- Panel-6 -->
                                <tr>
                                    <td class="tg-pidv" rowspan="6">11:00-12:00</td>
                                    <td class="tg-0pky2">Panel-6: Kanser Hasta Derneklerinden Mesaj Var<br>
                                        <b>Oturum Başkanları:</b> Perihan Güner, Ayşin Kayış, Kadriye Sancı
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky"><b>Onko-day:</b> Güzin Arbaş</td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky"><b>Europadonna:</b> Violet Aroya</td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky"><b>Genç Birikim Derneği:</b> Salih Yüce</td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky"><b>Kanserle Dans:</b> Esra Çokçetin </td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky"><b>Pembe İzler:</b> Seral Çelik</td>
                                </tr>

                                <!-- Öğle Yemeği -->
                                <tr>
                                    <td class="tg-pidv">12.00-13.00</td>
                                    <td class="tg-pidv" style="background-color: #55b9c8; color:#ffffff !important;"><b>ÖĞLE YEMEĞİ</b></td>
                                </tr>

                                <!-- Panel 7 -->
                                <tr>
                                    <td class="tg-pidv" rowspan="4">13:00-14:00</td>
                                    <td class="tg-0pky2">Panel-7: Başarı Öyküleri<br>
                                        <b>Oturum Başkanları:</b> Zeynep Şimşek, Figen Bay, Hale Sünbül
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky"><b>Başarı Öyküsü-I</b> <br>
                                        Bir Şarkı, Bir Oyun, Bir Umut: Bir Dokunuşun Ardından Pediatrik Kök Hücre Nakli Sürecinde Terapötik Oyunla Değişen Çocuk Deneyimi <br>
                                        Öznur Balkan
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky"><b>Başarı Öyküsü-II</b> <br>
                                        Onkoloji Hemşireliğinde Hasta ve Çalışan Güvenliğini Artırmaya Yönelik Kanıta Dayalı ve İnovatif Uygulamaların Geliştirilmesi: Bir Klinik Dönüşüm Öyküsü <br>
                                        İncihan Tuna
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky"><b>Başarı Öyküsü-III</b> <br>
                                        TÜBİTAK Araştırma Yolculuğundan Toplumsal Farkındalığa: Erkeklerde Meme Kanseri ve Dijital Bilgilendirme Platformu <br>
                                        Ceren Gürleyen
                                    </td>
                                </tr>

                                <!-- Panel-8 -->
                                <tr>
                                    <td class="tg-pidv" rowspan="4">14:00-15:00</td>
                                    <td class="tg-0pky2">Panel-8: Geleceğin Onkoloji Hemşirelerini Dinliyoruz<br>
                                        <b>Oturum Başkanları:</b> Sebahat Ateş, Ebru Temizsoy, Hilal Özenç
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky">
                                        Onkoloji Hemşireliğine Nasıl Bakıyorum? Beklenti ve Kaygılar<br>
                                        <b>Konuşmacı:</b> Rüveyda Berk
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky">
                                        Neden Onkoloji Hemşireliğini Seçtim?<br>
                                        <b>Konuşmacı:</b> Emine İlayda Kartal
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky">
                                        Onkoloji Hemşireliğinde Uzun Soluklu Bir Kariyer Mümkün mü?<br>
                                        <b>Konuşmacı:</b> Hülya Dalkılıç Bingöl
                                    </td>
                                </tr>

                                <!-- Ara -->
                                <tr>
                                    <td class="tg-pidv">15.00-15.30</td>
                                    <td class="tg-pidv" style="background-color: #55b9c8; color:#ffffff !important;"><b>Ara</b></td>
                                </tr>

                                <!-- Panel-9 -->
                                <tr>
                                    <td class="tg-pidv" rowspan="3">15:30-16:30</td>
                                    <td class="tg-0pky2">Panel-9: Geleceğin Onkolojisi: Çevresel Sürdürülebilirlikten Uzun Ömür Stratejilerine<br>
                                        <b>Oturum Başkanları:</b> Besti Üstün, Şerife Karaca
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky">
                                        Sürdürülebilir Sağlık Hizmetlerinde Yeşil Onkolojinin Yeri<br>
                                        <b>Konuşmacı:</b> Emine Gök
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky">
                                        Kanserden Korunmada Longevity (Uzun Yaşam) Stratejileri<br>
                                        <b>Konuşmacı:</b> Arzu Tuna
                                    </td>
                                </tr>

                                <!-- Ödül Töreni -->
                                <!--                                <tr>-->
                                <!--                                    <td class="tg-pidv">16:30-17:30</td>-->
                                <!--                                    <td class="tg-0pky2">Ödül Töreni ve Kapanış</td>-->
                                <!--                                </tr>-->
                            </table>
                        </div>
                    </div>

                    <!-- B SALONU -->
                    <div id="gun2-salonB">
                        <div class="tg-wrap">
                            <table class="tg">
                                <colgroup>
                                    <col style="width: 110px">
                                    <col style="width: calc(100% - 110px)">
                                </colgroup>

                                <!-- Panel-16 -->
                                <tr>
                                    <td class="tg-pidv" rowspan="3">09:00-09:30</td>
                                    <td class="tg-0pky2">Panel-16: Geriatrik Hematoloji/Onkoloji Hemşireliğinde Kırılganlık: Değerlendirmeden Uygulamaya<br>
                                        <b>Oturum Başkanları:</b> Yasemin Yıldırım, Elif Sözeri Öztürk</td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky">
                                        Kırılganlık Kavramı, Klinik Önemi ve Geriatrik Değerlendirme<br>
                                        <b>Konuşmacı:</b> Gökhan Sezgin</td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky">
                                        Kırılganlık Araştırma Bulgularının Klinik Uygulamaya Entegrasyonu<br>
                                        <b>Konuşmacı:</b> Zühal Demirci</td>
                                </tr>

                                <!-- Panel-17 -->
                                <tr>
                                    <td class="tg-pidv" rowspan="3">09:30-10:00</td>
                                    <td class="tg-0pky2">Panel-17: Palyatif Bakımda Bütüncül Yaklaşım<br>
                                        <b>Oturum Başkanları:</b> Özlem Uğur, Hanife Özçelik</td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky">
                                        Merhamet ve Şefkatle Dokunuş; Palyatif Bakımda Maneviyat<br>
                                        <b>Konuşmacı:</b> Funda Eldemir</td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky">
                                        Palyatif Bakımda Kanıta Dayalı Uygulamalar<br>
                                        <b>Konuşmacı:</b> Hicran Bektaş</td>
                                </tr>

                                <!-- Ara -->
                                <tr>
                                    <td class="tg-pidv">10.30-11.00</td>
                                    <td class="tg-pidv" style="background-color: #55b9c8; color:#ffffff !important;"><b>Ara</b></td>
                                </tr>

                                <!-- Atölye Çalışması-2 -->
                                <tr>
                                    <td class="tg-pidv">11:00-12:00</td>
                                    <td class="tg-0pky2">Atölye Çalışması-2: Okuyucuya Kanca Atan Makale Başlığı Oluşturma<br>
                                        <b>Konuşmacı:</b> Ayla Gürsoy</td>
                                </tr>

                                <!-- Öğle Yemeği -->
                                <tr>
                                    <td class="tg-pidv">12:00-13:00</td>
                                    <td class="tg-pidv" style="background-color: #55b9c8; color:#ffffff !important;"><b>ÖĞLE YEMEĞİ</b></td>
                                </tr>

                                <!-- Panel 18 -->
                                <tr>
                                    <td class="tg-pidv" rowspan="3">13:00-13:30</td>
                                    <td class="tg-0pky2">Panel-18: Dezavantajlı Gruplarda Kanserle Mücadelede Erken Tanı ve Tarama: Hemşireliğin Güçlendirici Rolü<br>
                                        <b>Oturum Başkanları:</b> Nurhan Doğan Aydın, Canan Pörücü</td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky">
                                        Kanser Tarama Programlarına Erişim: Engeller, Eşitsizlikler ve Hemşirelik Yaklaşımları<br>
                                        <b>Konuşmacı:</b> Elif Acar</td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky">
                                        Erken Tanıyı Güçlendirmede Yenilikçi Hemşirelik Uygulamaları ve İyi Örnekler<br>
                                        <b>Konuşmacı:</b> Aysun Akçakaya Can</td>
                                </tr>

                                <!-- Atölye Çalışması-3 -->
                                <tr>
                                    <td class="tg-pidv">13:30-15:00</td>
                                    <td class="tg-0pky2">Atölye Çalışması-3: Onkoloji Hastasının Semptom Yönetiminde Liderlik<br>
                                        <b>Konuşmacı:</b> Aysel Tekeli</td>
                                </tr>

                                <!-- Atölye Çalışması-4
                                <tr>
                                    <td class="tg-pidv">14:15-15:00</td>
                                    <td class="tg-0pky2">Atölye Çalışması-4: Bireysel Yaratıcılığını Farketme<br>
                                        <b>Konuşmacı:</b> Aydanur Aydın</td>
                                </tr>
                                -->
                                <!-- Ara -->
                                <tr>
                                    <td class="tg-pidv">15.00-15.30</td>
                                    <td class="tg-pidv" style="background-color: #55b9c8; color:#ffffff !important;"><b>Ara</b></td>
                                </tr>

                                <!-- Atölye Çalışması-5 -->
                                <tr>
                                    <td class="tg-pidv">15:30-17:00</td>
                                    <td class="tg-0pky2">Atölye Çalışması-5: Yas Süreci Yönetimi<br>
                                        <b>Konuşmacı:</b> Elif Hilal Toprak</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <!-- Sözel Bildiriler 2 -->
                    <div id="gun2-sozel2">
                        <div class="tg-wrap">
                           <?php include('sozel-bildiriler-2.php') ?>
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </div>
</section>


<?php include('footer.php') ?>
<?php include('script.php') ?>

<!-- Tabs Script -->
<script src="/assets/js/tpk-tab.js"></script>
<script>
    document.querySelectorAll('.course-detail-cell').forEach(cell => {
        cell.addEventListener('click', function() {
            const imagePath = this.getAttribute('data-image');
            document.getElementById('course-poster-img').src = imagePath;
            MicroModal.show('course-modal', {
                openClass: 'is-open',
                disableScroll: true,
                disableFocus: false,
                awaitOpenAnimation: false,
                awaitCloseAnimation: false,
                debugMode: false
            });
        });
    });
</script>
</body>
</html>
