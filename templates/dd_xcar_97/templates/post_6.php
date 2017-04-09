<!DOCTYPE html>
<html dir="ltr">
<head>
	<meta charset="utf-8" />
      <?php
        $base = $document->getBase();
        if (!empty($base)) {
            echo '<base href="' . $base . '" />';
            $document->setBase('');
        }
				$app = JFactory::getApplication();
    $tplparams	= $app->getTemplate(true)->params;
	$ac = htmlspecialchars($tplparams->get('ac'));
		$slide1 = htmlspecialchars($tplparams->get('slide1'));
	$slide2 = htmlspecialchars($tplparams->get('slide2'));
	$slide3 = htmlspecialchars($tplparams->get('slide3'));
	$slide4 = htmlspecialchars($tplparams->get('slide4'));
	$slide5 = htmlspecialchars($tplparams->get('slide5'));
	$slcc = htmlspecialchars($tplparams->get('slcc'));
	$cib= htmlspecialchars($tplparams->get('cib'));
	$cpb= htmlspecialchars($tplparams->get('cpb'));
	$in5= htmlspecialchars($tplparams->get('in5'));
	$dplayer= htmlspecialchars($tplparams->get('dplayer'));
	$fc = htmlspecialchars($tplparams->get('fc'));
	$tc = htmlspecialchars($tplparams->get('tc'));
	$gc = htmlspecialchars($tplparams->get('gc'));
	$pc = htmlspecialchars($tplparams->get('pc'));
	$lc = htmlspecialchars($tplparams->get('lc'));
	$fcb = htmlspecialchars($tplparams->get('fcb'));
	$dm = htmlspecialchars($tplparams->get('dm'));
	$db = htmlspecialchars($tplparams->get('db'));
	
    ?>
<link href="<?php echo $document->params->get('fav'); ?>" rel="icon" type="image/x-icon" />
    <script>
    var themeHasJQuery = !!window.jQuery;
</script>
<script src="<?php echo addThemeVersion($document->templateUrl . '/jquery.js'); ?>"></script>
<script>
    window._$ = jQuery.noConflict(themeHasJQuery);
</script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="<?php echo addThemeVersion($document->templateUrl . '/bootstrap.min.js'); ?>"></script>
<!--[if lte IE 9]>
<script src="<?php echo addThemeVersion($document->templateUrl . '/layout.ie.js'); ?>"></script>
<link rel="stylesheet" href="<?php echo addThemeVersion($document->templateUrl . '/layout.ie.css'); ?>" media="screen"/>
<![endif]-->
<script src="<?php echo addThemeVersion($document->templateUrl . '/layout.core.js') ?>"></script>
<script src="<?php echo addThemeVersion($document->templateUrl . '/CloudZoom.js'); ?>" type="text/javascript"></script>
    
    <?php echo $document->head; ?>
    <?php if ($GLOBALS['theme_settings']['is_preview'] || !file_exists($themeDir . '/css/bootstrap.min.css')) : ?>
    <link rel="stylesheet" href="<?php echo addThemeVersion($document->templateUrl . '/css/bootstrap.css'); ?>" media="screen" />
    <?php else : ?>
    <link rel="stylesheet" href="<?php echo addThemeVersion($document->templateUrl . '/css/bootstrap.min.css'); ?>" media="screen" />
    <?php endif; ?>
    <?php if ($GLOBALS['theme_settings']['is_preview'] || !file_exists($themeDir . '/css/template.min.css')) : ?>
    <link rel="stylesheet" href="<?php echo addThemeVersion($document->templateUrl . '/css/template.css'); ?>" media="screen" />
    <?php else : ?>
    <link rel="stylesheet" href="<?php echo addThemeVersion($document->templateUrl . '/css/template.min.css'); ?>" media="screen" />
    <?php endif; ?>
    <?php if(('edit' == JRequest::getVar('layout') && 'form' == JRequest::getVar('view')) ||
        ('com_config' == JRequest::getVar('option') && 'config.display.modules' == JRequest::getVar('controller'))) : ?>
    <link rel="stylesheet" href="<?php echo addThemeVersion($document->templateUrl . '/css/media.css'); ?>" media="screen" />
    <script src="<?php echo addThemeVersion($document->templateUrl . '/js/template.js'); ?>"></script>
    <?php endif; ?>
    <script src="<?php echo addThemeVersion($document->templateUrl . '/script.js'); ?>"></script>
    
</head>
<body class=" bootstrap bd-body-6  bd-pagebackground bd-margins">
    <header class=" bd-headerarea-1  bd-margins">
        <section class=" bd-section-1 bd-page-width bd-tagstyles " id="headersection" data-section-title="headersection">
    <div class="bd-container-inner bd-margins clearfix">
        <div class=" bd-layoutbox-35 bd-no-margins clearfix">
    <div class="bd-container-inner">
        <div class=" bd-layoutbox-37 bd-no-margins clearfix">
    <div class="bd-container-inner">
        <?php
$app = JFactory::getApplication();
$themeParams = $app->getTemplate(true)->params;
$sitename = $app->getCfg('sitename');
$logoSrc = '';
ob_start();
?>
src="<?php echo JURI::base() . 'templates/' . JFactory::getApplication()->getTemplate(); ?>/images/logo.png"
<?php

$logoSrc = ob_get_clean();
$logoLink = '';

if ($themeParams->get('logoFile'))
    $logoSrc = 'src="' . JURI::root() . $themeParams->get('logoFile') . '"';

if ($themeParams->get('logoLink'))
    $logoLink = $themeParams->get('logoLink');

if (!$logoLink)
    $logoLink = JUri::base(true);

?>
<a class=" bd-logo-3" href="<?php echo $logoLink; ?>">
<img class=" bd-imagestyles-6 animated bd-animation-2" data-animation-name="lightSpeedIn" data-animation-event="onload" data-animation-duration="600ms" data-animation-delay="0ms" data-animation-infinited="false" <?php echo $logoSrc; ?> alt="<?php echo $sitename; ?>">
</a>
    </div>
</div>
	
		<div class=" bd-layoutbox-39 animated bd-animation-14 bd-no-margins clearfix" data-animation-name="lightSpeedIn" data-animation-event="onload" data-animation-duration="1500ms" data-animation-delay="0ms" data-animation-infinited="false">
    <div class="bd-container-inner">
        <span class="bd-iconlink-13 bd-own-margins bd-icon-93 bd-icon "></span>
	
		<p class=" bd-textblock-124 bd-no-margins bd-content-element">

<?php echo $document->params->get('al1'); ?><br><?php echo $document->params->get('al2'); ?>

</p>
    </div>
</div>
	
		<div class=" bd-layoutbox-41 animated bd-animation-10 bd-no-margins clearfix" data-animation-name="lightSpeedIn" data-animation-event="onload" data-animation-duration="1000ms" data-animation-delay="0ms" data-animation-infinited="false">
    <div class="bd-container-inner">
        <span class="bd-iconlink-15 bd-own-margins bd-icon-95 bd-icon "></span>
	
		<p class=" bd-textblock-126 bd-no-margins bd-content-element">

<?php echo $document->params->get('ht'); ?><br><a href="mailto:<?php echo $document->params->get('he'); ?>" draggable="false">
<?php echo $document->params->get('he'); ?>
</a>

</p>
    </div>
</div>
    </div>
</div>
    </div>
</section>
	
		<?php
    renderTemplateFromIncludes('hmenu_1', array());
?>
</header>
	
		<div class=" bd-stretchtobottom-3 bd-stretch-to-bottom" data-control-selector=".bd-contentlayout-6">
<div class="bd-contentlayout-6  bd-sheetstyles  bd-no-margins bd-margins" >
    <div class="bd-container-inner">

        <div class="bd-flex-vertical bd-stretch-inner bd-contentlayout-offset">
            
 <?php renderTemplateFromIncludes('sidebar_area_1'); ?>
            <div class="bd-flex-horizontal bd-flex-wide bd-no-margins">
                
 <?php renderTemplateFromIncludes('sidebar_area_3'); ?>
                <div class="bd-flex-vertical bd-flex-wide bd-no-margins">
                    

                    <div class=" bd-layoutitemsbox-23 bd-flex-wide bd-no-margins">
    <div class=" bd-content-6">
    <?php
            $document = JFactory::getDocument();
            echo $document->view->renderSystemMessages();
    $document->view->componentWrapper('blog_3');
    echo '<jdoc:include type="component" />';
    ?>
</div>
</div>

                    
 <?php renderTemplateFromIncludes('sidebar_area_6'); ?>
                </div>
                
 <?php renderTemplateFromIncludes('sidebar_area_2'); ?>
            </div>
            
 <?php renderTemplateFromIncludes('sidebar_area_4'); ?>
        </div>

    </div>
</div></div>
	
		<?php if ($fcb == 1) { ?><footer class=" bd-footerarea-1 bd-margins">
        <section class=" bd-section-9 bd-page-width bd-tagstyles " id="footer_contact" data-section-title="footer_contact">
    <div class="bd-container-inner bd-margins clearfix">
        <div class=" bd-layoutbox-2 bd-page-width  bd-no-margins clearfix">
    <div class="bd-container-inner">
        <div class=" bd-spacer-5 clearfix"></div>
	
		<div class=" bd-socialicons-2 animated bd-animation-55" data-animation-name="slideInDown" data-animation-event="scroll" data-animation-duration="1000ms" data-animation-delay="0ms" data-animation-infinited="false">
    
        <?php if ($fc == 1) { ?><a target="_blank" class=" bd-socialicon-11 bd-socialicon" href="<?php echo $document->params->get('facebbok'); ?>">
    <span class="bd-icon"></span><span></span>
</a><?php } ?>
    
        <?php if ($tc == 1) { ?><a target="_blank" class=" bd-socialicon-12 bd-socialicon" href="<?php echo $document->params->get('twitter'); ?>">
    <span class="bd-icon"></span><span></span>
</a><?php } ?>
    
        <?php if ($gc == 1) { ?><a target="_blank" class=" bd-socialicon-13 bd-socialicon" href="<?php echo $document->params->get('google'); ?>">
    <span class="bd-icon"></span><span></span>
</a><?php } ?>
    
        <?php if ($pc == 1) { ?><a target="_blank" class=" bd-socialicon-14 bd-socialicon" href="<?php echo $document->params->get('pinterest'); ?>">
    <span class="bd-icon"></span><span></span>
</a><?php } ?>
    
        <?php if ($lc == 1) { ?><a target="_blank" class=" bd-socialicon-15 bd-socialicon" href="<?php echo $document->params->get('linkedin'); ?>">
    <span class="bd-icon"></span><span></span>
</a><?php } ?>
    
    
    
    
    
</div>
	
		<div class=" bd-layoutbox-5 bd-page-width  bd-no-margins clearfix">
    <div class="bd-container-inner">
        <h2 class=" bd-textblock-27 animated bd-animation-56 bd-content-element" data-animation-name="slideInUp" data-animation-event="scroll" data-animation-duration="1000ms" data-animation-delay="0ms" data-animation-infinited="false">

<?php echo $document->params->get('ad0'); ?>

</h2>
	
		<div class=" bd-spacer-7 clearfix"></div>
	
		<p class=" bd-textblock-29 bd-content-element">
  
<?php echo $document->params->get('ad1'); ?>,<?php echo $document->params->get('ad2'); ?>,&nbsp;<?php echo $document->params->get('ad3'); ?>
<br><?php echo $document->params->get('ad4'); ?><br><?php echo $document->params->get('ad5'); ?>

</p>
    </div>
</div><?php } ?>
	
		<?php if ($dm == 1) { ?><div class="bd-googlemap-2 bd-own-margins bd-imagestyles ">
    <div class="embed-responsive" style="height: 100%; width: 100%;">
      <iframe class="embed-responsive-item"
                src="http://maps.google.com/maps?output=embed&q=<?php echo $document->params->get('map1'); ?>, <?php echo $document->params->get('map2'); ?>&t=m"></iframe>
    </div>
</div><?php } ?>
    </div>
</div>
    </div>
</section>
	
		<section class=" bd-section-18 bd-page-width bd-tagstyles " id="rightreserved" data-section-title="rightreserved">
    <div class="bd-container-inner bd-margins clearfix">
        <p class=" bd-textblock-42 animated bd-animation-33 bd-no-margins bd-content-element" data-animation-name="lightSpeedIn" data-animation-event="scroll" data-animation-duration="1000ms" data-animation-delay="0ms" data-animation-infinited="false">

<?php echo date("Y");?> © <?php echo $document->params->get('footer1'); ?>. All Rights Reserved.

</p>
    </div>
</section>
	
		<?php if ($db == 1) { ?><div class=" bd-pagefooter-3 animated bd-animation-34" data-animation-name="flipInX" data-animation-event="scrollloop" data-animation-duration="1000ms" data-animation-delay="300ms" data-animation-infinited="false">
    <div class="bd-container-inner">
        
            Designed by <a href='http://diablodesign.eu' target="_blank">DiabloDesign</a>.
    </div>
</div><?php } ?>
</footer>
	
		<div data-smooth-scroll data-animation-time="250" class=" bd-smoothscroll-3"><a href="#" class=" bd-backtotop-1 ">
    <span class="bd-icon-66 bd-icon "></span>
</a></div>
</body>
</html>