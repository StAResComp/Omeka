<?php head(array('title'=>"Confirm '" . $pluginInfo->name . "' Uninstall", 'bodyclass'=>'plugins')); ?>

<div id="primary">
    <?php echo flash(); ?>
    <h2>Confirm '<?php echo html_escape($pluginInfo->name); ?>' Uninstall</h2>
    <p><strong>Are you sure you want to uninstall this plugin?</strong></p>
    <?php if ($message): ?>
    <?php echo $message; ?>
    <?php endif; ?>
    <form action="<?php echo uri('plugins/uninstall'); ?>" method="post">
        <p><input type="checkbox" name="confirm" /> Yes, I want to uninstall this plugin.</p>
        <input type="hidden" name="name" value="<?php echo $pluginInfo->directoryName; ?>" />
        <p id="uninstall-confirm"><input type="submit" class="uninstall submit" name="uninstall-confirm" class="foo" value="Uninstall" /> <span>or <a href="<?php echo uri('plugins') ?>">Cancel</a></span></p>
    </form>
</div>

<?php foot(); ?>