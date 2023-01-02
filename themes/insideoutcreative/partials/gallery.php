<?php

if(have_rows('gallery_with_lightbox')): while(have_rows('gallery_with_lightbox')): the_row();
echo '<section class="pt-5 pb-5 position-relative">';
echo '<div class="container">';
echo '<div class="row justify-content-center">';





if(have_rows('galleries')): 
    $galleryCounter=0;
    while(have_rows('galleries')): the_row();
$image = get_sub_field('image');
$gallery = get_sub_field('gallery');
$galleryCounter++;

// print_r($image);

echo '<div class="col-lg-3 col-md-4 col-6 col col-portfolio p-1 overflow-h">';
echo '<div class="position-relative img-hover w-100 overflow-h">';

// if($gallery){
//     echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-set-' . $galleryCounter . '">';
//     // echo '</a>';
// } else {
    echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-set-advanced">';

// }

echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-100 image-intro-gallery','style'=>'height:250px;object-fit:cover;object-position:top;']);
echo '</a>';
echo '</div>';

echo '<p class="mt-1">' . $image['alt'] . '</p>';

if($gallery):
foreach( $gallery as $image ):
    echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-set-' . $galleryCounter . '"></a>';
endforeach;
endif;

echo '</div>';


endwhile; endif;



echo '</div>';
echo '</div>';
echo '</section>';
endwhile; endif;
?>