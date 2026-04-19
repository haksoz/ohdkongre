<!DOCTYPE html>
<html lang="TR">
    <?php $page = 'program'; ?>
    <?php $pageTitle = 'Scientific Program'; ?>

	<?php include('head.php') ?>
    <link rel="stylesheet" href="/assets/css/tpk-tab.css?v=43">
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

        <section class="event_part service-dtails overflow-hidden pt-4 pb-5 space-bottom position-relative">
            <div class="container">
                <div class="common-content-box mb-40 wow fadeInUp" data-wow-delay=".3s">
                    <h1 class="mb-lg-4 mb-md-4 mb-4 text-center">Scientific Programme</h1>
                </div>

                <ul class="tabs clearfix" data-tabgroup="first-tab-group">
                    <!-- <a class="active single_event_list wow fadeInDown aragun" data-wow-delay=".3s" href="#kurs1"
                       style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;">
                        <div class="event_date">
                            <h3>07 <span>May</span></h3>
                        </div>
                        <div class="event_content">
                            <h4>Courses</h4>
                            <p>2026, Thursday</p>
                        </div>
                    </a> -->
                    <a class="active single_event_list wow fadeInDown ilkgun" data-wow-delay=".2s" href="#gun1"
                       style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;">
                        <div class="event_date">
                            <h3>08 <span>May</span></h3>
                        </div>
                        <div class="event_content">
                            <h4>Scientific Programme</h4>
                            <p>2026, Friday</p>
                        </div>
                    </a>
                    <a class="active single_event_list wow fadeInDown aragun" data-wow-delay=".3s" href="#gun2"
                       style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;">
                        <div class="event_date">
                            <h3>09 <span>May</span></h3>
                        </div>
                        <div class="event_content">
                            <h4>Scientific Programme</h4>
                            <p>2026, Saturday</p>
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
                    <!-- <div id="kurs1">
                        <div class="gun_title" style="background-color: #d3b37f;">
                            <h2>Interactive Skills Training Course in Radiation Oncology Nursing</h2>
                        </div>
                        <div class="mt-4 d-flex justify-content-center">
                            <img src="/doc/posterler/radyasyon-onkolojisi-hemsireliginde-interaktif-beceri-egitimi-kursu.jpg" class="img img-curved" alt="">
                        </div>
                    </div> -->
                    <!-- 1. GÜN - 8 MAYIS CUMA -->
                    <div id="gun1">
                        <div class="gun_title" style="background-color: #72606b;">
                            <h2>8 May 2026, Friday | Scientific Programme</h2>
                        </div>
                        <ul class="tabs clearfix" data-tabgroup="second-tab-group">
                            <li><a href="#gun1-salonA" class="active">A Salonu</a></li>
                            <li><a href="#gun1-salonB">B Salonu</a></li>
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

                                        <!-- Opening Remarks -->
                                        <tr>
                                            <td class="tg-pidv">09:00-09:30</td>
                                            <td class="tg-0pky2">Opening Remarks<br>
                                                <b>Congress Chair:</b> Perihan Güner<br>
                                                <b>Dean, Faculty of Health Sciences, Istanbul Bilgi University:</b> Zeynep Şimşek<br>
                                                <b>Rector, Istanbul Bilgi University:</b> M. Ege Yazgan
                                            </td>
                                        </tr>

                                        <!-- Fashion Show -->
                                        <tr>
                                            <td class="tg-pidv">09:30-10:00</td>
                                            <td class="tg-0pky"><b>Fashion Show:</b> Healing Hands: Nurses Empowered by Science</td>
                                        </tr>

                                        <!-- Opening Lecture 1 -->
                                        <tr>
                                            <td class="tg-pidv" rowspan="2">10:00-10:30</td>
                                            <td class="tg-0pky2"><b>Opening Lecture 1:</b> Leadership, Empowerment, and Professional Identity<br>
                                                <b>Session Chairs:</b> Sultan Kav, Sevinç Kutlutürkan<br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky">
                                                Leadership, Empowerment, and Professional Identity in Oncology Nursing<br>
                                                <b>Speaker:</b> Dimitris Protogiros
                                            </td>
                                        </tr>

                                        <!-- Break -->
                                        <tr>
                                            <td class="tg-pidv">10.30-11.00</td>
                                            <td class="tg-pidv" style="background-color: #55b9c8; color:#ffffff !important;"><b>Break</b></td>
                                        </tr>

                                        <!-- Panel-1 -->
                                        <tr>
                                            <td class="tg-pidv" rowspan="4">11:00-12:00</td>
                                            <td class="tg-0pky2">Panel 1: The Impact of Scientific and Technological Innovations on Oncology Nursing<br>
                                                <b>Session Chairs:</b> Ayfer Karadakovan, Nimet Ovayolu, Kamile Kırca</td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky">
                                                Integrating Nursing Research into the Delivery of Innovative Cancer Care<br>
                                                <b>Speaker:</b> Cherith Semple
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky">
                                                Digital Transformation, Innovative Technologies, and Clinical Decision Support Systems: The INTERVENE Project<br>
                                                <b>Speaker:</b> Nikolina Dodlek
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky">
                                                Maintaining Compassionate Care in the Face of Rapid Technological Advancement: Striking a Balance in Oncology Nursing<br>
                                                <b>Speaker:</b> Füsun Afşar
                                            </td>
                                        </tr>

                                        <!-- Satellite Symposium-1 -->
                                        <tr>
                                            <td class="tg-pidv" rowspan="3">12:00-12:30</td>
                                            <td class="tg-0pky2 position-relative">
                                                <b>Satellite Symposium 1:</b> Evidence-Based Approaches to Symptom Management<br>
                                                <b>Session Chairs:</b> Fatma Gündoğdu, Derya Subaşı Sezgin<br>
                                                <img src="/doc/musocamin.png" class="position-absolute top-0 p-2 rounded-3" style="right: 0" alt=" Mucosamin Radioderm">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky">
                                                Management of Radiodermatitis in Breast Cancer–Related Radiotherapy<br>
                                                <b>Speaker:</b> Ayşe Korkmaz
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky">
                                                Management of Mucositis in Patients Undergoing Bone Marrow Transplantation<br>
                                                <b>Speaker:</b> Gülcan Çelik
                                            </td>
                                        </tr>

                                        <!-- Lunch -->
                                        <tr>
                                            <td class="tg-pidv">12.30-13.30</td>
                                            <td class="tg-pidv" style="background-color: #55b9c8; color:#ffffff !important;"><b>LUNCH</b></td>
                                        </tr>

                                        <!-- Lecture-2 -->
                                        <tr>
                                            <td class="tg-pidv" rowspan="3">13:30-14:00</td>
                                            <td class="tg-0pky2"><b>Lecture 2:</b> Global Collaborations in Oncology Nursing<br>
                                                <b>Session Chairs:</b> Özlem Ovayolu, Remziye Semerci
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky">
                                                Global Collaborations in Oncology Nursing<br>
                                                <b>Speaker:</b> Darcy Burbage
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky">
                                                Leadership and Health Policy in Oncology Nursing<br>
                                                <b>Speaker:</b> Julia Downing
                                            </td>
                                        </tr>

                                        <!-- Panel-2 -->
                                        <tr>
                                            <td class="tg-pidv" rowspan="4">14:00-15:00</td>
                                            <td class="tg-0pky2">Panel 2: Integration of Psychosocial Care into Clinical Practice<br>
                                                <b>Session Chairs:</b> Besti Üstün, Ayşe Okanlı, Zeynep Karakuş
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky">
                                                Hope and Hopelessness from the Patient Perspective<br>
                                                <b>Speaker:</b> Behice Belkıs Çalışkan
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky">
                                                From Adversity to Strength: Psychological Resilience Mechanisms in Cancer Patients<br>
                                                <b>Speaker:</b> Yeter Sinem Üzar Özçetin
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky">
                                                Psychosexual Care in Oncology Patients<br>
                                                <b>Speaker:</b> Lorraine Grover
                                            </td>
                                        </tr>

                                        <!-- Break -->
                                        <tr>
                                            <td class="tg-pidv">15.00-15.30</td>
                                            <td class="tg-pidv" style="background-color: #55b9c8; color:#ffffff !important;"><b>BREAK</b></td>
                                        </tr>

                                        <!-- Panel-3 -->
                                        <tr>
                                            <td class="tg-pidv" rowspan="3">15:30-16:15</td>
                                            <td class="tg-0pky2"><b>Panel 3:</b> Advocacy in Oncology Nursing<br>
                                                <b>Session Chairs:</b> Öznur Usta Yeşil Balkan, Miray Aksu
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky">
                                                Tele-Oncology Nursing: The Future of Remote Monitoring and Digital Patient Education<br>
                                                <b>Speaker:</b> Pınar Bedir
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky">
                                                The Transformation of the Advocacy Mission in Oncology Nursing<br>
                                                <b>Speaker:</b> İlknur Yazıcıoğlu
                                            </td>
                                        </tr>

                                        <!-- Panel-4 -->
                                        <tr>
                                            <td class="tg-pidv" rowspan="3">16:15-17:00</td>
                                            <td class="tg-0pky2">Panel 4: Proficiency Training in Oncology Nursing and Future Perspectives: The Nurse–Patient–Clinical Care Triad<br>
                                                <b>Session Chairs:</b> Münevver Erkul, Sevgül Özdemir
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky">
                                                Proficiency Training and Professional Positioning in Oncology Nursing<br>
                                                <b>Speaker:</b> Özlem Topkaya
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky">
                                                Patient-Centered Education in Oncology Nursing: Nurse and Patient Perspectives—Current Status<br>
                                                <b>Speaker:</b> Esra Tayaz
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
                                            <td class="tg-0pky2">Panel-10: Play, Technology, and Touch: Non-Pharmacological Approaches in Pediatric Oncology Care Settings<br>
                                                <b>Session Chairs:</b> Pınar Taşpınar, Pınar Yılmaz
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky">
                                                Coping Through Play: Therapeutic Play and Communication in Pediatric Oncology<br>
                                                <b>Speaker:</b> Tuba Arpacı
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky">
                                                Symptom Management in Pediatric Oncology Using Digital Technologies<br>
                                                <b>Speaker:</b> Aslı Akdeniz Kudubeş
                                            </td>
                                        </tr>

                                        <!-- Panel-11 -->
                                        <tr>
                                            <td class="tg-pidv" rowspan="3">12:00-12:30</td>
                                            <td class="tg-0pky2">Panel-11: Gynecologic Oncology Nursing Commission<br>
                                                <b>Session Chairs:</b> Gülten Güvenç, Gönül Kurt
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky">
                                                Prevention, Screening, and Early Detection in Gynecologic Oncology Nursing: Current Status and Future Perspectives<br>
                                                <b>Speaker:</b> Ayşe Kılıç Uçar
                                            </td>
                                        </tr>
<!--                                        <tr>-->
<!--                                            <td class="tg-0pky">-->
<!--                                                The Roles of the Nurse Navigator in Gynecologic Oncology<br>-->
<!--                                                <b>Speaker:</b> Gülşen Vural-->
<!--                                            </td>-->
<!--                                        </tr>-->

                                        <!-- Lunch -->
                                        <tr>
                                            <td class="tg-pidv">12:30-13:30</td>
                                            <td class="tg-pidv" style="background-color: #55b9c8; color:#ffffff !important;"><b>LUNCH BREAK</b></td>
                                        </tr>

                                        <!-- Panel-12 -->
                                        <tr>
                                            <td class="tg-pidv" rowspan="3">13:30-14:00</td>
                                            <td class="tg-0pky2">Panel-12: Stem Cell Transplantation Nursing<br>
                                                <b>Session Chairs:</b> Yasemin Karacan, Dilek Urtekin
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky">
                                                Current Treatments and Clinical Research<br>
                                                <b>Speaker:</b> Gül Hatice Tarakçıoğlu Çelik
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky">
                                                Clinical Models and Good Clinical Practice (GCP)<br>
                                                <b>Speaker:</b> Tuğba Menekli
                                            </td>
                                        </tr>

                                        <!-- Panel-13 -->
                                        <tr>
                                            <td class="tg-pidv" rowspan="3">14:00-14:30</td>
                                            <td class="tg-0pky2">Panel-13: Patient-Reported Outcomes in Radiotherapy<br>
                                                <b>Session Chairs:</b> Ükke Karabacak, Vildan Kocatepe
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky">
                                                Integration of Patient-Reported Outcomes into Clinical Decision-Making<br>
                                                <b>Speaker:</b> Berkay Alikan
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky">
                                                The Impact of Patient-Reported Outcomes on Symptom Management and Quality of Care<br>
                                                <b>Speaker:</b> Ülkü Saygılı Düzova
                                            </td>
                                        </tr>

                                        <!-- Panel-14 -->
                                        <tr>
                                            <td class="tg-pidv" rowspan="3">14:30-15:00</td>
                                            <td class="tg-0pky2">Panel-14: What We Know and What We Don't Know: Hidden Risks and Nurse Safety in the Chemotherapy Unit<br>
                                                <b>Session Chairs:</b> Dilek Yıldırım, Zeliha Genç
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky">
                                                What Do Safety Standards Tell Us?<br>
                                                <b>Speaker:</b> Funda Çam
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky">
                                                Are Standards Enough? Silent Risks in Chemotherapy<br>
                                                <b>Speaker:</b> Zeyno Bayram
                                            </td>
                                        </tr>

                                        <!-- Break -->
                                        <tr>
                                            <td class="tg-pidv">15.00-15.30</td>
                                            <td class="tg-pidv" style="background-color: #55b9c8; color:#ffffff !important;"><b>Break</b></td>
                                        </tr>

                                        <!-- Panel-15 -->
                                        <tr>
                                            <td class="tg-pidv" rowspan="3">15:30-16:00</td>
                                            <td class="tg-0pky2">Panel-15: Nursing Care in Breast Cancer: Present and Future<br>
                                                <b>Session Chairs:</b> Özgül Karayurt, Ayla Gürsoy
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky">
                                                Evidence-Based Approaches to Improving Quality of Life During Survivorship<br>
                                                <b>Speaker:</b> Çisem Baştarcan
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky">
                                                Current Approaches to Autologous Breast Reconstruction and Nursing Care<br>
                                                <b>Speaker:</b> Başak Arı
                                            </td>
                                        </tr>

                                        <!-- Workshop 1 -->
                                        <tr>
                                            <td class="tg-pidv">16:00-17:00</td>
                                            <td class="tg-0pky2">Workshop-1: Emotional Freedom Techniques (EFTs)<br>
                                                <b>Speaker:</b> Esin Akın</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </section>
                    </div>

                    <!-- 2. GÜN - 9 MAYIS CUMARTESİ -->
                    <div id="gun2">
                        <div class="gun_title" style="background-color: #d3b37f;">
                            <h2>9 May 2026, Saturday | Scientific Programme</h2>
                        </div>
                        <ul class="tabs clearfix" data-tabgroup="third-tab-group">
                            <li><a href="#gun2-salonA" class="active">A Salonu</a></li>
                            <li><a href="#gun2-salonB">B Salonu</a></li>
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
                                            <td class="tg-0pky2">Panel-5: Interdisciplinary Collaboration and a Holistic Approach to Patient Care<br>
                                                <b>Session Chairs:</b> Gülbeyaz Can, Vildan Kocatepe, Ferhan Çetin Şeref, Ünal Önsüz
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky"><b>Physician:</b> Elvina Almuradova</td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky"><b>Oncology Nurse:</b> Zeyno Bayram</td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky"><b>Dietitian:</b> Dilşat Baş</td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky"><b>Physiotherapist:</b> Alis Kostanoğlu</td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky"><b>Consultation-Liaison Psychiatry (CLP) Nurse:</b> Nesibe Kalyoncu</td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky"><b>Academic Nurse:</b> Funda Çam</td>
                                        </tr>

                                        <!-- Break -->
                                        <tr>
                                            <td class="tg-pidv">10.30-11.00</td>
                                            <td class="tg-pidv" style="background-color: #55b9c8; color:#ffffff !important;"><b>Break</b></td>
                                        </tr>

                                        <!-- Panel-6 -->
                                        <tr>
                                            <td class="tg-pidv" rowspan="6">11:00-12:00</td>
                                            <td class="tg-0pky2">Panel-6: Message from Cancer Patient Associations<br>
                                                <b>Session Chairs:</b> Perihan Güner, Ayşin Kayış, Kadriye Sancı
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky"><b>Onko-day:</b> Füsun Önen</td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky"><b>Europadonna:</b> Violet Aroya</td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky"><b>Genç Birikim Association:</b> Salih Yüce</td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky"><b>Kanserle Dans Association:</b> Esra Çokçetin </td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky"><b>Pembe İzler Association:</b> Seral Çelik</td>
                                        </tr>

                                        <!-- Lunch -->
                                        <tr>
                                            <td class="tg-pidv">12.00-13.00</td>
                                            <td class="tg-pidv" style="background-color: #55b9c8; color:#ffffff !important;"><b>LUNCH BREAK</b></td>
                                        </tr>

                                        <!-- Panel 7 -->
                                        <tr>
                                            <td class="tg-pidv" rowspan="4">13:00-14:00</td>
                                            <td class="tg-0pky2">Panel-7: Success Stories<br>
                                                <b>Session Chairs:</b> Zeynep Şimşek, Figen Bay, Hale Sünbül
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky"><b>Success Story I</b> <br>
                                                A Song, A Play, A Hope: The Transformed Child Experience Through Therapeutic Play in Pediatric Stem Cell Transplantation Following One Touch <br>
                                                Öznur Balkan
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky"><b>Success Story II</b> <br>
                                                Development of Evidence-Based and Innovative Practices to Enhance Patient and Staff Safety in Oncology Nursing: A Clinical Transformation Story <br>
                                                İncihan Tuna
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky"><b>Success Story III</b> <br>
                                                From TÜBİTAK Research Journey to Social Awareness: Breast Cancer in Men and Digital Information Platform <br>
                                                Ceren Gürleyen
                                            </td>
                                        </tr>

                                        <!-- Panel-8 -->
                                        <tr>
                                            <td class="tg-pidv" rowspan="4">14:00-15:00</td>
                                            <td class="tg-0pky2">Panel-8: Voices of Future Oncology Nurses<br>
                                                <b>Session Chairs:</b> Sebahat Ateş, Ebru Temizsoy, Hilal Özenç
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky">
                                                How Do I Perceive Oncology Nursing? Expectations and Concerns<br>
                                                <b>Speaker:</b> Rüveyda Berk
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky">
                                                Why Did I Choose Oncology Nursing?<br>
                                                <b>Speaker:</b> Emine İlayda Kartal
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky">
                                                Is a Long-Term Career in Oncology Nursing Possible?<br>
                                                <b>Speaker:</b> Hülya Dalkılıç Bingöl
                                            </td>
                                        </tr>

                                        <!-- Break -->
                                        <tr>
                                            <td class="tg-pidv">15.00-15.30</td>
                                            <td class="tg-pidv" style="background-color: #55b9c8; color:#ffffff !important;"><b>BREAK</b></td>
                                        </tr>

                                        <!-- Panel-9 -->
                                        <tr>
                                            <td class="tg-pidv" rowspan="3">15:30-16:30</td>
                                            <td class="tg-0pky2">Panel-9: The Future of Oncology: From Environmental Sustainability to Longevity Strategies<br>
                                                <b>Session Chairs:</b> Perihan Güner, Şerife Karaca
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky">
                                                The Role of Green Oncology in Sustainable Healthcare<br>
                                                <b>Speaker:</b> Emine Gök
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky">
                                                Longevity Strategies for Cancer Prevention<br>
                                                <b>Speaker:</b> Arzu Tuna
                                            </td>
                                        </tr>

                                        <!-- Awards Ceremony -->
                                        <tr>
                                            <td class="tg-pidv">16:30-17:30</td>
                                            <td class="tg-0pky2">Awards Ceremony and Closing</td>
                                        </tr>
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
                                            <td class="tg-0pky2">Panel-16: Frailty in Geriatric Hematology/Oncology Nursing: From Assessment to Practice<br>
                                                <b>Session Chairs:</b> Yasemin Yıldırım, Elif Sözeri Öztürk</td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky">
                                                The Concept of Frailty, Its Clinical Importance, and Geriatric Assessment<br>
                                                <b>Speaker:</b> Gökhan Sezgin</td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky">
                                                Integration of Research Findings on Frailty into Clinical Practice<br>
                                                <b>Speaker:</b> Zühal Demirci</td>
                                        </tr>

                                        <!-- Panel-17 -->
                                        <tr>
                                            <td class="tg-pidv" rowspan="3">09:30-10:00</td>
                                            <td class="tg-0pky2">Panel-17: A Holistic Approach to Palliative Care<br>
                                                <b>Session Chairs:</b> Özlem Uğur, Hanife Özçelik</td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky">
                                                Compassionate Touch; Spirituality in Palliative Care<br>
                                                <b>Speaker:</b> Öznur Özdoğan</td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky">
                                                Evidence-Based Practices in Palliative Care<br>
                                                <b>Speaker:</b> Hicran Bektaş</td>
                                        </tr>

                                        <!-- Break -->
                                        <tr>
                                            <td class="tg-pidv">10.30-11.00</td>
                                            <td class="tg-pidv" style="background-color: #55b9c8; color:#ffffff !important;"><b>Break</b></td>
                                        </tr>

                                        <!-- Workshop-2 -->
                                        <tr>
                                            <td class="tg-pidv">11:00-12:00</td>
                                            <td class="tg-0pky2">Workshop-2: Crafting Article Titles That Capture the Reader's Attention<br>
                                                <b>Speaker:</b> Ayla Gürsoy</td>
                                        </tr>

                                        <!-- Lunch -->
                                        <tr>
                                            <td class="tg-pidv">12:00-13:00</td>
                                            <td class="tg-pidv" style="background-color: #55b9c8; color:#ffffff !important;"><b>LUNCH BREAK</b></td>
                                        </tr>

                                        <!-- Panel 18 -->
                                        <tr>
                                            <td class="tg-pidv" rowspan="3">13:00-13:30</td>
                                            <td class="tg-0pky2">Panel-18: Early Detection and Screening in Cancer Care and Control Among Disadvantaged Groups: The Empowering Role of Nursing<br>
                                                <b>Session Chairs:</b> Nurhan Doğan Aydın, Canan Pörücü</td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky">
                                                Access to Cancer Screening Programs: Barriers, Inequalities, and Nursing Approaches<br>
                                                <b>Speaker:</b> Elif Acar</td>
                                        </tr>
                                        <tr>
                                            <td class="tg-0pky">
                                                Innovative Nursing Practices and Best Practices in Strengthening Early Diagnosis<br>
                                                <b>Speaker:</b> Aysun Akçakaya Can</td>
                                        </tr>

                                        <!-- Workshop-3 -->
                                        <tr>
                                            <td class="tg-pidv">13:30-15:00</td>
                                            <td class="tg-0pky2">Workshop-3: Leadership in Symptom Management for Oncology Patients<br>
                                                <b>Speaker:</b> Aysel Tekeli</td>
                                        </tr>

                                        <!-- Atölye Çalışması-4
                                        <tr>
                                            <td class="tg-pidv">14:15-15:00</td>
                                            <td class="tg-0pky2">Atölye Çalışması-4: Bireysel Yaratıcılığını Farketme<br>
                                                <b>Konuşmacı:</b> Aydanur Aydın</td>
                                        </tr>
                                        -->
                                        <!-- Break -->
                                        <tr>
                                            <td class="tg-pidv">15.00-15.30</td>
                                            <td class="tg-pidv" style="background-color: #55b9c8; color:#ffffff !important;"><b>Break</b></td>
                                        </tr>

                                        <!-- Workshop-5 -->
                                        <tr>
                                            <td class="tg-pidv">15:30-17:00</td>
                                            <td class="tg-0pky2">Workshop-5: Art Therapy – The Tale of Tales: Grief, Time, and the Image of Existence<br>
                                                <b>Speaker:</b> Elif Hilal Toprak</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </section>
                    </div>

                </div>
            </div>
        </section>


        <?php include('footer.php') ?>
        <?php include('script.php') ?>
        <script src="/assets/js/tpk-tab.js"></script>

    </body>
</html>
