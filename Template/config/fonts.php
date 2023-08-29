<div id="FontsPage" class="fonts-page-header">
    <h2 class="">
        <span class="font-switcher-icon"></span><span class="v-middle"><?= t('Application Fonts') ?></span>
    </h2>
    <p class="fonts-page-intro">
        <?= t('By default, the application uses specific fonts with fallbacks depending on the operating system. Switch to one of the fonts below to change the text style across the application. All fonts listed here are open source webfonts. These fonts are included with this plugin but only used if selected. Select from one of the fonts below to override the default fonts.') ?>
    </p>
    <form id="FontForm" class="font-form panel" method="post" action="<?= $this->url->href('FontSwitcherController', 'save', array('redirect' => 'showFonts', 'plugin' => 'FontSwitcher')) ?>" autocomplete="off">
        <h3 class=""><?= t('Font Options') ?></h3>
        <?= $this->form->csrf() ?>
        <div class="form-actions">
            <button type="submit" class="btn btn-blue"><?= t('Save Font Settings') ?></button>
            <a href="<?= $this->url->href('ConfigController', 'application', array(), false, 'FontSettingsSection') ?>" class="btn">
                <?= t('Back to Settings') ?>
            </a>
        </div>
    </form>
</div>
