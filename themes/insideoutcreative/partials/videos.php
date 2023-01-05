<?php
if(have_rows('videos')):
    // start of intro
    echo '<section class="pt-5 pb-5 position-relative">';
    echo '<div class="container">';
    echo '<div class="row">';
    // echo '<div class="col-12">';
    echo '<div class="col-12 text-center">';
    
    // echo '<h2 class="text-accent bold">Andrew Yates Videos</h2>';
    
    if(!is_page(206)){
        echo wp_get_attachment_image(178,'full','',['class'=>'h-auto mb-4 pl-4 pr-4','style'=>'width:200px']);
    }
    
    echo '</div>';
    
    $videoCounter = 0;
    while(have_rows('videos')): the_row();
    $title = get_sub_field('title');
    $imageIcon = get_sub_field('image_icon');
    $embed = get_sub_field('embedd_url');
    $url = get_sub_field('embedd_url', false, false);
    $link = get_sub_field('link');
    $videoCounter++;
    
    echo '<div class="col-md-4 p-1">';
    
    if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    echo '<a class="" href="' . esc_url( $link_url ) . '" target="' . esc_attr( $link_target ) . '" class="text-black" style="">' . esc_html( $link_title );
    echo '<div style="pointer-events:none;">';
    endif;
    echo '<div class="position-relative videos-embed">';
    // echo '<a href="' . $url . '" data-lightbox="image-set" class="d-block">';
    echo '<div class="video-' . $videoCounter . ' open-modal small d-block" id="video-' . $videoCounter . '" style="">';
    echo '<div style="pointer-events:none;">';
    echo $embed;
    echo '</div>';
    // echo '</a>';
    echo '</div>';
    if($title || $imageIcon):
        echo '<div class="d-flex justify-content-between align-items-center">';
        echo '<p class="mb-0 text-black"><strong>' . $title . '</strong></p>';
        if($imageIcon):
            echo '<div>';
            // echo '<p class="mb-0 light small ml-4 text-black">' . $imageIcon . '</p>';
            foreach( $imageIcon as $image ):
                echo wp_get_attachment_image($image['id'],'full','',['class'=>'','','style'=>'height:25px;width:25px;object-fit:contain;']);
            endforeach;
            echo '</div>';
        endif;
        echo '</div>';
    endif;
    // echo '<span class="text-accent video-' . $videoCounter . ' open-modal small pb-4 d-block" id="video-' . $videoCounter . '" style="">View Larger</span>';
    
    echo '<div class="modal-content video-' . $videoCounter . ' position-fixed w-100 h-100 z-3">';
    echo '<div class="bg-overlay"></div>';
    echo '<div class="bg-content">';
    echo '<div class="bg-content-inner">';
    echo '<div class="close text-white" id="">X</div>';
    echo '<div>';
    
    echo $embed;
    
    echo '<p class="mb-0 text-white h1 text-center"><strong>' . $title . '</strong></p>';
    
    echo '</div>';
    echo '</div>';
    
    echo '</div>';
    echo '</div>';
    
    echo '</div>';
    
    if($link):
        echo '</div>';
        echo '</a>';
    endif;
    
    echo '</div>';
    endwhile;
    
    // echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</section>';
    // end of intro
    endif;
?>