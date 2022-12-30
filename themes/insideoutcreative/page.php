<?php get_header();
global $post; 
if ( ! post_password_required( $post ) ) {

if(get_the_content()){
echo '<div class="pt-5 pb-5"></div>';
echo '<section class="pt-5 pb-5">';
echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-md-12 about">';
// echo '<div class="col-lg-6 col-md-6 sm-text-center about"> ';
echo '<div class="about-first-half">';
echo '<div class="about-before"></div>';
echo '<div class="about-middle"></div>';
echo '</div>';
echo '<div class="about-after"></div>';
echo '<div class="about-details pt-5 pl-4 pr-4">';
echo '<div class="page details">';
// <h4 class="bodoni">Best in Denver</h4>
// echo '<h5 class="">' . get_field('main_title') . '</h5>';
echo '</div>';
// <h6><em>High tech, intelligent and cutting edge.</em></h6>
if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else:
echo '<p>Sorry, no posts matched your criteria.</p>';
endif;
echo '</div>';
// echo '</div>';
echo '</div>';

echo '</div>';
echo '</div>';
echo '</section>';

}

} else {
// we will show password form here

echo '<section class="pt-5 pb-5">';
echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-md-12">';
echo get_the_password_form();
echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';
   
}

$gallery = get_field('gallery');
if( $gallery ): 
echo '<section class="pt-5 pb-5 position-relative">';
echo '<div class="container">';
echo '<div class="row justify-content-center">';
foreach( $gallery as $image ):
echo '<div class="col-lg-3 col-md-4 col-6 col col-portfolio p-1 overflow-h">';
echo '<div class="position-relative img-hover w-100 overflow-h">';
echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-set">';
echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-100 image-intro-gallery','style'=>'height:250px;object-fit:cover;']);
echo '</a>';

echo '<p class="mt-1">' . $image['alt'] . '</p>';

echo '</div>';
echo '</div>';
endforeach;
echo '</div>';
echo '</div>';
echo '</section>';
endif;

get_footer(); 
?>