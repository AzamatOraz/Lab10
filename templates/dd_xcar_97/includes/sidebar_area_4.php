<?php
    function sidebar_area_4() {
        $isPreview = $GLOBALS['theme_settings']['is_preview'];
        $GLOBALS['isModuleContentExists'] = false;
        ob_start();
?>
        <section class=" bd-section-5 bd-tagstyles" id="section5" data-section-title="modules">
    <div class="bd-container-inner bd-margins clearfix">
        <div class=" bd-layoutcontainer-35 bd-columns bd-no-margins">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row ">
                <div class=" bd-columnwrapper-76 
 col-sm-3">
    <div class="bd-layoutcolumn-76 bd-column" ><div class="bd-vertical-align-wrapper"><?php
    renderTemplateFromIncludes('joomlaposition_33');
?></div></div>
</div>
	
		<div class=" bd-columnwrapper-80 
 col-sm-3">
    <div class="bd-layoutcolumn-80 bd-column" ><div class="bd-vertical-align-wrapper"><?php
    renderTemplateFromIncludes('joomlaposition_35');
?></div></div>
</div>
	
		<div class=" bd-columnwrapper-82 
 col-sm-3">
    <div class="bd-layoutcolumn-82 bd-column" ><div class="bd-vertical-align-wrapper"><?php
    renderTemplateFromIncludes('joomlaposition_37');
?></div></div>
</div>
	
		<div class=" bd-columnwrapper-84 
 col-sm-3">
    <div class="bd-layoutcolumn-84 bd-column" ><div class="bd-vertical-align-wrapper"><?php
    renderTemplateFromIncludes('joomlaposition_39');
?></div></div>
</div>
            </div>
        </div>
    </div>
</div>
	
		<div class=" bd-layoutcontainer-38 bd-columns bd-no-margins">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row ">
                <div class=" bd-columnwrapper-86 
 col-sm-6">
    <div class="bd-layoutcolumn-86 bd-column" ><div class="bd-vertical-align-wrapper"><?php
    renderTemplateFromIncludes('joomlaposition_41');
?></div></div>
</div>
	
		<div class=" bd-columnwrapper-88 
 col-sm-6">
    <div class="bd-layoutcolumn-88 bd-column" ><div class="bd-vertical-align-wrapper"><?php
    renderTemplateFromIncludes('joomlaposition_43');
?></div></div>
</div>
            </div>
        </div>
    </div>
</div>
	
		<div class=" bd-layoutcontainer-40 bd-columns bd-no-margins">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row ">
                <div class=" bd-columnwrapper-90 
 col-sm-12">
    <div class="bd-layoutcolumn-90 bd-column" ><div class="bd-vertical-align-wrapper"><?php
    renderTemplateFromIncludes('joomlaposition_45');
?></div></div>
</div>
            </div>
        </div>
    </div>
</div>
    </div>
</section>
        <?php
            $content = trim(ob_get_clean());
            $modContentExists = $GLOBALS['isModuleContentExists'];
            $showContent = strlen(trim(preg_replace('/<!-- empty::begin -->[\s\S]*?<!-- empty::end -->/', '', $content)));
        ?>
        <?php if ($isPreview || ($content && true === $modContentExists)): ?>
            <aside class="bd-sidebararea-4-column  bd-flex-vertical bd-flex-fixed <?php echo ($isPreview && !$modContentExists) ? ' hidden bd-hidden-sidebar' : ''; ?>">
                <div class="bd-sidebararea-4 bd-flex-wide  bd-margins">
                    
                    <?php echo $content; ?>
                    
                </div>
            </aside>
        <?php endif; ?>
<?php
    }
?>