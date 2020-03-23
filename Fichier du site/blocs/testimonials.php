  <section class="testimonial" id="testimonials">
    <div class="container wow fadeInUp">
      <div class="section-title bottom_15 top_30">
        <h2 class="title">Redaction</h2>
        <span>Notre equipe de redaction</span>
      </div>
      <div class="owl-carousel owl-theme testimonials" data-autoplay="true" data-items-desktop="3" data-items-desktop-small="3" data-items-tablet="2" data-items-tablet-small="1" data-margin="30">

        <?php foreach ($team as $teams) : ?>
          <div class="item">
            <div class="outitem">
              <figure><img src="<?php echo $teams->image; ?>"></figure>
              <div class="name">
                <h3 class="title"><?php echo $teams->prenom; ?> <?php echo $teams->nom; ?></h3>
                <span><?php echo $teams->description; ?></span>
              </div>
              <p><?php echo $teams->poste; ?></p>
            </div>
          </div>
        <?php endforeach; ?>

      </div>
    </div>
  </section>