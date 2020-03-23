  <section id="contact" class="contact graybg">
    <div class="container wow fadeInUp">
      <div class="section-title bottom_15 top_30 bottom_45">
        <h2 class="title">Contactez nous</h2>
        <span>Soyez au courant</span>
      </div>
      <!-- Map -->
      <div class="contact-map">
       <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=12%20rue%20anatole%20france%2C%20nanterre&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
     </div>

     <div class="getintouch row top_120">
      <!-- contact info -->
      <div class="col-lg-4 contact-info box-animation">
        <!-- info -->
        <div class="info">
          <i class="fas fa-paper-plane"></i>
          <a href="mailto:<?php echo $infos->email; ?>"><?php echo $infos->email; ?></a>
          <p> E-mail </p>
        </div>
        <!-- info -->
        <div class="info top_30">
          <i class="fas fa-map-marker-alt"></i>
          <p class="text">12 Rue Anatole France,<br>92000, Nanterre</p>
          <p> Adresse </p>
        </div>
        <!-- info -->
        <div class="info top_30">
          <i class="fas fa-phone"></i>
          <a href="tel:01 41 20 69 57">01 41 20 69 57</a>
          <p> Telephone </p>
        </div>
      </div>
      <div class="col-lg-8 contact-form box-animation">
        <!-- contact form -->
        <form method="post" class="contact-form">
          <div class="row">
            <!--Name-->
            <div class="col-md-6">
              <input class="form-inp" name="nom" type="text" placeholder="Nom" required>
            </div>
            <!--Email-->
            <div class="col-md-6">
              <input class="form-inp" name="email" type="email" placeholder="E-mail" required>
            </div>
            <div class="col-md-12">
              <!--Message-->
              <textarea name="message" placeholder="Message" rows="7"></textarea>
              <button name="jecontact" id="con_submit" class="site-btn top_45 pull-right" type="submit">Envoyer</button>
            </div>
          </div>
        </form>
      </div>
    </div>

  </div> <!-- Container end -->


</section>