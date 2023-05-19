<div class="transition-element"></div>
<?php
if(pll_current_language() == 'dk'){
    ?>
    <link rel="stylesheet" href="<?php echo home_url(); ?>/wp-content/themes/solix/plugins/animsition/css/animsition.css">
    <?php
}
if (pll_current_language() == 'eng'){
    ?>
    <link rel="stylesheet" href="<?php echo str_replace('/eng', '',  home_url().'/eng/wp-content/themes/solix/plugins/animsition/css/animsition.css') ?>">
    <?php
}
if (pll_current_language() == 'se'){
    ?>
    <link rel="stylesheet" href="<?php echo str_replace('/se', '',  home_url().'/se/wp-content/themes/solix/plugins/animsition/css/animsition.css') ?>">
    <?php
}
?>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


<?php
if(pll_current_language() == 'dk'){
    ?>
    <script src="<?php echo home_url(); ?>/wp-content/themes/solix/plugins/animsition/js/animsition.js"></script>
    <?php
}
if (pll_current_language() == 'eng'){
    ?>
    <script src="<?php echo str_replace('/eng', '',  home_url().'/eng/wp-content/themes/solix/plugins/animsition/js/animsition.js') ?>"></script>
    <?php
}
if (pll_current_language() == 'se'){
    ?>
    <script src="<?php echo str_replace('/se', '',  home_url().'/se/wp-content/themes/solix/plugins/animsition/js/animsition.js') ?>"></script>
    <?php
}
?>
<div class="animsition-overlay"
     data-animsition-overlay="true"
     data-animsition-in-class="overlay-slide-in-left"
     data-animsition-in-duration="1000"
     data-animsition-out-class="overlay-slide-out-right"
     data-animsition-out-duration="800">
</div>
<?php
if(pll_current_language() == 'dk'){
    ?>
    <script type='text/javascript' src="<?php echo home_url().'/wp-content/themes/solix/assets/scripts/animsition.js';?>"></script>
    <?php
}
if (pll_current_language() == 'eng'){
    ?>
    <script src="<?php echo str_replace('/eng', '',  home_url().'/eng/wp-content/themes/solix/assets/scripts/animsition.js') ?>"></script>
    <?php
}
if (pll_current_language() == 'se'){
    ?>
    <script src="<?php echo str_replace('/se', '',  home_url().'/se/wp-content/themes/solix/assets/scripts/animsition.js') ?>"></script>
    <?php
}
?>