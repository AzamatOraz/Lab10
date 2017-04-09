<?php
function joomlaposition_45() {
    $document = JFactory::getDocument();
    $view = $document->view;
    $isPreview  = $GLOBALS['theme_settings']['is_preview'];
    if (isset($GLOBALS['isModuleContentExists']) && false == $GLOBALS['isModuleContentExists'])
        $GLOBALS['isModuleContentExists'] = $view->containsModules('dd-footer-7') ? true : false;
?>
    <?php if ($isPreview || $view->containsModules('dd-footer-7')) : ?>

    <?php if ($isPreview && !$view->containsModules('dd-footer-7')) : ?>
    <!-- empty::begin -->
    <?php endif; ?>
    <div class=" bd-joomlaposition-45 clearfix" <?php echo buildDataPositionAttr('dd-footer-7'); ?>>
        <?php echo $view->position('dd-footer-7', 'block%joomlaposition_block_45', '45'); ?>
    </div>
    <?php if ($isPreview && !$view->containsModules('dd-footer-7')) : ?>
    <!-- empty::end -->
    <?php endif; ?>
    <?php endif; ?>
<?php
}