<section id="contactform">

    <div class="container">
        <div class="row">

            <div class="col-lg-7 col-12 text-left">
                <div class="contact__info">
                    <p class="text-left">ReStart Studio - Pilates i Terapia Ruchem</p>
                    <p class="text-left">Ul. Chrzanowskiego 6</p>
                    <p class="text-left">80-464 Gdańsk Wrzeszcz</p>
                    <div class="contact__phone">
                        <a class="contact__number" href="tel: 512063609">Tel: 512 063 609</a>
                    </div>
                </div>
                <div class="contact__text">
                    <p class="text-left">Dane do przelewu:</p>
                    <p class="text-left">RESTART FIZJOTERAPIA - ANNA ZASADNA</p>
                    <p class="text-left">Nr konta: 87102018110000010203244480</p>
                </div>

            </div>
            <div class="col-lg-5 col-12">


                <div class="contactform">
                    <h3>Masz pytania? Zostaw wiadomość lub napisz na kontakt@restartstudio.pl</h3>
                    <?php

                    $form_id = get_field("contact_form");
                    
                    echo do_shortcode('[contact-form-7 id="' . $form_id . '"]');

                ?>

                </div>

            </div>
        </div>
    </div>
</section>