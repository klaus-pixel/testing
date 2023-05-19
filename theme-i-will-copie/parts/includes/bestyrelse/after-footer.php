<style>
    @keyframes button-bg-slide-in {

    }

    .button-bestyrelse {
        display: block !important;
        opacity: 0;
        border: 0;
        background: none;
        width:235px;
        max-width:90%;
        padding:20px 31px!important;
    }

    .button-bestyrelse * {
        display: block !important;
        opacity: 0;
        transition: opacity .2s;
    }

    .button-bestyrelse::before {
        position: absolute;
        display: block;
        content: "";
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: #4c4b4b;
        transform: translateY(100%);
        transition: transform .5s;
    }

    .button-bestyrelse.button-bestyrelse--visible {
        opacity: 1;
    }

    .button-bestyrelse.button-bestyrelse--visible::before {
        transform: translateY(0);
    }

    .button-bestyrelse--visible-content * {
        opacity: 1;
    }

    .button-bestyrelse--hide-instantly {
        display: none !important;
    }
</style>

<?php
if(pll_current_language() == 'dk'){
    ?>
    <script type='text/javascript' src="<?php echo home_url().'/wp-content/themes/solix/assets/scripts/bestyrelse.js';?>"></script>
    <?php
}
if (pll_current_language() == 'eng'){
    ?>
    <script src="<?php echo str_replace('/eng', '',  home_url().'/eng/wp-content/themes/solix/assets/scripts/bestyrelse.js') ?>"></script>
    <?php
}
if (pll_current_language() == 'se'){
    ?>
    <script src="<?php echo str_replace('/se', '',  home_url().'/se/wp-content/themes/solix/assets/scripts/bestyrelse.js') ?>"></script>
    <?php
}
?>