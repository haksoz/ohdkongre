<div class="modal micromodal-slide" id="modal-1" aria-hidden="false" style="position:relative;z-index:99999;">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title" style="max-width: 600px;">
            <header class="modal__header" style="height: 20px;">
                <h2 class="modal__title" id="modal-1-title">
                </h2>
                <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
            </header>
            <main class="modal__content" id="modal-1-content" style="margin-top:1rem;">
<!--                <img src="/doc/ohd-popup.jpeg" class="w-100" alt="">-->
                <h3 style="color: #123755;">Duyuru</h3>
                <h6>Kongremiz Gazi Üniversitesi Rektörlük Kampüsü Teknoloji Fakültesi Taşkent Binası Kongre Salonları'nda gerçekleşecektir.</h6>
            </main>
<!--            <footer class="modal__footer text-center">-->
<!--            </footer>-->
        </div>
    </div>
</div>
<script src="https://unpkg.com/micromodal/dist/micromodal.min.js?v=43543"></script>
<script>
    MicroModal.show('modal-1',
        {
            onShow: modal => console.info(`${modal.id} is shown`), // [1]
            //onClose: modal => $('#modal-1-content').html(''), // [2] //popup doğru kapandığı sürece comment edilmeli
            openClass: 'is-open', // [5]
            disableScroll: true, // [6]
            disableFocus: false, // [7]
            awaitOpenAnimation: false, // [8]
            awaitCloseAnimation: false, // [9]
            debugMode: true // [10]
        }
    );
</script>
<link rel="stylesheet" href="/css/modal.css??v=01327">