<?php get_header(); ?>   
<div class="row blog">   
	<div class="col-md-12">   






<h1>BOLDWAYS</h1>





<?php if(have_posts()) : ?>  




<?php while(have_posts()) : the_post(); ?>   




<div class="blog-post">
<h2><?php the_title(); ?></h2>   <?php the_content(); ?> 




</div>
  <?php endwhile; ?>   <?php else : ?>  <div class="alert alert-info"> <strong>No content in this loop</strong>  </div>     <?php endif; ?>   </div>    <div class="col-md-0"> <?php	if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar')) : // Sidebar name ?>  <?php endif; ?>    </div>    </div> 




<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> 




<?php get_footer(); ?>