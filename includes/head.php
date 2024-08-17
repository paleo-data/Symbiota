<?php
/*
** Style sheets are determined by $CSS_BASE_PATH set within config/symbini.php
** Customization can be made by modifying css files, $CSS_BASE_PATH, adding new css files below
*/
?>
<!-- Responsive viewport -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Favicon styling -->
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $CLIENT_ROOT; ?>/images/icons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $CLIENT_ROOT; ?>/images/icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $CLIENT_ROOT; ?>/images/icons/favicon-16x16.png">
<link rel="manifest" href="<?php echo $CLIENT_ROOT; ?>/images/icons/site.webmanifest">
<link rel="mask-icon" href="<?php echo $CLIENT_ROOT; ?>/images/icons/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

<!-- Symbiota styles -->
<link href="<?= $CSS_BASE_PATH ?>/symbiota/header.css?ver=<?= $CSS_VERSION ?>" type="text/css" rel="stylesheet">
<link href="<?= $CSS_BASE_PATH ?>/symbiota/footer.css?ver=<?= $CSS_VERSION ?>" type="text/css" rel="stylesheet">
<link href="<?= $CSS_BASE_PATH ?>/symbiota/main.css?ver=<?= $CSS_VERSION ?>" type="text/css" rel="stylesheet">
<link href="<?= $CSS_BASE_PATH ?>/symbiota/customizations.css?ver=<?= $CSS_VERSION ?>" type="text/css" rel="stylesheet">

<script src="<?= $CLIENT_ROOT ?>/js/symb/lang.js" type="text/javascript"></script>
