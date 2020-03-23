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

require_once('php/config.php');

//Option Newsletters (Cours : INSERT)
if (isset($_POST['jemabonne'])) {
  require_once('php/newsletters.php');
}

//Option Contact (Cours : INSERT)
if (isset($_POST['jecontact'])) {
  require_once('php/contact.php');
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>  
  <title><?php echo $infos->nom; ?></title>
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


  <!-- Bloc Navbar -->
  <?php require_once('blocs/navbar.php'); ?>
  <!-- Bloc Navbar -->


  <div class="wrapper">


    <!-- Bloc Sliders -->
    <?php require_once('blocs/sliders.php'); ?>
    <!-- Bloc Sliders -->


    <!-- Bloc About -->
    <?php require_once('blocs/about.php'); ?>
    <!-- Bloc About -->


    <!-- Bloc Testimonials -->
    <?php require_once('blocs/testimonials.php'); ?>
    <!-- Bloc Testimonials -->


    <!-- Bloc Newsletters -->
    <?php require_once('blocs/newsletters.php'); ?>
    <!-- Bloc Newsletters -->


    <!-- Bloc Articles -->
    <?php require_once('blocs/articles.php'); ?>
    <!-- Bloc Articles -->


    <!-- Bloc Contact -->
    <?php require_once('blocs/contact.php'); ?>
    <!-- Bloc Contact -->


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