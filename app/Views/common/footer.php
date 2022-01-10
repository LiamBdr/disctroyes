<div id="back-to-top">
    <a href="#banniere">
        <img src="<?php echo base_url() ?>/assets/svg/arrow.svg" alt="flèche">
    </a>
</div>

<footer>
    <div class="gauche">
        <div class="first">
            <img class="logo" src="<?php echo base_url() ?>/assets/svg/logo-white.svg" alt="Logo DiscTroy(es) noir">
            <p class="disctroyes">DiscTroy(es)</p>
        </div>
        <div class="two">
            <a href=""><img src="<?php echo base_url() ?>/assets/svg/facebook-white.svg" alt="Logo Facebook blanc"></a>
            <a href=""><img src="<?php echo base_url() ?>/assets/svg/mail-white.svg" alt="Logo Mail blanc"></a>
            <a href=""><img src="<?php echo base_url() ?>/assets/svg/instagram-white.svg" alt="Logo Instagram blanc"></a>
        </div>
        <div class="three">
            <p>Copyright © <?php echo date("Y") ?> - DiscTroy(es)</p>
        </div>

    </div>

    <div class="centre">
        <a href="">Liens utiles</a>
        <a href="">Contact</a>
        <a href="">Hébergeur</a>
        <a href="">Mentions légales</a>
    </div>

    <div class="droite">
        <p class="trouver">Nous trouver</p>
        <div class="bloc-google-maps">
            <div class="bloc-adresse">
                <p>Maison des associations</p>
                <p>63 Av. Pasteur,</p>
                <p>10000 - Troyes</p>
            </div>
            <div class="google-maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2654.0316429626464!2d4.0605830154275395!3d48.30224284765719!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ee985b554fb209%3A0xafbec90fc22a35d9!2s63%20Av.%20Pasteur%2C%2010000%20Troyes!5e0!3m2!1sfr!2sfr!4v1641554218657!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</footer>

<!--SCRIPTS-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="<?php echo base_url() ?>/assets/js/app.js"></script>
<?php
if (!empty($js)) {
    foreach ($js as $jsLink) {
        echo "<script src='" . base_url() . "/assets/js/" . $jsLink . "'></script>";
    }
}
?>

</body>

</html>