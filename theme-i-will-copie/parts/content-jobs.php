<?php /* Template Name: Jobs */ ?>

<?php get_header(); ?>
<!--<div class="bg">-->
<!--    <img src="http://solix.oo/wp-content/themes/solix/assets/images/om_solix_bg.png">-->
<!--</div>-->
<link rel="stylesheet" type="text/css" href="/wp-content/themes/solix/assets/plugins/slick/css/slick.css">
<link rel="stylesheet" type="text/css" href="/wp-content/themes/solix/assets/plugins/slick/css/slick-theme.css">
<!--<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>-->

<main class="bg-light-grey">
    <section class="bg-light-grey grey-nav">
        <div class="container">
            <?php get_template_part('parts/includes/nav/main', 'nav') ?>
        </div>
    </section>
    <?php while ( have_posts() ) : the_post(); ?>
    <section>
        <div class="page-bg-image" style="background: url(<?php the_post_thumbnail_url(); ?>);"></div>
    </section>
    <section class="bg-light-grey">
        <div class="small-container">
            <div class="grid-x">
                <div class="column medium-12 text-center">
                    <div class="page-heading">
                        <h2><?php the_field('page_title'); ?></h2>
                        <p><?php the_field('page_description'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light-grey">
        <div class="small-container">
            <div class="grid-x">
                <div class="column medium-12">
                    <div class="page-content">
                        <?php the_content(); ?> <!-- Page Content -->
                        <?php
                        endwhile; //resetting the page loop
                        wp_reset_query(); //resetting the page query
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light-grey">
        <div class="medium-container">
            <div class="slider gallery">
                <?php   if( have_rows('gallery') ):
                    while( have_rows('gallery') ): the_row(); ?>
                        <div class="gallery-image" style="background: url(<?php the_sub_field('gallery_image') ?>)"></div>
                    <?php endwhile;
                endif; ?>
            </div>
        </div>
    </section>
    <section class="bg-light-grey">
        <div class="small-container">
            <div class="grid-x">
                <br class="column medium-12 text-center">
                <div class="page-content after-gallery-content">
                    <?php the_field('after_gallery_content'); ?>
                </div>
            </div>
        </div>
    </section>
<!--    <section>-->
<!--        <div class="page-bg-image" style="background: url(../wp-content/themes/solix/assets/images/OmSolixJobs.jpg);"></div>-->
<!--    </section>-->
<!--    <section class="bg-light-grey">-->
<!--        <div class="small-container">-->
<!--            <div class="grid-x">-->
<!--                <div class="column medium-12 text-center">-->
<!--                    <div class="page-heading">-->
<!--                        <h2>Hvordan vi arbejder</h2>-->
<!--                        <p>Vi stiller et dedikeret Solix Team til rådighed for hvert af vores gruppeselskaber, som har til opgave at støtte bestyrelsen og ledelsen i at gennemføre den langsigtede plan for værdiskabelse til aktionærerne. Planen indeholder alle vigtige, strategiske og værdimaksimerende initiativer og kortlægger de nødvendige aktiviteter og milepæle for at realisere disse. Vores fokus er især på vækst, driftsoptimering, selskabsstrukturering og optimering af selskabets kapitalforhold.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!--    <section class="bg-light-grey">-->
<!--        <div class="small-container">-->
<!--            <div class="grid-x">-->
<!--                <div class="column medium-12">-->
<!--                    <div class="page-content">-->
<!--                        <p>Det gør vi ved at fokusere på hvert enkelt ?gruppeselskab og dets industri, samt ved at tilføre selskabet kapital og ressourcer til ?at indfri dets ambitioner.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!--    <section class="bg-light-grey">-->
<!--        <div class="small-container">-->
<!--            <div class="grid-x">-->
<!--                <br class="column medium-12 text-center">-->
<!--                <div class="page-content">-->
<!--                    <h6>Vækst</h6>-->
<!--                    <p>Toplinjevækst er nøglen til langsigtet værdiskabelse. Vi er derfor løbende på udkig efter vækst- og ekspansionsmuligheder og vi er altid parat til at investere i levedygtige vækstinitiativer såsom produktudvikling, ekspansion på nye markeder og i nye kundesegmenter, samt salgsfremmende aktiviteter.</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        </div>-->
<!--    </section>-->
<!--    <section class="bg-light-grey">-->
<!--        <div class="small-container">-->
<!--            <div class="grid-x">-->
<!--                <br class="column medium-12 text-center">-->
<!--                <div class="page-content">-->
<!--                    <h6>Driftsoptimering</h6>-->
<!--                    <p>Vi benytter os af benchmarking, kombineret med vores egne erfaringer, kreativitet og interne idéer til at identificere de mest værdiskabende driftsmæssige tiltag. Eksempler på dette er at øge fleksibiliteten og effektiviteten i omkostningsstrukturen samt at effektivisere R&D processerne, produktionsapparatet, salg og marketing, samt at optimere arbejdskapitalen. En indgående forståelse af disse faktorer gør os i stand til sætte ambitiøse og realistiske mål og at definere og implementere handlingsplaner der skaber selskaber i verdensklasse.</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!--    <section class="bg-light-grey">-->
<!--        <div class="medium-container">-->
<!--            <div class="slider gallery">-->
<!--                <div class="gallery-image" style="background: url(../wp-content/themes/solix/assets/images/OmSolixJobs2.jpg)"></div>-->
<!--                <div class="gallery-image" style="background: url(../wp-content/themes/solix/assets/images/OmSolixJobs2.jpg)"></div>-->
<!--                <div class="gallery-image" style="background: url(../wp-content/themes/solix/assets/images/OmSolixJobs2.jpg)"></div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
</main>


<?php get_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="/wp-content/themes/solix/assets/plugins/slick/js/slick.min.js" type="text/javascript" charset="utf-8"></script>
<!--<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>-->
<script>
    $(document).ready(function(){
        $('.gallery').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1
        });

        // var windowSize = $(window).width() < 361;
        //
        // if(windowSize){

        $('#hamburger').on('click', function () {
            if($('.bg-light-grey').hasClass('full-height-mob-nav')){
                $('.bg-light-grey').removeClass('full-height-mob-nav');
            }else{
                $('.bg-light-grey').addClass('full-height-mob-nav');
            }
            var mobile_nav_section = $('#mobile-nav-section');
            var chevron_left = $('.main-image-slider .slick-prev');
            var hamburger = $('.hamburger-inner, .hamburger-inner::before, .hamburger-inner::after');
            if(mobile_nav_section.hasClass('collapsed-hamburger')){
                mobile_nav_section.addClass('expanded-hamburger');
                mobile_nav_section.removeClass('collapsed-hamburger');
                mobile_nav_section.addClass('slideInUp');
                mobile_nav_section.removeClass('slideAway');
                mobile_nav_section.css('display', 'block');
                chevron_left.attr('style', 'z-index: 0 !important');
                hamburger.css('background', '#fff');
            }else{
                mobile_nav_section.removeClass('expanded-hamburger');
                mobile_nav_section.addClass('collapsed-hamburger');
                mobile_nav_section.removeClass('slideInUp');
                mobile_nav_section.addClass('slideAway');
                setTimeout(function () {
                    chevron_left.attr('style', 'z-index: 1 !important');
                }, 100);
                mobile_nav_section.fadeOut(500);
            }

        });
    })
</script>
<script>
    /**
     * forEach implementation for Objects/NodeLists/Arrays, automatic type loops and context options
     *
     * @private
     * @author Todd Motto
     * @link https://github.com/toddmotto/foreach
     * @param {Array|Object|NodeList} collection - Collection of items to iterate, could be an Array, Object or NodeList
     * @callback requestCallback      callback   - Callback function for each iteration.
     * @param {Array|Object|NodeList} scope=null - Object/NodeList/Array that forEach is iterating over, to use as the this value when executing callback.
     * @returns {}
     */
    var forEach=function(t,o,r){if("[object Object]"===Object.prototype.toString.call(t))for(var c in t)Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);else for(var e=0,l=t.length;l>e;e++)o.call(r,t[e],e,t)};
    var hamburgers = document.querySelectorAll(".hamburger");
    if (hamburgers.length > 0) {
        forEach(hamburgers, function(hamburger) {
            hamburger.addEventListener("click", function() {
                this.classList.toggle("is-active");
            }, false);
        });
    }
</script>