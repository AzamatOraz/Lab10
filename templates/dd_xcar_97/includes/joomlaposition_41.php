<?php
function joomlaposition_41() {
    $document = JFactory::getDocument();
    $view = $document->view;
    $isPreview  = $GLOBALS['theme_settings']['is_preview'];
    if (isset($GLOBALS['isModuleContentExists']) && false == $GLOBALS['isModuleContentExists'])
        $GLOBALS['isModuleContentExists'] = $view->containsModules('dd-footer-5') ? true : false;
?>
    <?php if ($isPreview || $view->containsModules('dd-footer-5')) : ?>

    <?php if ($isPreview && !$view->containsModules('dd-footer-5')) : ?>
    <!-- empty::begin -->
    <?php endif; ?>
    <div class=" bd-joomlaposition-41 clearfix" <?php echo buildDataPositionAttr('dd-footer-5'); ?>>
        <?php echo $view->position('dd-footer-5', 'block%joomlaposition_block_41', '41'); ?>
    </div>
    <?php if ($isPreview && !$view->containsModules('dd-footer-5')) : ?>
    <!-- empty::end -->
    <?php endif; ?>
    <?php endif; ?>
<?php
}