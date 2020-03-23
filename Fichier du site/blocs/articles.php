<section id="news" class="news">
  <div class="container wow fadeInUp">
    <div class="section-title bottom_15 top_30 bottom_45">
      <h2 class="title">Nos News</h2>
    </div>
    <div  class="row">

      <?php foreach ($articles as $article) : ?>
        <div class="col-lg-4">
          <a class="anews" href="<?php echo $infos->lien; ?>/news/<?php echo $article->id; ?>">
            <div class="image" style="background-image:url('<?php echo $article->background; ?>')"></div>
            <div class="date">
              <span class="little"><?php echo $article->date_p; ?></span>
            </div>
            <div class="category description"><?php echo $article->description; ?></div>
            <h2 class="title description"><?php echo $article->titre; ?></h2>
          </a>
        </div>
      <?php endforeach; ?>

    </div> <!-- row end -->

  </div>
</section>