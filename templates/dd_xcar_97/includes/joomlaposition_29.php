<?php
function joomlaposition_29() {
    $document = JFactory::getDocument();
    $view = $document->view;
    $isPreview  = $GLOBALS['theme_settings']['is_preview'];
    if (isset($GLOBALS['isModuleContentExists']) && false == $GLOBALS['isModuleContentExists'])
        $GLOBALS['isModuleContentExists'] = $view->containsModules('dd-top-6') ? true : false;
?>
    <?php if ($isPreview || $view->containsModules('dd-top-6')) : ?>

    <?php if ($isPreview && !$view->containsModules('dd-top-6')) : ?>
    <!-- empty::begin -->
    <?php endif; ?>
    <div class=" bd-joomlaposition-29 clearfix" <?php echo buildDataPositionAttr('dd-top-6'); ?>>
        <?php echo $view->position('dd-top-6', 'block%joomlaposition_block_29', '29'); ?>
    </div>
    <?php if ($isPreview && !$view->containsModules('dd-top-6')) : ?>
    <!-- empty::end -->
    <?php endif; ?>
    <?php endif; ?>
<?php
}