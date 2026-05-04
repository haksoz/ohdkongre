<!DOCTYPE html>
<html lang="TR">
<?php $page = 'index'; ?>
<?php $pageTitle = 'Bildiri Gönderimi'; ?>

<?php include('head.php') ?>
<link rel="stylesheet" href="/assets/css/tpk-tab.css?v=43">
<script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>
<link rel="stylesheet" href="/assets/css/modal.css">
<body class="homepage2-body">


<!--===== PAGE PROGRESS START=======-->
<div class="paginacontainer">
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
        </svg>
    </div>
</div>
<!--===== PAGE PROGRESS END=======-->
<?php include('header.php') ?>

<?php include('banner-area.php') ?>

<div class="team-sperkers-section-area sp1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 m-auto">
                <div class="heading2 text-center space-margin60">
                    <h2> Bildiri Sonuçları</h2>
                    <!--                                                         <h4 style="margin-top: 20px;text-transform: none;color:#ed1c25;">Bildiri Gönderimi Son Tarihi 24 Nisan 23:59</h4> -->
                </div>
            </div>
        </div>


        <div class="text-center">
            <a href="https://www.abstractmodule.com/2026ohdkongre/?plng=tur" target="_blank" class="abstract-button">
                <img src="/doc/abs.png">
            </a>
        </div>
        <!-- Service Details Section Start -->
        <div class="event_part service-dtails overflow-hidden pt-4 pb-5 space-bottom position-relative container">
            <ul class="tabs clearfix" data-tabgroup="first-tab-group">
                <a class="active single_event_list wow fadeInDown ilkgun" data-wow-delay=".2s" href="#gun1"
                   style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;">

                        <div class="event_date">
                            <h3>SB</h3>
                        </div>
                        <div class="event_content">
                            <h4>Sözel Bildiri <br> Programı</h4>
                        </div>
                </a>
                <a class="active single_event_list wow fadeInDown aragun" data-wow-delay=".3s" href="#gun2"
                   style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;">

                        <div class="event_date">
                            <h3>PB</h3>
                        </div>
                        <div class="event_content">
                            <h4>Poster Bildiri <br> Programı</h4>
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
                        padding: 3px 5px;
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
                <!-- Sözel Bildiriler -->
                <div id="gun1">
                    <div class="gun_title" style="background-color: #d3b37f;">
                        <h2>Sözel Bildiri Programı</h2>
                    </div>
                    <ul class="tabs clearfix" data-tabgroup="second-tab-group">
                        <li><a href="#gun1-salonA" class="active">8 Mayıs 2026, Cuma</a></li>
                        <li><a href="#gun1-salonB">9 Mayıs 2026, Cumartesi</a></li>
                    </ul>
                    <div id="second-tab-group" class="tabgroup">
                        <!-- A SALONU -->
                        <div id="gun1-salonA">
                            <div class="tg-wrap">
                                <?php include('sozel-bildiriler-1.php') ?>
                            </div>
                        </div>
                        <!-- B SALONU -->
                        <div id="gun1-salonB">
                            <div class="tg-wrap">
                                <?php include('sozel-bildiriler-2.php') ?>
                            </div>
                        </div>
                        <!-- Sözel Bildiriler 1 -->
                        <div id="gun1-sozel1">
                            <div class="tg-wrap">
                                <?php include('sozel-bildiriler-1.php') ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2. GÜN - 9 MAYIS CUMARTESİ -->
                <div id="gun2">
                    <div class="gun_title" style="background-color: #72606b;">
                        <h2>Poster Bildiri Programı</h2>
                    </div>
                    <ul class="tabs clearfix" data-tabgroup="third-tab-group">
                        <li><a href="#gun2-salonA" class="active">8 Mayıs 2026, Cuma</a></li>
                        <li><a href="#gun2-salonB">9 Mayıs 2026, Cumartesi</a></li>
                    </ul>
                    <div id="third-tab-group" class="tabgroup">
                        <!-- A SALONU -->
                        <div id="gun2-salonA">
                            <div class="tg-wrap">
                                <?php include('poster-bildiriler-1.php') ?>
                            </div>
                        </div>
                        <!-- B SALONU -->
                        <div id="gun2-salonB">
                            <div class="tg-wrap">
                                <?php include('poster-bildiriler-2.php') ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="our-team-boxarea bildiri-gonderimi">
            <div class="content-area text-start">
                <!-- Bildiriler Tablo Sonu -->

                <h3>1. Bildiri Gönderim Kuralları</h3>
                <ol>
                    <li>Bildiriler yalnızca kongre web sitesi üzerinden Online Bildiri Sistemi aracılığıyla
                        gönderilebilecektir.
                        <ul>
                            <li>E-posta, faks veya posta yoluyla gönderilen bildiriler kabul edilmeyecektir.</li>
                        </ul>
                    </li>
                    <li>Bildiri göndermeden önce, online sisteme kayıt yaptırılması gerekmektedir. Daha önce bir üyelik
                        hesabınız yoksa, sistem üzerinden yeni bir hesap oluşturabilirsiniz.
                    </li>
                    <li>Her katılımcı en fazla <b>iki bildiri</b> gönderebilir. Daha fazla sayıda bildiri gönderilmesi
                        durumunda her bir bildiri için 1000 TL bildiri ücreti alınacaktır.
                    </li>
                    <li>Bildiriler, sistem üzerinden gönderildiği şekilde yayınlanacağı için yazım hatalarına dikkat
                        edilmelidir. Tüm yazım hatalarından yazarlar sorumludur.
                    </li>
                    <li>Bildirinin kabul edilmesi durumunda, bildiriyi sunacak yazarın kongre kaydını tamamlaması
                        zorunludur. Aksi takdirde sunum yapılamayacak ve bildiri kongre özet kitabında
                        yayınlanmayacaktır.
                    </li>
                </ol>

                <h3>2. Bildiri Kategorileri</h3>
                <p>Kongreye aşağıdaki kategoriler başta olmak üzere onkoloji hemşireliğiyle ilgili tüm konularda sözlü
                    ve poster bildiri gönderimi yapılabilir:</p>
                <ul>
                    <li>Kanserden Korunma</li>
                    <li>Kanserde Erken Tanı ve Tarama</li>
                    <li>Kanser Cerrahisi</li>
                    <li>Kemoterapi</li>
                    <li>Hedefe Yönelik Tedavi</li>
                    <li>İmmünoterapi</li>
                    <li>Endokrin Tedavi</li>
                    <li>Radyasyon Onkolojisi</li>
                    <li>Hematopoetik Kök Hücre Nakli</li>
                    <li>Tamamlayıcı ve Bütüncül Bakım Yaklaşımları</li>
                    <li>Pediatrik Onkoloji</li>
                    <li>Jineonkoloji</li>
                    <li>Meme Bakım Hemşireliği</li>
                    <li>Sağkalım ve Rehabilitasyon</li>
                    <li>Psikoonkoloji</li>
                    <li>Geriatrik Onkoloji</li>
                    <li>Palyatif Bakım</li>
                    <li>Hasta ve Ailesinin Eğitimi</li>
                    <li>Semptom Yönetimi</li>
                    <li>Hasta ve Çalışan Güvenliği</li>
                    <li>Yönetim, Liderlik ve Savunuculuk</li>
                    <li>Araştırma</li>
                    <li>Teknolojik Gelişmeler ve İnovasyon</li>
                </ul>

                <h3>3. Bildiri Özet Gönderim Kuralları</h3>
                <ol>
                    <li>Bildiri özetleri, <b>Türkçe ve İngilizce</b> olarak hazırlanmalı ve sisteme yüklenmelidir.</li>
                    <li>İngilizce ve Türkçe özetin her biri (başlık, yazar adı, soyadı, kurum bilgileri ve anahtar
                        kelimeler hariç) <b>400 kelimeyi geçmemelidir.</b></li>
                    <li>Özetler, <b>Times New Roman</b> yazı tipinde, <b>11 punto</b> büyüklüğünde ve <b>1.5 satır
                            aralığı</b> ile hazırlanmalıdır.
                    </li>
                    <li>Özet başlığı:
                        <ul>
                            <li>Çalışmanın içeriğini yansıtmalı, kısa ve öz olmalı, kısaltma içermemelidir.</li>
                            <li>Türkçe başlıklarda yalnızca ilk harf büyük yazılmalı, İngilizce başlıklarda ise "on, of"
                                gibi edatlar küçük harfle yazılmalıdır.
                            </li>
                        </ul>
                    </li>
                    <li>Yazar isimlerinde akademik unvan kullanılmamalıdır. İsimler yalnızca ilk harf büyük olacak
                        şekilde yazılmalıdır.
                    </li>
                    <li>Yazarların çalıştıkları kurumların isim ve adresleri (üniversite adı, fakültesi/bölümü, ili ve
                        ülkesi) mutlaka belirtilmelidir.
                    </li>
                    <li>Özet içinde kısaltma kullanılması gerekiyorsa, kısaltmanın ilk geçtiği yerde parantez içinde
                        açıklaması yapılmalıdır.
                    </li>
                    <li>Bildiri özetleri şu bölümleri içermelidir:
                        <ul>
                            <li><strong>Orijinal Araştırma:</strong> Giriş ve Amaç, Yöntem, Bulgular, Sonuç</li>
                            <li><strong>Olgu Sunumu:</strong> Giriş ve Amaç, Olgu(lar), Sonuç</li>
                            <li><strong>Derleme:</strong> Derlemenin amacı ve içeriği düz metin olarak belirtilmelidir.
                            </li>
                        </ul>
                    </li>
                    <li>Anahtar kelimeler:
                        <ul>
                            <li>En az <b>3</b>, en fazla <b>5 kelime</b> olmalıdır.</li>
                            <li>Kelimeler arasında "," (virgül) kullanılmalı ve alfabetik sırayla yazılmalıdır.</li>
                            <li>Türkçe anahtar kelimeler Türkiye Bilim Terimleri (TBT)'ne uygun olarak verilmelidir.
                                İngilizce anahtar kelimeler "Medical Subject Headings (MeSH)"
                                (www.nlm.nih.gov/mesh/MBrowser.html)'e uygun olarak verilmelidir.
                            </li>
                        </ul>
                    </li>
                </ol>

                <h3>4. Tam Metin Bildiri Hazırlama Kuralları</h3>
                <ol>
                    <li>Tam metin gönderimi zorunlu değildir. Kongreye yalnızca özet bildiri ile katılım sağlanabilir.
                    </li>
                    <li>Tam metinler, özet bildiri sonuçları açıklandıktan sonra sisteme yüklenebilir. Özetleri kabul
                        edilmeyen katılımcılar tam metin gönderemez.
                    </li>
                    <li>Tam metinler:
                        <ul>
                            <li><b>Türkçe veya İngilizce</b> olarak hazırlanabilir.</li>
                            <li><b>1500-2500</b> kelime arasında olmalıdır (başlık, yazar bilgileri ve kaynakça hariç).
                            </li>
                            <li><b>Times New Roman</b>, <b>11 punto</b>, <b>1.5 satır aralığı</b> ile yazılmalıdır.</li>
                            <li>Bütün tablo ve şekil/grafiklerin başlıklarının yazılması ve metinde kullanılış sırasına
                                göre yerleştirilmesi gerekir. Şekiller dijital formatlı, JPEG kayıtlı ve 300 dpi
                                çözünürlüğünde olmalıdır.
                            </li>
                        </ul>
                    </li>
                    <li>Tam metin bölümleri:
                        <ul>
                            <li><strong>Orijinal Araştırma:</strong> Özet (Türkçe ve İngilizce), Giriş ve Amaç, Yöntem,
                                Bulgular, Tartışma, Sonuç, Kaynaklar
                            </li>
                            <li><strong>Olgu Sunumu:</strong> Özet (Türkçe ve İngilizce), Giriş ve Amaç, Olgu(lar),
                                Tartışma, Sonuç, Kaynaklar
                            </li>
                            <li><strong>Derleme:</strong> Özet (Türkçe ve İngilizce), Giriş ve Amaç, varsa alt
                                başlıklar, Sonuç, Kaynaklar
                            </li>
                        </ul>
                    </li>
                    <li>Anahtar kelimeler:
                        <ul>
                            <li>En az <b>3</b>, en fazla <b>5 kelime</b> olmalıdır.</li>
                            <li>Kelimeler arasında "," (virgül) kullanılmalı ve alfabetik sırayla yazılmalıdır.</li>
                            <li>Türkçe anahtar kelimeler Türkiye Bilim Terimleri (TBT)'ne uygun olarak verilmelidir.
                                İngilizce anahtar kelimeler "Medical Subject Headings (MeSH)"
                                (www.nlm.nih.gov/mesh/MBrowser.html)'e uygun olarak verilmelidir.
                            </li>
                        </ul>
                    </li>
                    <li>Kaynaklar, <b>APA 7</b> stiline uygun olarak yazılmalıdır.</li>
                </ol>

                <h3>5. Bildirilerin Değerlendirilmesi</h3>
                <ol>
                    <li>Bildiriler, yazarların adı, soyadı ve kurum bilgileri gizli tutularak bağımsız hakemler
                        tarafından değerlendirilecektir.
                    </li>
                    <li>Hakem raporlarına göre bildirilerin kabulü, reddi veya düzeltme istenmesi mümkündür.</li>
                    <li>Bildiri kabul veya ret sonuçları, başvuru yapan yazara elektronik posta yoluyla
                        bildirilecektir.
                    </li>
                </ol>

                <h3>6. Bildirilerin Sunulması</h3>
                <h4>Sözlü Bildiri</h4>
                <ol>
                    <li>Sözlü bildiriler Türkçe veya İngilizce olarak sunulabilir.</li>
                    <li>Sunum süresi, tartışma dahil toplam <b>5 dakika</b> ile sınırlıdır.</li>
                    <li>Sunumlar, kongre programında belirtilen gün, saat ve salonda yapılmalıdır. Belirtilen zamanda
                        sunum yapmayanlar kongreye katılmamış sayılacaktır.
                    </li>
                    <li>Başkasının adına bildiri sunulamaz. Sunum yapacak kişi mutlaka yazar veya ortak yazar
                        olmalıdır.
                    </li>
                </ol>

                <h4>Poster Bildiri</h4>
                <ol>
                    <li>Posterler, <b>70 cm x 90cm</b> boyutunda ve e-poster olarak hazırlanmalıdır.</li>
                    <li>Posterler sisteme pdf dosyası olarak yüklenecektir.</li>
                    <li>Posterlerde şu bölümler yer almalıdır:
                        <ul>
                            <li><strong>Orijinal Araştırma:</strong> Giriş ve Amaç, Yöntem, Bulgular, Tartışma, Sonuç,
                                Kaynaklar
                            </li>
                            <li><strong>Olgu Sunumu:</strong> Giriş ve Amaç, Olgu(lar), Tartışma, Sonuç, Kaynaklar</li>
                            <li><strong>Derleme:</strong> Giriş ve Amaç, varsa alt başlıklar, Sonuç, Kaynaklar</li>
                        </ul>
                    </li>
                    <li>Posterler, kongre süresince belirlenen alanda sergilenmelidir.</li>
                </ol>

                <h3>7. Önemli Tarihler</h3>
                <ul>
                    <li><strong>Bildiri Özet Son Gönderim Tarihi:</strong> 24 Nisan 2026</li>
                </ul>

                <h3>8. Bildirilerin Yayınlanması</h3>
                <ol>
                    <li>Kongrede sunulan tüm bildiriler kongre özet kitabında elektronik olarak yayınlanacaktır.</li>
                    <li>Sunumu yapılmayan bildiriler, özet kitabında yer almayacaktır.</li>
                    <li>Bildirilerle ilgili tüm sorumluluk (etik onay, kaynakların doğru yazımı, dil bilgisi kuralları
                        vb.) yazarlara aittir.
                    </li>
                </ol>
            </div>
        </div>

    </div>
</div>

<?php include('footer.php') ?>
<?php include('script.php') ?>

<!-- Tabs Script -->
<script src="/assets/js/tpk-tab.js"></script>
</body>
</html>
