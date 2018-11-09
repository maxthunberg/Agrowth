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

  <!-- LinkedIn tracking code -->
  <script type="text/javascript">
  _linkedin_partner_id = "531689";
  window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
  window._linkedin_data_partner_ids.push(_linkedin_partner_id);
  </script><script type="text/javascript">
  (function(){var s = document.getElementsByTagName("script")[0];
  var b = document.createElement("script");
  b.type = "text/javascript";b.async = true;
  b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
  s.parentNode.insertBefore(b, s);})();
  </script>
  <!-- LinkedIn tracking code -->

  <meta name="google-site-verification" content="GPMbKF4J3nJ_FV4VoFeheYLerKOL-fCdx71eIl2DPrI" />
  <title><?php wp_title(''); ?></title>
  <?php wp_head(); ?>

  <meta property="og:image" content="<?php echo get_the_post_thumbnail_url();?>"/>

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <meta charset="<?php bloginfo('charset'); ?>">
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
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

    <!-- Linkedin Tracking code -->
    <noscript>
      <img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=531689&fmt=gif" />
    </noscript>
    <!-- Linkedin Tracking code -->

  <?php include( get_template_directory() . '/phtml/sections/navbar/navbar.phtml');?>
