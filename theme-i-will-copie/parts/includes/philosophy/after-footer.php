<script src="/wp-content/themes/solix/assets/plugins/slick/js/slick.min.js" type="text/javascript" charset="utf-8"></script>

<?php
if(pll_current_language() == 'dk'){
    ?>
    <script type='text/javascript' src="<?php echo home_url().'/wp-content/themes/solix/assets/scripts/philosophy.js';?>"></script>
    <?php
}
if (pll_current_language() == 'eng'){
    ?>
    <script src="<?php echo str_replace('/eng', '',  home_url().'/eng/wp-content/themes/solix/assets/scripts/philosophy.js') ?>"></script>
    <?php
}
if (pll_current_language() == 'se'){
    ?>
    <script src="<?php echo str_replace('/se', '',  home_url().'/se/wp-content/themes/solix/assets/scripts/philosophy.js') ?>"></script>
    <?php
}
?>
