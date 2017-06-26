<?php get_header(); ?>
      <section class="row col-12 col-lg-9">
        <p id="dateA"></p>
        <h2 class="col-12">Select a category :</h2>

        <ul class="selectCat nav nav-pills">
          <li class="nav-item"><button onclick="tabChange(3)" id="btn3" class="nav-link btn-primary">All articles</button></li>
          <li class="nav-item"><button onclick="tabChange(0)" id="btn0" class="nav-link btn-secondary">Hardware</button></li>
          <li class="nav-item"><button onclick="tabChange(1)" id="btn1" class="nav-link btn-secondary">Software</button></li>
          <li class="nav-item"><button onclick="tabChange(2)" id="btn2" class="nav-link btn-secondary">Dev</button></li>
        </ul>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'content', get_post_format() ); ?>

        <?php endwhile; endif; ?>
        <?php get_sidebar('section'); ?>
      </section>

      <!-- ################## MODAL ######################### -->
      <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <form class="formModal col-12 row justify-content-between" action="index.html" method="post">
              <label for="modalname" class="col-4">Username : </label>
              <input type="text" name="modalname" id="modalname" placeholder="Username" class="col-7">
              <label for="modaltitle" class="col-4">Title : </label>
              <input type="text" name="modaltitle" id="modaltitle" placeholder="Title" class="col-7">
              <label for="modalmessage" class="col-4">Message : </label>
              <textarea name="modalmessage" id="modalmessage" cols="30" rows="10" class="col-7"></textarea>
              <div class="modal-footer col-12">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="confirmA()">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- ################## MODAL ######################### -->
    <?php get_sidebar(); ?>
<?php get_footer(); ?>
