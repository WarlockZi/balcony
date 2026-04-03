
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">

<?php include LAYOUT.'head.php';?>

<?php include LAYOUT. 'cookie.php';?>


<script>
   window.lazySizesConfig = window.lazySizesConfig || {};
   window.lazySizesConfig.expand = 1000;
   window.lazySizesConfig.loadMode = 1;
   window.lazySizesConfig.loadHidden = false;
   window.lazySizesConfig.preloadAfterLoad = true;
</script>

<div class="whatsapp-button">
    <a href="<?=CONF['tg_href']?>" target="_blank">
        <img src="<?=IMG?>telegram.svg" alt="Связаться в Телеграм">
    </a>
</div>

<div class="whatsap4-button">
    <a href="tel:+79139121454" target="_blank">
        <img src="<?=IMG?>phone.svg" alt="Телефон">
    </a>
</div>


<div id="panel"></div>

<div class="page-container main-page">
    <header class="header">


        <?php include LAYOUT. 'header_nav.php';?>
        <?php include LAYOUT. 'header_nav_mobile.php';?>
        <div class="side-labels"></div>


<!--        --><?php //include LAYOUT . 'index_banner.php';?>

    </header>
</div>

<body class="body-container">


<?php echo $content??'con';?>


<?php include LAYOUT. 'bottom.php';?>
</body>
</html>
