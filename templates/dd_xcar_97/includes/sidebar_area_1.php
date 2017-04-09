<?php
    function sidebar_area_1() {
        $isPreview = $GLOBALS['theme_settings']['is_preview'];
        $GLOBALS['isModuleContentExists'] = false;
        ob_start();
?>
        <section class=" bd-section-12 bd-tagstyles" id="section5" data-section-title="modules">
    <div class="bd-container-inner bd-margins clearfix">
        <div class=" bd-layoutcontainer-12 bd-columns bd-no-margins">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row ">
                <div class=" bd-columnwrapper-22 
 col-sm-3">
    <div class="bd-layoutcolumn-22 bd-column" ><div class="bd-vertical-align-wrapper"><?php
    renderTemplateFromIncludes('joomlaposition_5');
?></div></div>
</div>
	
		<div class=" bd-columnwrapper-31 
 col-sm-3">
    <div class="bd-layoutcolumn-31 bd-column" ><div class="bd-vertical-align-wrapper"><?php
    renderTemplateFromIncludes('joomlaposition_17');
?></div></div>
</div>
	
		<div class=" bd-columnwrapper-39 
 col-sm-3">
    <div class="bd-layoutcolumn-39 bd-column" ><div class="bd-vertical-align-wrapper"><?php
    renderTemplateFromIncludes('joomlaposition_21');
?></div></div>
</div>
	
		<div class=" bd-columnwrapper-66 
 col-sm-3">
    <div class="bd-layoutcolumn-66 bd-column" ><div class="bd-vertical-align-wrapper"><?php
    renderTemplateFromIncludes('joomlaposition_25');
?></div></div>
</div>
            </div>
        </div>
    </div>
</div>
	
		<div class=" bd-layoutcontainer-30 bd-columns bd-no-margins">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row ">
                <div class=" bd-columnwrapper-68 
 col-sm-6">
    <div class="bd-layoutcolumn-68 bd-column" ><div class="bd-vertical-align-wrapper"><?php
    renderTemplateFromIncludes('joomlaposition_27');
?></div></div>
</div>
	
		<div class=" bd-columnwrapper-70 
 col-sm-6">
    <div class="bd-layoutcolumn-70 bd-column" ><div class="bd-vertical-align-wrapper"><?php
    renderTemplateFromIncludes('joomlaposition_29');
?></div></div>
</div>
            </div>
        </div>
    </div>
</div>
	
		<div class=" bd-layoutcontainer-33 bd-columns bd-no-margins">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row ">
                <div class=" bd-columnwrapper-72 
 col-sm-12">
    <div class="bd-layoutcolumn-72 bd-column" ><div class="bd-vertical-align-wrapper"><?php
    renderTemplateFromIncludes('joomlaposition_31');
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
            <aside class="bd-sidebararea-1-column  bd-flex-vertical bd-flex-fixed <?php echo ($isPreview && !$modContentExists) ? ' hidden bd-hidden-sidebar' : ''; ?>">
                <div class="bd-sidebararea-1 bd-flex-wide  bd-margins">
                    
                    <?php echo $content; ?>
                    
                </div>
            </aside>
        <?php endif; ?>
<?php
    }
?>