<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="cat-title"><?php single_cat_title(); ?></div>
 
      <div class="tax-wrap">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                    get_template_part( 'include/tax-item' );
                    echo the_title('<h1>', '</h1>');
                endwhile;
                endif; ?>
            </div><!-- /tax-wrap -->
 
    </div><!-- /col-md-12 -->
  </div><!-- /row -->
</div><!-- /container -->