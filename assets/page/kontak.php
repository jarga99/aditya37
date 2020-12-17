<?php
include_once '../view/header.php';
include_once 'navigasi-profil.php';
?>
<!-- area kontak kami -->
<div class="kontak-area">
    <div class="kontak">
        <div class="container">
            <div class="kontak-header">
                <h2>kontak kami</h2>
            </div>
            <div class="row">
                <div class="kontak-body col">
                    <img class="img-fluid" src="../img/call.png" alt="">
                    <div class="kontak-teks">
                        <h4>dadang</h4>
                        <p>0812999339</p>
                    </div>
                </div>
                <div class="kontak-body col">
                    <img class="img-fluid" src="../img/mail.png" alt="">
                    <div class="kontak-teks">
                        <h4>dudung</h4>
                        <p>dudung00@email.com</p>
                    </div>
                </div>
                <div class="kontak-body col">
                    <img class="img-fluid" src="../img/whatsapp.png" alt="">
                    <div class="kontak-teks">
                        <h4>diding</h4>
                        <p>08773331122</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- area lokasi -->
    <div class="peta ">
        <h3>
            peta lokasi smpn 58 surabaya
        </h3>
        <div class="container-fluid">
            <div class="mapouter ">
                <div class="gmap_canvas">
                    <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=smp%20n%2058%20surabaya&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    <a href="https://www.embedgooglemap.net">embed google map</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once '../view/footer.php';
?>