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
<style>

/*slideshow*/
.bd-slide-7  {background-image: url(<?php echo $document->params->get('sf1'); ?>);}
.bd-slide-1 {background-image: url(<?php echo $document->params->get('sf2'); ?>);}
.bd-slide-3{background-image: url(<?php echo $document->params->get('sf3'); ?>);}
.bd-slide-4 {background-image: url(<?php echo $document->params->get('sf4'); ?>);}
.bd-slide-5 {background-image: url(<?php echo $document->params->get('sf5'); ?>);}
.bd-section-15 {background-image: url(<?php echo $document->params->get('bgs'); ?>);}
.bd-section-19  {background-image: url(<?php echo $document->params->get('p1'); ?>);}

.bd-icon-26:before {content: url(<?php echo $document->params->get('ib4'); ?>);}
.bd-icon-30:before {content: url(<?php echo $document->params->get('ib8'); ?>);}
.bd-icon-35:before {content: url(<?php echo $document->params->get('ib12'); ?>);}
.bd-icon-39:before {content: url(<?php echo $document->params->get('ib16'); ?>);}
</style>
<!--Analitics-->
<?php if ($ac == 1) { ?><script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', '<?php echo $document->params->get('analytics'); ?>', 'auto');
  ga('send', 'pageview');</script>
<?php } ?>
<body class=" bootstrap bd-body-1 
 bd-homepage bd-pagebackground-394 bd-margins">
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
	
		<div class=" bd-parallaxbackground-4 bd-parallax-bg-effect" data-control-selector=".bd-section-15"><section class=" bd-section-15 bd-tagstyles " id="slideshow" data-section-title="slideshow">
    <div class="bd-container-inner bd-margins clearfix">
        <div class=" bd-bottomcornersshadow-3">



<div id="carousel-2" class="bd-slider-2  bd-slider bd-no-margins  carousel slide bd-carousel-fade" >
    

    
    <div class="bd-container-inner">

    
        
    <div class="bd-sliderindicators-2  bd-slider-indicators" >
    <ol class="bd-indicators-2 animated bd-animation-46 bd-no-margins "  data-animation-name="slideInDown" data-animation-event="slidein" data-animation-duration="1000ms" data-animation-delay="0ms" data-animation-infinited="false">
        
        <?php if ($slide1 == 1) { ?><li><a class="active" href="#" data-target="#carousel-2" data-slide-to="0"></a></li><?php } ?>
	
       <?php if ($slide2 == 1) { ?> <li><a class="" href="#" data-target="#carousel-2" data-slide-to="1"></a></li><?php } ?>
 
    </ol>
    </div>

    <div class="bd-slides carousel-inner">
       <?php if ($slide1 == 1) { ?> <div class=" bd-slide-7 bd-background-width  bd-textureoverlay bd-textureoverlay-2 bd-slide item"
    
    
    >
    <div class="bd-container-inner">
        <div class="bd-container-inner-wrapper">
            <?php if ($slcc == 1) { ?><p class=" bd-textblock-3 animated bd-animation-25 animated bd-animation-28 bd-content-element" data-animation-name="fadeInRightBig,fadeOutRightBig" data-animation-event="slidein,slideout" data-animation-duration="2100ms,1000ms" data-animation-delay="200ms,0ms" data-animation-infinited="false,false">
   
<?php echo $document->params->get('st1'); ?>

</p><?php } ?>
	
		<img class="bd-imagelink-3 animated bd-animation-5 animated bd-animation-6 bd-own-margins bd-imagestyles   "  data-animation-name="fadeIn,fadeOut" data-animation-event="slidein,slideout" data-animation-duration="1000ms,1000ms" data-animation-delay="0ms,0ms" data-animation-infinited="false,false" src="<?php echo JURI::base() . 'templates/' . JFactory::getApplication()->getTemplate(); ?>/images/sl.gif">
        </div>
    </div>
</div><?php } ?>
	
		<?php if ($slide2 == 1) { ?> <div class=" bd-slide-1 bd-background-width  bd-textureoverlay bd-textureoverlay-1 bd-slide item"
    
    
    >
    <div class="bd-container-inner">
        <div class="bd-container-inner-wrapper">
            <?php if ($slcc == 1) { ?><p class=" bd-textblock-1 animated bd-animation-9 animated bd-animation-11 bd-content-element" data-animation-name="fadeInRightBig,fadeOutRightBig" data-animation-event="slidein,slideout" data-animation-duration="2100ms,1000ms" data-animation-delay="200ms,0ms" data-animation-infinited="false,false">

<?php echo $document->params->get('st2'); ?>

</p><?php } ?>
	
		<img class="bd-imagelink-4 animated bd-animation-7 animated bd-animation-8 bd-own-margins bd-imagestyles   "  data-animation-name="fadeIn,fadeOut" data-animation-event="slidein,slideout" data-animation-duration="1000ms,1000ms" data-animation-delay="0ms,0ms" data-animation-infinited="false,false" src="<?php echo JURI::base() . 'templates/' . JFactory::getApplication()->getTemplate(); ?>/images/sl.gif">
        </div>
    </div>
</div><?php } ?>
	



    </div>
    </div>

    

    <script type="text/javascript">
        /* <![CDATA[ */
        if ('undefined' !== typeof initSlider) {
            initSlider(
                '.bd-slider-2',
                {
                    leftButtonSelector: 'bd-left-button',
                    rightButtonSelector: 'bd-right-button',
                    navigatorSelector: '.bd-carousel-1',
                    indicatorsSelector: '.bd-indicators-2',
                    carouselInterval: <?php echo $document->params->get('speed'); ?>,
                    carouselPause: "hover",
                    carouselWrap: true,
                    carouselRideOnStart: true
                }
            );
        }
        /* ]]> */
    </script>
</div></div>
    </div>
</section></div>
	
			
		<section class=" bd-section-28 bd-tagstyles" id="section28" data-section-title="Section">
    <div class="bd-container-inner bd-margins clearfix">
        <div class=" bd-customhtml-4 bd-tagstyles">
    <div class="bd-container-inner bd-content-element">

    </div>
</div>
    </div>
</section>
	
		<div class="bd-containereffect-1 container-effect container ">
<div class=" bd-stretchtobottom-1 bd-stretch-to-bottom" data-control-selector=".bd-contentlayout-9">
<div class="bd-contentlayout-9   bd-sheetstyles-2  bd-no-margins bd-margins" >
    <div class="bd-container-inner">

        <div class="bd-flex-vertical bd-stretch-inner bd-contentlayout-offset">
            
 <?php renderTemplateFromIncludes('sidebar_area_1'); ?>
            <div class="bd-flex-horizontal bd-flex-wide bd-no-margins">
                
 <?php renderTemplateFromIncludes('sidebar_area_3'); ?>
                <div class="bd-flex-vertical bd-flex-wide bd-no-margins">
                    
 <?php renderTemplateFromIncludes('sidebar_area_5'); ?>

                    <div class=" bd-layoutitemsbox-27 bd-flex-wide bd-no-margins">
    <div class=" bd-content-9">
    <?php
            $document = JFactory::getDocument();
            echo $document->view->renderSystemMessages();
    $document->view->componentWrapper('common');
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
</div>
	
		

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