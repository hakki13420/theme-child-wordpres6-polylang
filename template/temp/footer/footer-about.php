<section class="row">
    <div class="col" data-aos="fade-right" data-aos-delay="200">
        <h5><?php pll_e('Apropos', 'apropos'); ?></h5>
        <hr>
        <div class="footer-logo" data-aos="fade-up">
            <div class="logo-slogan">
                <?php if (function_exists("the_custom_logo")) : ?>
                    <a href="<?php get_bloginfo('home'); ?>">
                        <?php the_custom_logo(); ?>
                    </a>
                <?php else : ?>
                    <a href="<?php get_bloginfo('home'); ?>"><?php get_bloginfo('name'); ?></a>
                <?php endif; ?>
                <div class="footer-slogan">
                    <div class="logo3">
                        <?php
                        $str = get_bloginfo('name'); //"DCW.TLEMCEN";
                        ?>
                    </div>

                    <div class="footer-description">
                        <?php if (get_bloginfo('language') == 'ar') : ?>
                            <?php if (get_theme_mod('site_nom_text_field')) : ?>
                                <h5 data-aos-easing="ease" data-aos-delay="800"><?php echo get_theme_mod('site_nom_text_field'); ?></h5>
                            <?php else : ?>
                                <h5 data-aos="fade-up" data-aos-easing="ease" data-aos-delay="800">direction du commerce de la Wilaya de Tlemcen</h5>
                            <?php endif; ?>
                        <?php else : ?>
                            <?php if (get_theme_mod('header_text_description_field')) : ?>
                                <h5 data-aos-easing="ease" data-aos-delay="800"><?php echo get_theme_mod('header_text_description_field'); ?></h5>
                            <?php else : ?>
                                <h5 data-aos="fade-up" data-aos-easing="ease" data-aos-delay="800">direction du commerce de la Wilaya de Tlemcen</h5>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <hr id="separator">
            <div class="footer-contact">
                <?php if (get_bloginfo('language') == 'ar') : ?>
                    <?php if (get_theme_mod('site_adress_text_field')) : ?>
                        <span"><?php echo get_theme_mod('site_adress_text_field'); ?></span><br>
                        <?php endif; ?>
                    <?php else : ?>
                        <?php if (get_theme_mod('adress_text_field')) : ?>
                            <span"><?php echo get_theme_mod('adress_text_field'); ?></span><br>
                            <?php endif; ?>
                        <?php endif; ?>


                        <?php if (get_theme_mod('telfax_text_field')) : ?>
                            <span"><?php echo get_theme_mod('telfax_text_field'); ?></span><br>
                            <?php else : ?>
                                <span>
                                    <?php pll_e('tel', 'tel'); ?>
                                    : 043210874 - 043210876 <br>
                                    <?php pll_e('fax', 'fax'); ?>
                                    : 043210879
                                </span><br>
                            <?php endif; ?>


                            <?php if (get_theme_mod('email_text_field')) : ?>
                                <span"><?php echo get_theme_mod('email_text_field'); ?></span><br>
                                <?php else : ?>
                                    <span>
                                        <?php pll_e('email', 'email'); ?>
                                        : dcptlemcen@gmail.com
                                    </span>
                                <?php endif; ?>

            </div>
        </div>
    </div>



    <div class="col" data-aos="fade-right" data-aos-delay="200">
        <h5><?php pll_e('Newsletters', 'newsletters'); ?></h5>
        <hr>
        <p><?php pll_e('Stay update with our latest', 'stay'); ?></p>
        <div class="form-element">
            <input type="text" placeholder="Email"><span><i class="fas fa-chevron-right"></i></span>
        </div>
    </div>


    <div class="col" data-aos="fade-left" data-aos-delay="200">
        <h5><?php pll_e('Instagram', 'instagram'); ?></h5>
        <hr>
        <div class="instagram-photos">
            <?php if (get_theme_mod("social-image1")) : ?>
                <img src="<?php echo wp_get_attachment_url(get_theme_mod('social-image1')); ?>" alt="">
            <?php else : ?>
                <img src="asset/images/posts/p1.jpeg" alt="insta1">
            <?php endif; ?>
            <?php if (get_theme_mod("social-image2")) : ?>
                <img src="<?php echo wp_get_attachment_url(get_theme_mod('social-image2')); ?>" alt="">
            <?php else : ?>
                <img src="asset/images/posts/p2.jpeg" alt="insta1">
            <?php endif; ?>
            <?php if (get_theme_mod("social-image3")) : ?>
                <img src="<?php echo wp_get_attachment_url(get_theme_mod('social-image3')); ?>" alt="">
            <?php else : ?>
                <img src="asset/images/posts/p3.jpeg" alt="insta1">
            <?php endif; ?>
        </div>
        <div class="instagram-photos">
            <?php if (get_theme_mod("social-image4")) : ?>
                <img src="<?php echo wp_get_attachment_url(get_theme_mod('social-image4')); ?>" alt="">
            <?php else : ?>
                <img src="asset/images/posts/p4.jpeg" alt="insta1">
            <?php endif; ?>
            <?php if (get_theme_mod("social-image5")) : ?>
                <img src="<?php echo wp_get_attachment_url(get_theme_mod('social-image5')); ?>" alt="">
            <?php else : ?>
                <img src="asset/images/posts/dcw13.jpg" alt="insta1">
            <?php endif; ?>
            <?php if (get_theme_mod("social-image6")) : ?>
                <img src="<?php echo wp_get_attachment_url(get_theme_mod('social-image6')); ?>" alt="">
            <?php else : ?>
                <img src="asset/images/posts/ministere1.jpg" alt="insta1">
            <?php endif; ?>
        </div>
        <div class="instagram-photos">
            <?php if (get_theme_mod("social-image7")) : ?>
                <img src="<?php echo wp_get_attachment_url(get_theme_mod('social-image7')); ?>" alt="">
            <?php else : ?>
                <img src="asset/images/posts/p1.jpeg" alt="insta1">
            <?php endif; ?>
            <?php if (get_theme_mod("social-image8")) : ?>
                <img src="<?php echo wp_get_attachment_url(get_theme_mod('social-image8')); ?>" alt="">
            <?php else : ?>
                <img src="asset/images/posts/p2.jpeg" alt="insta1">
            <?php endif; ?>
            <?php if (get_theme_mod("social-image9")) : ?>
                <img src="<?php echo wp_get_attachment_url(get_theme_mod('social-image9')); ?>" alt="">
            <?php else : ?>
                <img src="asset/images/posts/p3.jpeg" alt="insta1">
            <?php endif; ?>
        </div>
    </div>


    <div class="col" data-aos="fade-left" data-aos-delay="200">
        <h5><?php pll_e('Follow us', 'follow us'); ?></h5>
        <hr>

        <div class="social-media-icons">
            <?php if (get_theme_mod('facebook_text_field')) : ?>
                <a href="<?php echo get_theme_mod('facebook_text_field'); ?>"><i class="fab fa-facebook"></i></a>
            <?php else : ?>
                <a href="http://facebook.com/rabah.hakki"><i class="fab fa-facebook"></i></a>
            <?php endif; ?>

            <?php if (get_theme_mod('twitter_text_field')) : ?>
                <a href="<?php echo get_theme_mod('twitter_text_field'); ?>"><i class="fab fa-twitter"></i></a>
            <?php else : ?>
                <a href="http://twitter.com/rabah.hakki"><i class="fab fa-twitter"></i></a>
            <?php endif; ?>

            <?php if (get_theme_mod('instagram_text_field')) : ?>
                <a href="<?php echo get_theme_mod('instagram_text_field'); ?>"><i class="fab fa-instagram"></i></a>
            <?php else : ?>
                <a href="http://instagram.com/rabah.hakki"><i class="fab fa-instagram"></i></a>
            <?php endif; ?>

            <?php if (get_theme_mod('youtube_text_field')) : ?>
                <a href="<?php echo get_theme_mod('youtube_text_field'); ?>"><i class="fab fa-youtube"></i></a>
            <?php else : ?>
                <a href="http://youtube.com/rabah.hakki"><i class="fab fa-youtube"></i></a>
            <?php endif; ?>
        </div>
    </div>


</section>