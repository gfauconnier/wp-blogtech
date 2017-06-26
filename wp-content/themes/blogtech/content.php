<article class="card col-12">
  <h3 class="card-header card-primary"><?php the_title(); ?></h3>
  <h4>by <?php the_author(); ?></h4>
  <?php the_content(); ?>
  <figure class="row card-img hidden-sm-down">
    <img class="articleImg" src="<?php echo get_bloginfo('template_directory'); ?>/img/articles/article" class="col-md-12" onmouseover="imgHover(this, 1)" onmouseout="imgHover(this, 0)">
    <figcaption class="displayAlt" onmouseover="imgHover(this, 1)" onmouseout="imgHover(this, 0)"></figcaption>
  </figure>
  <a class="comments card-footer card-info" data-toggle="modal" data-target=".bd-example-modal-lg">Commentaires</a>
</article>
