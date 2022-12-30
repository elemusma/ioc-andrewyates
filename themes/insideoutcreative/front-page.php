<?php get_header();

the_post_thumbnail('full',array('class'=>'w-100 h-auto'));

if(have_rows('videos')):
// start of intro
echo '<section class="pt-5 pb-5 position-relative">';
echo '<div class="container">';
echo '<div class="row">';
// echo '<div class="col-12">';
echo '<div class="col-12 text-center">';

// echo '<h2 class="text-accent bold">Andrew Yates Videos</h2>';

echo wp_get_attachment_image(178,'full','',['class'=>'h-auto mb-4 pl-4 pr-4','style'=>'width:200px']);

echo '</div>';

$videoCounter = 0;
while(have_rows('videos')): the_row();
$title = get_sub_field('title');
$imageIcon = get_sub_field('image_icon');
$embed = get_sub_field('embedd_url');
$url = get_sub_field('embedd_url', false, false);
$videoCounter++;

echo '<div class="col-md-4 p-1">';
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
    echo '<p class="mb-0"><strong>' . $title . '</strong></p>';
    if($imageIcon):
    echo wp_get_attachment_image($imageIcon['id'],'full','',['class'=>'','','style'=>'height:25px;width:25px;object-fit:contain;']);
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
echo '</div>';
endwhile;

// echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';
// end of intro
endif;

echo '<section>';
echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-12">';
echo '<hr>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';

$gallery = get_field('gallery');
if( $gallery ): 
echo '<section class="pt-5 pb-5 position-relative">';
echo '<div class="container">';
echo '<div class="row justify-content-center">';

echo '<div class="col-12 text-center">';

// echo '<h2 class="text-accent bold">Still Photos</h2>';

echo wp_get_attachment_image(179,'full','',['class'=>'h-auto mb-4 pl-4 pr-4','style'=>'width:200px']);

echo '</div>';



foreach( $gallery as $image ):
echo '<div class="col-lg-3 col-md-4 col-6 col col-portfolio p-1 overflow-h">';
echo '<div class="position-relative img-hover w-100 overflow-h">';
echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-set">';
echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-100 image-intro-gallery','style'=>'height:250px;object-fit:cover;object-position:top;']);
echo '</a>';
echo '</div>';

echo '<p class="mt-1">' . $image['alt'] . '</p>';

echo '</div>';
endforeach;
echo '</div>';
echo '</div>';
echo '</section>';
endif;


// how to use new image hover effect
// echo '<div class="col-6 col-intro-gallery col mb-1 p-1 overflow-h">';
// echo '<div class="position-relative img-hover w-100">';
// echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-set">';
// echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-100 image-intro-gallery','style'=>'object-fit:cover;']);
// echo '</a>';
// echo '</div>';
// echo '</div>';

get_footer(); ?>