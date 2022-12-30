<?php get_header();

the_post_thumbnail('full',array('class'=>'w-100 h-auto'));

echo get_template_part('partials/videos');

// $gallery = get_field('gallery');
// if( $gallery ): 
// echo '<section class="pt-5 pb-5 position-relative">';
// echo '<div class="container">';
// echo '<div class="row justify-content-center">';

// echo '<div class="col-12 text-center">';

// // echo '<h2 class="text-accent bold">Still Photos</h2>';

// echo wp_get_attachment_image(179,'full','',['class'=>'h-auto mb-4 pl-4 pr-4','style'=>'width:200px']);

// echo '</div>';



// foreach( $gallery as $image ):
// echo '<div class="col-lg-3 col-md-4 col-6 col col-portfolio p-1 overflow-h">';
// echo '<div class="position-relative img-hover w-100 overflow-h">';
// echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-set">';
// echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-100 image-intro-gallery','style'=>'height:250px;object-fit:cover;object-position:top;']);
// echo '</a>';
// echo '</div>';

// echo '<p class="mt-1">' . $image['alt'] . '</p>';

// echo '</div>';
// endforeach;
// echo '</div>';
// echo '</div>';
// echo '</section>';
// endif;

// start of divider
echo '<section>';
echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-12">';
echo '<hr>';
echo '</div>';

echo '<div class="col-12 text-center">';

// echo '<h2 class="text-accent bold">Still Photos</h2>';

echo wp_get_attachment_image(179,'full','',['class'=>'h-auto mb-4 pl-4 pr-4','style'=>'width:200px']);

echo '</div>';

echo '</div>';
echo '</div>';
echo '</section>';
// end of divider

echo get_template_part('partials/gallery');


// how to use new image hover effect
// echo '<div class="col-6 col-intro-gallery col mb-1 p-1 overflow-h">';
// echo '<div class="position-relative img-hover w-100">';
// echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-set">';
// echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-100 image-intro-gallery','style'=>'object-fit:cover;']);
// echo '</a>';
// echo '</div>';
// echo '</div>';

get_footer(); ?>