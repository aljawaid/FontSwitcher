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
            <div class="icon-version">
                <span class="default-files-icon"></span>
            </div>
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
                <p class="form-help default-notice"><?= t('Note: Fonts may still be overriden by other theme plugins.') ?></p>
            </div>
        </fieldset>

        <!-- Lato Font -->
        <fieldset class="<?= ($this->task->configModel->get('font_switcher_font_name') == 'lato') ? 'font-wrapper-enabled' : 'font-wrapper'?>">
            <legend class="">Lato</legend>
            <div class="icon-version">
                <span class="woff-icon"></span>
                <span class="font-version" title="<?= t('Font Version Included') ?>">v24</span>
            </div>
            <span class="font-typeface" title="<?= t('Font Typeface') ?>">sans-serif</span>
            <div class="font-option-wrapper">
                <?= $this->form->radio('font_switcher_font_name', t('Use this font'), 'lato', isset($values['font_switcher_font_name']) && $values['font_switcher_font_name'] == 'lato') ?>
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
                <img src="<?= $this->url->dir() ?>plugins/FontSwitcher/Assets/previews/font-preview-lato.png" class="font-preview-img" title="<?= t('Font Style Preview') ?>" alt="<?= t('Font Preview') ?>">
            </div>
        </fieldset>

        <!-- Open Sans Font -->
        <fieldset class="<?= ($this->task->configModel->get('font_switcher_font_name') == 'open-sans') ? 'font-wrapper-enabled' : 'font-wrapper'?>">
            <legend class="">Open Sans</legend>
            <div class="icon-version">
                <span class="woff-icon"></span>
                <span class="font-version" title="<?= t('Font Version Included') ?>">v35</span>
            </div>
            <span class="font-typeface" title="<?= t('Font Typeface') ?>">sans-serif</span>
            <div class="font-option-wrapper">
                <?= $this->form->radio('font_switcher_font_name', t('Use this font'), 'open-sans', isset($values['font_switcher_font_name']) && $values['font_switcher_font_name'] == 'open-sans') ?>
            </div>
            <div class="font-description-wrapper">
                <ul class="font-description">
                    <li class="font-description-name"><?= e('Font Names with Fallbacks %s', '<i>' . t('(in order)') . '</i>') ?></li>
                    <li class="font-name-value">"Open Sans", Helvetica, Arial, sans-serif</li>
                </ul>
                <ul class="font-description-styles">
                    <li class="font-description-styles-title"><?= t('Styles') ?></li>
                    <li class="font-style-value">Regular (400 normal)</li>
                    <li class="font-style-value">Italic</li>
                    <li class="font-style-value">Bolder (600)</li>
                    <li class="font-style-value">Bolder Italic (600 italic)</li>
                    <li class="font-style-value">Bold (700)</li>
                    <li class="font-style-value">Bold Italic (700 italic)</li>
                </ul>
                <ul class="font-description-charsets">
                    <li class="font-description-charsets-title"><?= t('Character Sets') ?></li>
                    <li class="font-charset-value" title="latin">Latin</li>
                    <li class="font-charset-value" title="latin-ext">Latin Extended</li>
                </ul>
                <img src="<?= $this->url->dir() ?>plugins/FontSwitcher/Assets/previews/font-preview-open-sans.png" class="font-preview-img" title="<?= t('Font Style Preview') ?>" alt="<?= t('Font Preview') ?>">
            </div>
        </fieldset>

        <!-- Roboto Slab Font -->
        <fieldset class="<?= ($this->task->configModel->get('font_switcher_font_name') == 'roboto-slab') ? 'font-wrapper-enabled' : 'font-wrapper'?>">
            <legend class="">Roboto Slab</legend>
            <div class="icon-version">
                <span class="woff-icon"></span>
                <span class="font-version" title="<?= t('Font Version Included') ?>">v25</span>
            </div>
            <span class="font-typeface" title="<?= t('Font Typeface') ?>">serif</span>
            <div class="font-option-wrapper">
                <?= $this->form->radio('font_switcher_font_name', t('Use this font'), 'roboto-slab', isset($values['font_switcher_font_name']) && $values['font_switcher_font_name'] == 'roboto-slab') ?>
            </div>
            <div class="font-description-wrapper">
                <ul class="font-description">
                    <li class="font-description-name"><?= e('Font Names with Fallbacks %s', '<i>' . t('(in order)') . '</i>') ?></li>
                    <li class="font-name-value">"Roboto Slab", Helvetica, Arial, serif, sans-serif</li>
                </ul>
                <ul class="font-description-styles">
                    <li class="font-description-styles-title"><?= t('Styles') ?></li>
                    <li class="font-style-value">Regular (400 normal)</li>
                    <li class="font-style-value">Bolder (600)</li>
                    <li class="font-style-value">Bold (700)</li>
                </ul>
                <ul class="font-description-charsets">
                    <li class="font-description-charsets-title"><?= t('Character Sets') ?></li>
                    <li class="font-charset-value" title="latin">Latin</li>
                    <li class="font-charset-value" title="latin-ext">Latin Extended</li>
                </ul>
                <img src="<?= $this->url->dir() ?>plugins/FontSwitcher/Assets/previews/font-preview-roboto-slab.png" class="font-preview-img" title="<?= t('Font Style Preview') ?>" alt="<?= t('Font Preview') ?>">
            </div>
        </fieldset>

        <!-- Source Sans 3 -->
        <fieldset class="<?= ($this->task->configModel->get('font_switcher_font_name') == 'source-sans-3') ? 'font-wrapper-enabled' : 'font-wrapper'?>">
            <legend class="">Source Sans 3</legend>
            <div class="icon-version">
                <span class="woff-icon"></span>
                <span class="font-version" title="<?= t('Font Version Included') ?>">v9</span>
            </div>
            <span class="font-typeface" title="<?= t('Font Typeface') ?>">sans-serif</span>
            <div class="font-option-wrapper">
                <?= $this->form->radio('font_switcher_font_name', t('Use this font'), 'source-sans-3', isset($values['font_switcher_font_name']) && $values['font_switcher_font_name'] == 'source-sans-3') ?>
            </div>
            <div class="font-description-wrapper">
                <ul class="font-description">
                    <li class="font-description-name"><?= e('Font Names with Fallbacks %s', '<i>' . t('(in order)') . '</i>') ?></li>
                    <li class="font-name-value">"Source Sans 3", Helvetica, Arial, sans-serif</li>
                </ul>
                <ul class="font-description-styles">
                    <li class="font-description-styles-title"><?= t('Styles') ?></li>
                    <li class="font-style-value">Regular (400 normal)</li>
                    <li class="font-style-value">Italic</li>
                    <li class="font-style-value">Bolder (600)</li>
                    <li class="font-style-value">Bolder Italic (600 italic)</li>
                    <li class="font-style-value">Bold (700)</li>
                    <li class="font-style-value">Bold Italic (700 italic)</li>
                </ul>
                <ul class="font-description-charsets">
                    <li class="font-description-charsets-title"><?= t('Character Sets') ?></li>
                    <li class="font-charset-value" title="latin">Latin</li>
                    <li class="font-charset-value" title="latin-ext">Latin Extended</li>
                </ul>
                <img src="<?= $this->url->dir() ?>plugins/FontSwitcher/Assets/previews/font-preview-source-sans-3.png" class="font-preview-img" title="<?= t('Font Style Preview') ?>" alt="<?= t('Font Preview') ?>">
            </div>
        </fieldset>

        <!-- Ubuntu Mono -->
        <fieldset class="<?= ($this->task->configModel->get('font_switcher_font_name') == 'ubuntu-mono') ? 'font-wrapper-enabled' : 'font-wrapper'?>">
            <legend class="">Ubuntu Mono</legend>
            <div class="icon-version">
                <span class="woff-icon"></span>
                <span class="font-version" title="<?= t('Font Version Included') ?>">v17</span>
            </div>
            <span class="font-typeface" title="<?= t('Font Typeface') ?>">monospace</span>
            <div class="font-option-wrapper">
                <?= $this->form->radio('font_switcher_font_name', t('Use this font'), 'ubuntu-mono', isset($values['font_switcher_font_name']) && $values['font_switcher_font_name'] == 'ubuntu-mono') ?>
            </div>
            <div class="font-description-wrapper">
                <ul class="font-description">
                    <li class="font-description-name"><?= e('Font Names with Fallbacks %s', '<i>' . t('(in order)') . '</i>') ?></li>
                    <li class="font-name-value">"Ubuntu Mono", Helvetica, Arial, monospace</li>
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
                <img src="<?= $this->url->dir() ?>plugins/FontSwitcher/Assets/previews/font-preview-ubuntu-mono.png" class="font-preview-img" title="<?= t('Font Style Preview') ?>" alt="<?= t('Font Preview') ?>">
            </div>
        </fieldset>

        <div class="form-actions">
            <button type="submit" class="btn save-font-settings">
                <i class="fa fa-save"></i> <?= t('Save Font Settings') ?>
            </button>
            <a href="<?= $this->url->href('ConfigController', 'application', array(), false, 'FontSettingsSection') ?>" class="btn">
                <?= t('Back to Settings') ?>
            </a>
        </div>
    </form>
</div>
