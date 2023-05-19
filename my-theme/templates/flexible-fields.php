<?php
// Get the header style field value
$header_style = get_field('header_style');

$header_class = '';
if ($header_style == 'default') {
    $header_class = 'default';
} else if ($header_style == '') {
    $header_class = 'home';
} else if ($header_style == 'team') {
    $header_class = 'team';
} else if ($header_style == 'contact') {
    $header_class = 'contact';
}

if (get_post_type() == 'companyreleases') {
    // If yes, use the default header class
    $header_class = 'default';
}
// Set the body class to include the custom header class
add_filter( 'body_class', function( $classes ) use ( $header_class ) {
    $classes[] = $header_class;
    return $classes;
});

get_header();
?>
<?php if( have_rows('content') ): ?>
    <?php while( have_rows('content') ): the_row(); ?>


        <?php if( get_row_layout() == 'home_page_widget' ): 
            // HOME PAGE WIDGET

            $home_title = get_sub_field('page_title');
            $home_video = get_sub_field('background_video');
            $button_text = get_sub_field('button_text');
            $first_link = get_sub_field('first_button');
            $second_link = get_sub_field('second_button');

        ?>
        <section class="home-section">
            <div class="vimeo-wrapper">
                <iframe src="<?= $home_video ?>?autoplay=1&loop=1&color=ef0800&title=0&byline=0&portrait=0&muted=1&background=1" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen loading="lazy"></iframe>
            </div>

            <div class="overlay"></div>

            <div class="text-container">
                <div class="text">
                    <h1 class="home-title"><?= $home_title ?></h1>
                    <div class="video-modal">
                        <button class="btn button-red"><?= $button_text ?></button>
                    </div>
                </div>
            </div>

            <div class="bottom-container">
                <div class="row">
                    <div class="column">
                        <?php if($first_link){
                            $link_url = $first_link['url'];
                            $link_title = $first_link['title'];
                            $link_target = $first_link['target'] ? $first_link['target'] : '_self';
                            ?>
                            <a href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"><?= esc_html($link_title); ?></a>
                        <?php } ?>
                    </div>
                    <div class="column">
                        <?php if ($second_link) {
                            $link_url = $second_link['url'];
                            $link_title = $second_link['title'];
                            $link_target = $second_link['target'] ? $second_link['target'] : '_self';
                            ?>
                            <a href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"><?= esc_html($link_title); ?></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
        <div class="modal-wrap"><div class="close-modal">&times;</div>
            <div class="modal-popup">
                <div class="pop-up-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="wb-md-12">
                                <div class="modal-video"><iframe class="iframe_video" src="<?= $home_video ?>?background=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        
        <?php elseif( get_row_layout() == 'full_width_hero_image' ): 
            // Full width hero image
            $hero_image = get_sub_field('image');?>
            
            <section class="hero-image">
                <div class="bg-image" style="background-image:url(<?= $hero_image ?>;)"></div>
            </section>

        <?php elseif( get_row_layout() == 'text_block' ): 
            // Text Block
            $block_title = get_sub_field('title');
            $block_desc = get_sub_field('text');
            ?>
            <section class="text-block">
                <div class="small-container">
                    <div class="block-container">
                        <h1 class="block-title"><?= $block_title ?></h1>
                        <p class="block-desc"><?= $block_desc ?></p>
                    </div>
                </div>
            </section>

        <?php elseif( get_row_layout() == 'text_block_editor' ): 
        // Text Block
        $block_content = get_sub_field('block_content');
        ?>
        <section class="text-block-editor">
            <div class="small-container">
                <div class="page-content">
                    <div class="block-content">
                        <?= $block_content ?>
                    </div>
                </div>
            </div>
        </section>

        <?php elseif( get_row_layout() == 'gallery_slider' ): 
        // Gallery Slider
        ?>
        <section class="gallery-slider">
            <div class="medium-container">
                <div class="slider">
                    <?php 
                    $gallery = get_sub_field('gallery');
                    if( have_rows('gallery') ): ?>
                        <?php while( have_rows('gallery') ): the_row(); ?>
                        <?php
                                $image = get_sub_field('gallery_image');
                                $url = $image['url'];
                                $slider_images[] = $url;?>
                        <div class="slide-item hero-slider" style="background-image: url(<?php echo $url; ?>)"></div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <?php elseif( get_row_layout() == 'esg_block' ): 
        // Text Block ESG
        $block_title = get_sub_field('title');
        $block_content = get_sub_field('text_container');

        ?>
        <section class="text-block-editor esg">
            <div class="small-container">
                <div class="page-content">
                    <div class="esg-block">
                        <h1><?= $block_title ?></h1>
                        <?= $block_content ?>
                    </div>
                </div>
            </div>
        </section>

    <?php
        // Post Flexible Content
        // Slider
        elseif( get_row_layout() == 'hero_slider' ):
            $logo = get_sub_field('logo');
            ?>
        <section class="posts-slider">
            <div class="slider-logo">
                <img src="<?= $logo['url']; ?>" alt="<?= $logo['alt']; ?>" />
            </div>
                <div class="slider">
                    <?php 
                    $gallery = get_sub_field('image_slider');
                    if( have_rows('image_slider') ): ?>
                        <?php while( have_rows('image_slider') ): the_row(); ?>
                        <?php
                                $image = get_sub_field('add_image');
                                $url = $image['url'];
                        ?>
                        <div class="slide-item hero-slider" style="background-image: url(<?php echo $url; ?>)"></div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
        </section>

            <?php elseif( get_row_layout() == 'button' ): 
            // Buttons
            $link = get_sub_field('first_button');
            $second_link = get_sub_field('second_button');?>

            <section>
                <div class="small-container">
                    <div class="link-block">
                        <a href="<?= $link['url'];?>" target="<?= $link['target'];?>" class="btn button-red"><?= $link['title'];?></a>
                        <?php if($second_link){ ?>
                            <a href="<?= $second_link['url'];?>" target="<?= $second_link['target'];?>" class="btn button-red"><?= $second_link['title'];?></a>
                        <?php }?>
                    </div>
                </div>
            </section>

            <div class="mobile-view">
                <div class="mobile-container">
                    <div class="mobile-slider" style="background: url(<?php the_post_thumbnail_url(); ?>)">
                    <?php elseif( get_row_layout() == 'posts_mobile_hero' ): 
                        $mobile_logo = get_sub_field('mobile_logo');
                        $mobile_title = get_sub_field('mobile_title');
                        ?>
                        <div class="mobile-slide">
                            <div class="first-slide">
                                <div class="mobile-logo">
                                    <img src="<?= $mobile_logo ?>">
                                    <p><?= $mobile_title; ?></p>
                                </div>
                            </div>
                        </div> 

                        <div class="mobile-slide">
                            <div class="second-slide">
                                <div class="block-container">
                                <h1 class="block-title"><?= $block_title ?></h1>
                                <p class="block-desc"><?= $block_desc ?></p>
                                </div>
                            </div>
                        </div>

                        <div class="mobile-slide">
                            <div class="third-slide">
                                <div class="block-editor-container">
                                    <div class="paragraph"><?= $block_content ?></div>
                                </div>
                            </div>
                        </div>

                        <div class="mobile-slide">
                            <div class="forth-slide">
                                <div class="gallery">
                                    <div class="gallery-images">
                                        <?php foreach($slider_images as $img) { ?>
                                            <div class="gallery-item" style="background-image: url(<?= $img; ?>)"></div>
                                        <?php } ?>

                                        <div class="mobile-link-block">
                                            <div class="links">
                                                <a href="<?= $link['url'];?>" target="<?= $link['target'];?>" class="btn button-red"><?= $link['title'];?></a>
                                                <?php if($second_link){ ?>
                                                    <a href="<?= $second_link['url'];?>" target="<?= $second_link['target'];?>" class="btn button-red"><?= $second_link['title'];?></a>
                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        <?php
        // Contact Page
            elseif( get_row_layout() == 'contact_block' ): 
                if ($header_style == 'contact') : ?>
                <section class="contact-page">
                    <div class="medium-container">
                        <div class="contact-info">
                            <div class="block">
                                <?php 
                                $first_row = get_sub_field('first_row');
                                $second_row = get_sub_field('second_and_third');
                                $country = get_sub_field('country');

                                if( $first_row ): ?>
                                    <div class="column">
                                        <h2><?php echo $first_row['country']; ?></h2>
                                        <p class="bottom-space"><?php echo $first_row['address']; ?></p>
                                        <p><a class="item_link underline" href="mailto:<?= $first_row['email'] ?>"><?= $first_row['email'] ?></a></p>
                                        <p>Tel.: <a class="item_link underline" href="tel:<?= $first_row['phone'] ?>"><?= $first_row['phone'] ?></a></p>
                                        <?php $map_link = $first_row['map_link'] ;?>
                                        <a class="btn menu-button" href="<?= $map_link['url'] ?>" target="<?= $map_link['target'] ?>"><?= $map_link['title'] ?></a>
                                    </div>
                                <?php endif; ?>

                                    <div class="column">
                                        <h2><?= $country ?></h2>    
                                        <div class="column-container">
                                            <?php while( have_rows('second_and_third') ) : the_row(); 
                                                $second_row = get_sub_field('elements');?>
                                                <div class="elements">
                                                    <p class="bottom-space"><?php echo $second_row['address']; ?></p>
                                                    <p><a class="item_link underline" href="mailto:<?= $second_row['email'] ?>"><?= $second_row['email'] ?></a></p>
                                                    <p>Tel.: <a class="item_link underline" href="tel:<?= $second_row['phone'] ?>"><?= $second_row['phone'] ?></a></p>
                                                    <?php $map_link = $second_row['map_link'] ;?>
                                                    <a class="btn menu-button" href="<?= $map_link['url'] ?>" target="<?= $map_link['target'] ?>"><?= $map_link['title'] ?></a>
                                                </div>
                                            <?php endwhile; ?>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endif ?>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>


    <?php
    // Team Page


    if ($header_style == 'team') :

        $args = array(
            'post_type' => 'team',
            'posts_per_page' => -1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'advisory-board',
                    'operator' => 'NOT EXISTS',
                ),
            ),
        );
    
        $team_members = new WP_Query( $args );

        $chose_member = get_field('chose_members');?>


        <div class="team-page">
            <div class="container">
                <div class="page-title">
                    <h1><?= the_title(); ?></div></h1>
                <div class="team-members">
                    <ul>  
                        <?php 
                        // We can chose manually from ACF or display all
                        if ($chose_member) {
                            foreach ($chose_member as $post) {
                            setup_postdata($post);
                            ?>
                                <li class="people-card">
                                    <img src="<?php echo get_field('person_image', get_the_ID()); ?>" alt="">
                                    <h5><?php the_title(); ?></h5>
                                    <p> <?php echo get_field('person_position', get_the_ID()); ?></p>
                                </li>
                            <?php
                            }
                            wp_reset_postdata(); 
                        } 
                        else {
                            while ( $team_members->have_posts() ) : $team_members->the_post(); ?>

                                <li class="people-card">
                                    <img src="<?php echo get_field('person_image', get_the_ID()); ?>" alt="">
                                    <h5><?php the_title(); ?></h5>
                                    <p> <?php echo get_field('person_position', get_the_ID()); ?></p>
                                    <p class="people-email"><a href="mailto:<?php echo get_field('person_email', get_the_ID()); ?>"><?php echo get_field('person_email', get_the_ID()); ?></a></p>
                                </li>
                            <?php endwhile;
                            wp_reset_postdata();
                        }?>
                    </ul>
                </div>
            </div>
        </div>
    <?php endif; ?>


    <?php if( have_rows('press_relases') ): ?>
    <?php while( have_rows('press_relases') ): the_row(); ?>

        <?php if( get_row_layout() == 'hero_image' ): 
                       // Full width hero image
                       $image = get_sub_field('image');?>
            
                       <section class="hero-image">
                           <div class="bg-image" style="background-image:url(<?= $image ?>;)"></div>
                       </section>
           
                   <?php elseif( get_row_layout() == 'text_block' ): 
                       // Text Block
                       $block_title = get_sub_field('title');
                       $block_desc = get_sub_field('description');
                       ?>
                       <section class="text-block">
                           <div class="small-container">
                               <div class="block-container">
                                   <h1 class="block-title"><?= $block_title ?></h1>
                                   <p class="block-desc"><?= $block_desc ?></p>
                               </div>
                           </div>
                       </section>
           
                   <?php elseif( get_row_layout() == 'text_editor' ): 
                   // Text Block
                   $block_content = get_sub_field('editor');
                   ?>
                   <section class="text-block-editor">
                       <div class="small-container">
                           <div class="page-content">
                               <div class="block-content">
                                   <?= $block_content ?>
                               </div>
                           </div>
                       </div>
                   </section>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php 
