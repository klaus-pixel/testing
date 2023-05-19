<?php
/**
 * The header.
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title><?php wp_title( '-', true, 'right' ); ?></title>
    <?php wp_head(); ?>
</head>


<body data-barba="wrapper">
   <div class="loaded-container">
      <div class="loading-screen"></div>
   </div>
<div id="body" <?php body_class(); ?> data-barba="container" data-barba-namespace="home">

<div class="wrapper">
      <header class="site-header">
         <div class="container">
            <div class="row desktop-menu">
                <div class="column">
                    <div class="posts">
                        <button class="btn menu-button"><?= get_field('button_name', 'options')?></button>
                        <div class="dropdown hide">
                           <ul>
                              <?php $posts = get_field('group_holdings', 'options');?> 
                              <?php if( $posts ): ?>
                                 <?php foreach( $posts as $post): ?>
                                 <?php setup_postdata($post); ?>
                                 <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                 <?php endforeach; ?>
                                 <?php wp_reset_postdata(); ?>
                              <?php endif; ?>
                           </ul>
                        </div>
                    </div>
                </div>
                <div class="column">
                  <?php if ( in_array( 'contact', get_body_class() ) ) { ?>
                     <a href="<?php echo home_url(); ?>"><img class="logo" src="<?php echo get_template_directory_uri();?>/assets/img/solix-logo-white.svg"></a>
                  <?php }else{ ?>
                    <a href="<?php echo home_url(); ?>"><img class="logo" src="<?php echo get_template_directory_uri();?>/assets/img/solix-logo.svg"></a>

                 <?php }?>
                </div>
                <div class="column">
                     <div class="main-menu-container">
                              
                              <ul class="main-menu">
                              <?php
                                 wp_nav_menu(
                                    array(
                                       'container'      => '',
                                       'items_wrap'     => '%3$s',
                                       'theme_location' => 'header',
                                       'add_a_class'    => 'underline',
                                       )
                                    );
                                 ?>
                              </ul>
                     </div>  
                </div>
            </div>

            <div class="floating-menu">
               <div class="floating-container">
                  <div class="column" style="display: block;"></div>
                  <div class="column">
                     <a href="<?php echo home_url(); ?>"><img class="logo logo-default" src="<?php echo get_template_directory_uri();?>/assets/img/solix-logo.svg"></a>
                     <a href="<?php echo home_url(); ?>"><img class="logo logo-white" src="<?php echo get_template_directory_uri();?>/assets/img/solix-logo-white.svg"></a>
                  </div>
                  <div class="column">
                        <button class="hamburger">
                        <div class="bar"></div>
                        </button>
                  </div>
                  <nav class="mobile-menu ">
                     <div class="mobile-container fadeInUp delayed">
                        <div class="mobile-menu-items">
                           <div class="main-menu-container">
                              <ul class="main-menu">
                              <?php
                                 wp_nav_menu(
                                    array(
                                       'container'      => '',
                                       'items_wrap'     => '%3$s',
                                       'theme_location' => 'header',
                                       )
                                    );
                                 ?>
                              </ul>
                           </div>  
                           <div class="posts">
                              <button class="btn button-red m_button"><?= get_field('button_name', 'options')?></button>
                              <div class="dropdown-mobile hide">
                                 <ul>
                                    <?php $posts = get_field('group_holdings', 'options');?> 
                                    <?php if( $posts ): ?>
                                       <?php foreach( $posts as $post): ?>
                                       <?php setup_postdata($post); ?>
                                       <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                       <?php endforeach; ?>
                                       <?php wp_reset_postdata(); ?>
                                    <?php endif; ?>
                                 </ul>
                              </div>
                           </div>
                           <?php if ( in_array( 'home', get_body_class() )){ ?>
                              <?php if( have_rows('content') ): ?>
                                 <?php while( have_rows('content') ): the_row(); ?>
                                    <?php if( get_row_layout() == 'home_page_widget' ): 
                                       $first_link = get_sub_field('first_button');
                                       $second_link = get_sub_field('second_button');
                                       ?>
                                       <div class="bottom-links">
                                          <div class="row">
                                             <div class="column">
                                                   <?php if($first_link){
                                                      $link_url = $first_link['url'];
                                                      $link_title = $first_link['title'];?>
                                                      <a href="<?= esc_url($link_url); ?>"><?= esc_html($link_title); ?></a>
                                                   <?php } ?>
                                             </div>
                                             <div class="column">
                                                   <?php if ($second_link) {
                                                      $link_url = $second_link['url'];
                                                      $link_title = $second_link['title'];?>
                                                      <a href="<?= esc_url($link_url); ?>"><?= esc_html($link_title); ?></a>
                                                   <?php } ?>
                                             </div>
                                          </div>
                                       </div>
                                    <?php endif; ?>
                                 <?php endwhile; ?>
                              <?php endif; ?>
                           <?php } ?>
                        </div>
                     </div>
                  </nav>
            </div>                    
         </div>

         </div>
      </header>

<main class="">