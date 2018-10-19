<!DOCTYPE html>
<html>
<head>

  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-5PQDBZ6');</script>
  <!-- End Google Tag Manager -->

  <meta name="google-site-verification" content="GPMbKF4J3nJ_FV4VoFeheYLerKOL-fCdx71eIl2DPrI" />
  <title><?php wp_title(''); ?></title>
  <?php wp_head(); ?>
  
  <meta property="og:image" content="<?php echo get_the_post_thumbnail_url();?>"/>

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <meta charset="<?php bloginfo('charset'); ?>">
  <link id="favicon" rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <link href="https://fonts.googleapis.com/css?family=Archivo+Black|PT+Serif" rel="stylesheet">


</head>
<?php global $page_for_posts; ?>

<body>

    <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5PQDBZ6"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->


  <?php include( get_template_directory() . '/phtml/sections/navbar/navbar.phtml');?>
