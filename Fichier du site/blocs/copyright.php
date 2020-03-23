<footer>
    <div class="container">
      <div class="row">
        <!-- Copyright -->
        <div class="col-lg-4 copyright">
          <a href="index.html"><img src="img/logo.png" alt=""></a>
          <p>© 2020 <?php echo $infos->nom; ?>.</p>
      </div>
      <!-- Social -->
      <div class="col-lg-4 ftr-social">
          <div class="social">
            <a href="<?php echo $infos->fb; ?>"><i class="fab fa-facebook"></i>  </a>
            <a href="<?php echo $infos->twitter; ?>"><i class="fab fa-twitter" aria-hidden="true"></i>  </a>
        </div>
    </div>
    <!-- Get In Touch -->
    <div class="col-lg-4 getintouch">
      <h3 class="title">Prendre contact</h3>
      <p><a href="mailto:<?php echo $infos->nom; ?>"><?php echo $infos->email; ?></a></p>
  </div>
</div>
</div>
</footer>