<!--

███████╗████████╗██████╗ ███████╗███████╗████████╗
██╔════╝╚══██╔══╝██╔══██╗██╔════╝██╔════╝╚══██╔══╝
███████╗   ██║   ██████╔╝█████╗  █████╗     ██║   
╚════██║   ██║   ██╔══██╗██╔══╝  ██╔══╝     ██║   
███████║   ██║   ██║  ██║███████╗███████╗   ██║   
╚══════╝   ╚═╝   ╚═╝  ╚═╝╚══════╝╚══════╝   ╚═╝   
                                                  
███╗   ██╗███████╗██╗    ██╗███████╗              
████╗  ██║██╔════╝██║    ██║██╔════╝              
██╔██╗ ██║█████╗  ██║ █╗ ██║███████╗              
██║╚██╗██║██╔══╝  ██║███╗██║╚════██║              
██║ ╚████║███████╗╚███╔███╔╝███████║              
╚═╝  ╚═══╝╚══════╝ ╚══╝╚══╝ ╚══════╝              
                                                  
-->   

<?php

$article_id = strval($_GET['id']);
require_once('php/config.php');
require_once('php/newsingle.php');

?>
<!DOCTYPE html>
<html lang="fr">
<head>  
  <title><?php echo $infos->nom; ?> - <?php echo $new->titre; ?></title>
  <meta charset="UTF-8">
  <meta name="description" content="<?php echo $infos->nom; ?>">
  <meta name="keywords" content="onepage, magazine">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?php echo $infos->lien; ?>/font/stylesheet.css"/>
  <link rel="stylesheet" href="<?php echo $infos->lien; ?>/css/style.css"/>

  <style>
   .description {
    display: block;
    width: 200px;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
  }
</style>

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]--> 

<!-- Font icons --> 
<link rel="stylesheet" href="<?php echo $infos->lien; ?>/icon-fonts/fontawesome-5.0.6/css/fontawesome-all.min.css"/>
<link rel="stylesheet" href="<?php echo $infos->lien; ?>/icon-fonts/flat-icon/flaticon.css"/>

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800&display=swap" rel="stylesheet">

</head> 
<body> 


  <!-- Bloc Chargement -->
  <?php require_once('blocs/chargement.php'); ?>
  <!-- Bloc Chargement -->


  <header>
    <!-- Logo -->
    <div class="logo">
      <img src="img/logo.png" alt="">
    </div>
    <div class="nav-icon">
      <span></span>
      <span></span>
      <span></span>
    </div> 
    <!-- Navigation -->
    <nav>
      <ul>
        <li><a href="<?php echo $infos->lien; ?>/index"><span data-hover="Retour à l'accueil">Retour à l'accueil</span></a></li>
      </ul>
    </nav>
  </header>


  <div class="wrapper">
<!-- ARTICLE 
  ================================================== -->  
  <section class="subpage">
    <div class="container">
      <article class="news-article">
        <figure class="article-image bottom_30">
          <img src="<?php echo $new->background; ?>" alt="">
        </figure>
        <small class="category"><?php echo $new->categorie; ?></small>
        <h1 class="title"><?php echo $new->titre; ?></h1>
        <div class="information bottom_30"><?php echo $new->auteur; ?>, <span><?php echo $new->date_p; ?></span></div>
        <?php echo htmlspecialchars_decode($new->contenu); ?>

      </article>

    </div>
  </section>


</div>


<!-- Bloc Copyright -->
<?php require_once('blocs/copyright.php'); ?>
<!-- Bloc Copyright -->


<!-- Scripts -->
<script src="<?php echo $infos->lien; ?>/js/jquery-2.1.4.min.js"></script>
<script src="<?php echo $infos->lien; ?>/js/plugins.js"></script>
<script src="<?php echo $infos->lien; ?>/js/main.js"></script>
<script> 
 jQuery(document).ready(function($){
   setTimeout(function() {
     $('#remove').fadeOut('slow',function(){
      $('#remove').remove(); 
    }); 
   }, 2000); 
 });  
</script>  
<!-- Scripts -->

</body>
</html>