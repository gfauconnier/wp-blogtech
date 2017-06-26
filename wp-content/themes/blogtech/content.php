<article class="card col-12">
  <h3 class="card-header card-primary"><?php the_title(); ?></h3>
  <h4>By <?php the_author(); ?></h4>
  <?php the_content(); ?>
  <a class="comments card-footer card-info" data-toggle="modal" data-target=".bd-example-modal-lg">Commentaires</a>
</article>
