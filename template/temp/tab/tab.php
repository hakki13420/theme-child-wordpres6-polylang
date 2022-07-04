<ul class="nav">
    <li class="nav-item active">
        <a class="nav-link" id="sensibilisation"><?php pll_e('Sensibilisations', 'sensibilisations'); ?></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="contact"><?php pll_e('Contact', 'contact'); ?></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="annonces"><?php pll_e('Annonces', 'annonces'); ?></a>
    </li>
</ul>

<div class="tab-content">
    <!-- 1 st tab content area -->
    <div class="tab-item active" id="sensibilisation">
        <div class="container">
            <h5><?php pll_e('Messages de sensibilisation', 'messages_sensibilisation'); ?></h5>
            <div class="marquee-wrapper">

                <?php if (get_theme_mod('sens_text1_field')) : ?>
                    <ul class="marquee">
                        <li>
                            <div class="t-el">
                                <!--<p><strong>Alimentation : </strong>N’achetez pas les denrées alimentaires
                                            anonymes ou qui ne contiennent pas un étiquetage.</p>-->
                                <?php if (get_theme_mod('sens_text1_field')) : ?>
                                    <p><strong><?php echo get_theme_mod('sens_text1_field'); ?></strong></p>
                                <?php endif; ?>
                            </div>
                        </li>
                        <li>
                            <div class="t-el">
                                <?php if (get_theme_mod('sens_text2_field')) : ?>
                                    <p><strong><?php echo get_theme_mod('sens_text2_field'); ?></strong></p>
                                <?php endif; ?>
                            </div>
                            <!--<p><strong>Alimentation : </strong>Faites attention à la rupture de la chaîne
                                            de froid en achetant des denrées alimentaires réfrigérées ou congelées.</p>-->
                        </li>
                        <li>
                            <div class="t-el">
                                <?php if (get_theme_mod('sens_text3_field')) : ?>
                                    <p><strong><?php echo get_theme_mod('sens_text3_field'); ?></strong></p>
                                <?php endif; ?>
                                <!--<p><strong>Alimentation : </strong>Désinfectez les comptoirs, les planches à 
                                            découper et les ustensiles avec une solution diluée d’eau de javel et d’eau.</p>>-->
                            </div>
                        </li>
                        <li>
                            <div class="t-el">
                                <?php if (get_theme_mod('sens_text4_field')) : ?>
                                    <p><strong><?php echo get_theme_mod('sens_text4_field'); ?></strong></p>
                                <?php endif; ?>
                                <!--<p><strong>Alimentation : </strong>Evitez impérativement d’acquérir des denrées
                                            alimentaires périssables vendues sur la voie publique et exposées en plein air.</p>-->
                            </div>
                        </li>
                        <li>
                            <div class="t-el">
                                <?php if (get_theme_mod('sens_text5_field')) : ?>
                                    <p><strong><?php echo get_theme_mod('sens_text5_field'); ?></strong></p>
                                <?php endif; ?>
                                <!--<p><strong>Alimentation : </strong>Evitez impérativement d’acquérir des denrées
                                            alimentaires périssables vendues sur la voie publique et exposées en plein air.</p>-->
                            </div>
                        </li>
                    </ul>

                <?php else : ?>
                    <ul class="marquee">
                        <li>
                            <div class="t-el">
                                <!--<p><strong>Alimentation : </strong>N’achetez pas les denrées alimentaires
                                            anonymes ou qui ne contiennent pas un étiquetage.</p>-->
                                <p><strong><?php echo "Aucun message de sensibilisation"; ?></strong></p>
                            </div>
                        </li>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- 2 sd tab content area -->
    <div class="tab-item" id="contact">
        <div class="container">
            <h5><?php pll_e('Pour nous contactez', 'contactez'); ?></h5>
            <div class="marquee-wrapper">
                <?php if (get_theme_mod('contact_text1_field')) : ?>
                    <ul class="marquee">
                        <li>
                            <div class="t-el">
                                <!--<p><strong>Alimentation : </strong>N’achetez pas les denrées alimentaires
                                          anonymes ou qui ne contiennent pas un étiquetage.</p>-->
                                <?php if (get_theme_mod('contact_text1_field')) : ?>
                                    <p><strong><?php echo get_theme_mod('contact_text1_field'); ?></strong></p>
                                <?php endif; ?>
                            </div>
                        </li>
                        <li>
                            <?php if (get_theme_mod('contact_text2_field')) : ?>
                                <div class="t-el">
                                    <p><strong><?php echo get_theme_mod('contact_text2_field'); ?></strong></p>

                                </div>
                            <?php endif; ?>
                            <!--<p><strong>Alimentation : </strong>Faites attention à la rupture de la chaîne
                                          de froid en achetant des denrées alimentaires réfrigérées ou congelées.</p>-->
                        </li>
                        <li>
                            <div class="t-el">
                                <?php if (get_theme_mod('contact_text3_field')) : ?>
                                    <p><strong><?php echo get_theme_mod('contact_text3_field'); ?></strong></p>
                                <?php endif; ?>
                                <!--<p><strong>Alimentation : </strong>Désinfectez les comptoirs, les planches à 
                                          découper et les ustensiles avec une solution diluée d’eau de javel et d’eau.</p>>-->
                            </div>
                        </li>
                        <li>
                    </ul>
                <?php else : ?>
                    <ul class="marquee">
                        <li>
                            <div class="t-el">
                                <!--<p><strong>Alimentation : </strong>N’achetez pas les denrées alimentaires
                                          anonymes ou qui ne contiennent pas un étiquetage.</p>-->
                                <p><strong><?php echo "En construction"; ?></strong></p>
                            </div>
                        </li>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- 3 th tab content area -->
    <div class="tab-item" id="annonces">
        <div class="container">
            <h5><?php pll_e('Annonces', 'annonces'); ?></h5>
            <div class="marquee-wrapper">
                <?php if (get_theme_mod('annonce_text1_field')) : ?>
                    <ul class="marquee">
                        <li>
                            <div class="t-el">
                                <!--<p><strong>Alimentation : </strong>N’achetez pas les denrées alimentaires
                                          anonymes ou qui ne contiennent pas un étiquetage.</p>-->
                                <?php if (get_theme_mod('annonce_text1_field')) : ?>
                                    <p><strong><?php echo get_theme_mod('annonce_text1_field'); ?></strong></p>
                                <?php endif; ?>
                            </div>
                        </li>
                        <li>
                            <div class="t-el">
                                <?php if (get_theme_mod('annonce_text2_field')) : ?>
                                    <p><strong><?php echo get_theme_mod('annonce_text2_field'); ?></strong></p>
                                <?php endif; ?>
                            </div>
                            <!--<p><strong>Alimentation : </strong>Faites attention à la rupture de la chaîne
                                          de froid en achetant des denrées alimentaires réfrigérées ou congelées.</p>-->
                        </li>
                        <li>
                            <div class="t-el">
                                <?php if (get_theme_mod('annonce_text3_field')) : ?>
                                    <p><strong><?php echo get_theme_mod('annonce_text3_field'); ?></strong></p>
                                <?php endif; ?>
                                <!--<p><strong>Alimentation : </strong>Désinfectez les comptoirs, les planches à 
                                          découper et les ustensiles avec une solution diluée d’eau de javel et d’eau.</p>>-->
                            </div>
                        </li>
                        <li>
                            <div class="t-el">
                                <?php if (get_theme_mod('annonce_text4_field')) : ?>
                                    <p><strong><?php echo get_theme_mod('annonce_text4_field'); ?></strong></p>
                                <?php endif; ?>
                                <!--<p><strong>Alimentation : </strong>Evitez impérativement d’acquérir des denrées
                                          alimentaires périssables vendues sur la voie publique et exposées en plein air.</p>-->
                            </div>
                        </li>
                        <li>
                            <div class="t-el">
                                <?php if (get_theme_mod('annonce_text5_field')) : ?>
                                    <p><strong><?php echo get_theme_mod('annonce_text5_field'); ?></strong></p>
                                <?php endif; ?>
                                <!--<p><strong>Alimentation : </strong>Evitez impérativement d’acquérir des denrées
                                          alimentaires périssables vendues sur la voie publique et exposées en plein air.</p>-->
                            </div>
                        </li>
                    </ul>
                <?php else : ?>
                    <ul class="marquee">
                        <li>
                            <div class="t-el">
                                <!--<p><strong>Alimentation : </strong>N’achetez pas les denrées alimentaires
                                          anonymes ou qui ne contiennent pas un étiquetage.</p>-->
                                <p><strong><?php echo "Aucun Annonce"; ?></strong></p>
                            </div>
                        </li>
                    </ul>
                <?php endif; ?>

            </div>
        </div>
    </div>

</div>