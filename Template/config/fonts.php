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

        <!-- Default Fonts -->
        <fieldset class="<?= ($this->task->configModel->get('font_switcher_font_name') == 'default_fonts') ? 'font-wrapper-enabled' : 'font-wrapper'?>">
            <legend class=""><?= t('Default Fonts') ?></legend>
            <span class="default-files-icon"></span>
            <span class="font-typeface" title="<?= t('Font Typeface') ?>">sans-serif</span>
            <div class="font-option-wrapper">
                <?= $this->form->radio('font_switcher_font_name', t('Use default fonts'), 'default_fonts', true, isset($values['font_switcher_font_name']) && $values['font_switcher_font_name'] == 'default_fonts') ?>
            </div>
            <div class="font-description-wrapper">
                <ul class="font-description">
                    <li class="font-description-name"><?= e('Font Names with Fallbacks %s', '<i>' . t('(in order)') . '</i>') ?></li>
                    <li class="font-name-value">Helvetica Neue, Helvetica, Arial, sans-serif</li>
                </ul>
                <ul class="font-description-styles">
                    <li class="font-description-styles-title"><?= t('Styles') ?></li>
                    <li class="font-style-value">Regular (400 normal)</li>
                    <li class="font-style-value">Italic</li>
                    <li class="font-style-value">Bold (700)</li>
                    <li class="font-style-value">Bold Italic (700 italic)</li>
                </ul>
                <ul class="font-description-charsets">
                    <li class="font-description-charsets-title"><?= t('Character Sets') ?></li>
                    <li class="font-charset-value" title="latin">Latin</li>
                </ul>
            </div>
        </fieldset>

        <!-- Lato Font -->
        <fieldset class="<?= ($this->task->configModel->get('font_switcher_font_name') == 'lato') ? 'font-wrapper-enabled' : 'font-wrapper'?>">
            <legend class="">Lato</legend>
            <span class="woff-icon"></span>
            <span class="font-version" title="<?= t('Font Version Included') ?>">v24</span>
            <span class="font-typeface" title="<?= t('Font Typeface') ?>">sans-serif</span>
            <div class="font-option-wrapper">
                <?= $this->form->radio('font_switcher_font_name', t('Use font'), 'lato', isset($values['font_switcher_font_name']) && $values['font_switcher_font_name'] == 'lato') ?>
            </div>
            <div class="font-description-wrapper">
                <ul class="font-description">
                    <li class="font-description-name"><?= e('Font Names with Fallbacks %s', '<i>' . t('(in order)') . '</i>') ?></li>
                    <li class="font-name-value">Lato, Helvetica, Arial, sans-serif</li>
                </ul>
                <ul class="font-description-styles">
                    <li class="font-description-styles-title"><?= t('Styles') ?></li>
                    <li class="font-style-value">Regular (400 normal)</li>
                    <li class="font-style-value">Italic</li>
                    <li class="font-style-value">Bold (700)</li>
                    <li class="font-style-value">Bold Italic (700 italic)</li>
                </ul>
                <ul class="font-description-charsets">
                    <li class="font-description-charsets-title"><?= t('Character Sets') ?></li>
                    <li class="font-charset-value" title="latin">Latin</li>
                    <li class="font-charset-value" title="latin-ext">Latin Extended</li>
                </ul>
            </div>
        </fieldset>

        <div class="form-actions">
            <button type="submit" class="btn btn-blue"><?= t('Save Font Settings') ?></button>
            <a href="<?= $this->url->href('ConfigController', 'application', array(), false, 'FontSettingsSection') ?>" class="btn">
                <?= t('Back to Settings') ?>
            </a>
        </div>
    </form>
</div>
