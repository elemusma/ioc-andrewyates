<?php

echo '<footer>';

echo '<section class="pt-5 pb-5 position-relative">';
echo '<div class="container">';
echo '<div class="row justify-content-center">';
$logo = get_field('logo','options');

echo '<div class="col-12 text-center pb-5">';

echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'h-auto','style','style'=>'width:250px;']);

echo '</div>';


echo '<div class="col-md-6 text-md-left text-center">';
echo '<a href="tel:+1' . get_field('phone','options') . '" class="text-accent h3 bold">' . get_field('phone','options') . '</a>';
echo '</div>';

echo '<div class="col-md-6 text-md-right text-center">';
echo '<a href="mailto:' . get_field('email','options') . '" class="text-accent h3 bold">' . get_field('email','options') . '</a>';
echo '</div>';

echo '</div>';
echo '</div>';
echo '</section>';

echo '</footer>';

echo '<div class="bg-gray text-center pt-3 pb-3 pl-5 pr-5">';
echo '<a href="https://insideoutcreative.io/" target="_blank" title="Website Development, Design &amp SEO in Colorado - Florida" style="padding-top:35px;"><img class="auto img-backlink" src="
https://insideoutcreative.io/wp-content/uploads/2022/04/created-by-inside-out-creative.png
" alt="Website Development, Design &amp SEO in Colorado - Florida" width="125px" /></a>';
echo '</div>';

?>

</footer>
<?php if(get_field('footer', 'options')) { the_field('footer', 'options'); } ?>
<?php wp_footer(); ?>
</body>
</html>