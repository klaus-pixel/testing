<?php
add_action('init', function() {

    pll_register_string('afspil', 'Afspil video');
    pll_register_string('fadeinbutton', 'fadeinbutton');
    pll_register_string('footer-kontakt', 'footer-kontakt');
    pll_register_string('Tryk på billedet for mere information', 'Tryk på billedet for mere information');

    $navigation = new Navigation;
    foreach ($navigation->getAllItems() as $i => $item){
        if($item->menu_item_parent == 0 && $item->type_label != 'Sprog skifter' && $item->type_label != 'Språkväljare' && $item->type_label != 'Language switcher'){
            ?>
            <?php pll_register_string($item->title, $item->title); ?>
            <?php pll_register_string($item->url, $item->url); ?>

            <?php foreach ($navigation->hasChildren($item->ID) as $child) {
                if($child){
                    ?>
                    <?php pll_register_string($child->title, $child->title); ?>
                    <?php pll_register_string($child->url, $child->url); ?>
                    <?php
                }
            } ?>
            <?php
        }
    }


});


add_filter('use_block_editor_for_post', '__return_false', 10);