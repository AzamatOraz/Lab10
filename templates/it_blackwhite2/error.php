<?php
//  @copyright	Copyright (C) 2013 IceTheme. All Rights Reserved
//  @license	Copyrighted Commercial Software 
//  @author     IceTheme (icetheme.com)

defined('_JEXEC') or die;

$params = JFactory::getApplication()->getTemplate(true)->params;
$document = &JFactory::getDocument();
$app = JFactory::getApplication();
$sitename = $app->getCfg('sitename');

// Define Constants 
define('IT_THEME', $this->baseurl .'/templates/'. $this->template);

// get params
$it_logo 					= $params->get('logo');
$it_logo_img				= '<img class="logo" src="'. JURI::root() . $params->get('logo') .'" alt="'. $sitename .'" />';
$TemplateStyle 			  =  $params->get('TemplateStyle'); 
$it_responsive        	  =  $params->get('responsive_template');


//get language and direction
$doc = JFactory::getDocument();
$this->language = $doc->language;
$this->direction = $doc->direction;

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<meta name="language" content="<?php echo $this->language; ?>" />

<?php if ($it_responsive ==1) { ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php } ?>

<title><?php echo $this->error->getCode(); ?> - <?php echo $this->title; ?></title>

<link rel="stylesheet" type="text/css" href="<?php echo IT_THEME; ?>/less/style.css" />
<link id="stylesheet" rel="stylesheet" type="text/css" href="<?php echo IT_THEME; ?>/less/styles/<?php echo $TemplateStyle; ?>.css" />
    
</head>

<body class="error_page">

	<?php if ($it_logo != "") { ?>
    <div id="logo_page">	
        <a href="<?php echo $this->baseurl ?>"><?php echo $it_logo_img; ?></a>	
    </div>
    <?php } ?>    
	
   <div id="content_page">
    
              
     <h2><?php echo JText::_('JERROR_LAYOUT_PAGE_NOT_FOUND'); ?></h2>
      
         <p class="alert"><?php echo $this->title; ?> - <?php echo $this->error->getMessage();?></p>
           
          <p><?php echo JText::_('JERROR_LAYOUT_GO_TO_THE_HOME_PAGE'); ?></p>
          
          <p><a href="<?php echo $this->baseurl; ?>" class="btn btn-inverse"><i class="icon-home"></i> <?php echo JText::_('JERROR_LAYOUT_HOME_PAGE'); ?></a></p>
              
           
          
    </div>
      
    
</body>
</html>



