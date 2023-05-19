<?php



function solix_gallery($atts){
    $gallery = new Gallery;
    $option = get_option('loisto_opts');
    $atts = shortcode_atts(array(
        'page' => $option['loisto'],
    ), $atts);

                 return '
                <section class="bg-light-grey">
                    <div class="medium-container">
                        <div class="slider gallery">
                   '.
                     $rows = get_field('gallery');
    if($rows)
    {
        foreach($rows as $row)
        {
//            echo '<div class="box gris-clair"><div class="twocol-one"><h3>' . $row['titre_service_internet'] . '</h3><p>' . $row['texte_service_internet'] . '</p><div class="box contact">' . $row['bloc_en_savoir_plus'] . '</div></div><div class="twocol-one last">';

            if( $row['gallery_image'])
            {
                echo '    <div class="gallery-image" style="background: url('.the_sub_field('gallery_image').')"></div>';
            }
        }
    }'             
                        </div>
                    </div>
                </section>
    ';
;

}