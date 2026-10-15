<div id="FontsPage" class="fonts-page-header">
    <h2>
        <span class="font-switcher-icon" aria-hidden="true"></span><span class="v-middle"><?= t('Application Fonts') ?></span>
    </h2>
    <p class="fonts-page-intro">
        <?= t('Choose an application-wide font or retain the operating system defaults. The included open source font files are served locally by Kanboard, and only the selected family is loaded.') ?>
    </p>
    <p class="form-help font-global-help">
        <?= t('The selected font applies to every user after these settings are saved.') ?>
        <?php // Reuse Kanboard's information tooltip to explain the application-wide behaviour. ?>
        <?= $this->app->tooltipMarkdown(t('Font files stay on this Kanboard server and are not fetched from a third party. Another theme plugin may override the selected font.')) ?>
    </p>
    <form id="FontForm" class="font-form panel" method="post" action="<?= $this->url->href('FontSwitcherController', 'save', array('plugin' => 'FontSwitcher')) ?>" autocomplete="off">
        <h3><?= t('Font Options') ?></h3>
        <?= $this->form->csrf() ?>

        <!-- Default Fonts -->
        <fieldset class="<?= ($fontPreference == 'default_fonts') ? 'font-wrapper-enabled' : 'font-wrapper'?>">
            <legend><?= t('Default Fonts') ?></legend>
            <div class="icon-version">
                <span class="default-files-icon" aria-hidden="true"></span>
            </div>
            <span class="font-typeface" title="<?= t('Font Typeface') ?>">sans-serif</span>
            <div class="font-option-wrapper">
                <?= $this->form->radio('font_switcher_font_name', t('Use default fonts'), 'default_fonts', $fontPreference == 'default_fonts') ?>
            </div>
            <div class="font-description-wrapper">
                <ul class="font-description">
                    <li class="font-description-name"><?= e('Font Names with Fallbacks %s', '<i>' . t('(in order)') . '</i>') ?></li>
                    <li class="font-name-value">Helvetica Neue, Helvetica, Arial, sans-serif</li>
                </ul>
                <ul class="font-description-styles">
                    <li class="font-description-styles-title"><?= t('Styles') ?></li>
                    <li class="font-style-value"><?= t('Regular (400 normal)') ?></li>
                    <li class="font-style-value"><?= t('Italic') ?></li>
                    <li class="font-style-value"><?= t('Bold (700)') ?></li>
                    <li class="font-style-value"><?= t('Bold Italic (700 italic)') ?></li>
                </ul>
                <ul class="font-description-charsets">
                    <li class="font-description-charsets-title"><?= t('Character Sets') ?></li>
                    <li class="font-charset-value" title="latin"><?= t('Latin') ?></li>
                </ul>
                <p class="form-help default-notice"><?= t('Fonts may still be overridden by another theme plugin.') ?></p>
            </div>
        </fieldset>

        <!-- Lato Font -->
        <fieldset class="<?= ($fontPreference == 'lato') ? 'font-wrapper-enabled' : 'font-wrapper'?>">
            <legend>Lato</legend>
            <div class="icon-version">
                <span class="woff-icon" aria-hidden="true"></span>
                <span class="font-version" title="<?= t('Font Version Included') ?>">v24</span>
            </div>
            <span class="font-typeface" title="<?= t('Font Typeface') ?>">sans-serif</span>
            <div class="font-option-wrapper">
                <?= $this->form->radio('font_switcher_font_name', t('Use this font'), 'lato', $fontPreference == 'lato') ?>
            </div>
            <div class="font-description-wrapper">
                <ul class="font-description">
                    <li class="font-description-name"><?= e('Font Names with Fallbacks %s', '<i>' . t('(in order)') . '</i>') ?></li>
                    <li class="font-name-value">Lato, Helvetica, Arial, sans-serif</li>
                </ul>
                <ul class="font-description-styles">
                    <li class="font-description-styles-title"><?= t('Styles') ?></li>
                    <li class="font-style-value"><?= t('Regular (400 normal)') ?></li>
                    <li class="font-style-value"><?= t('Italic') ?></li>
                    <li class="font-style-value"><?= t('Bold (700)') ?></li>
                    <li class="font-style-value"><?= t('Bold Italic (700 italic)') ?></li>
                </ul>
                <ul class="font-description-charsets">
                    <li class="font-description-charsets-title"><?= t('Character Sets') ?></li>
                    <li class="font-charset-value" title="latin"><?= t('Latin') ?></li>
                    <li class="font-charset-value" title="latin-ext"><?= t('Latin Extended') ?></li>
                </ul>
                <img src="<?= $this->url->dir() ?>plugins/FontSwitcher/Assets/previews/font-preview-lato.png" class="font-preview-img" width="465" height="90" alt="<?= t('Preview of the Lato font') ?>">
            </div>
        </fieldset>

        <!-- Open Sans Font -->
        <fieldset class="<?= ($fontPreference == 'open-sans') ? 'font-wrapper-enabled' : 'font-wrapper'?>">
            <legend>Open Sans</legend>
            <div class="icon-version">
                <span class="woff-icon" aria-hidden="true"></span>
                <span class="font-version" title="<?= t('Font Version Included') ?>">v35</span>
            </div>
            <span class="font-typeface" title="<?= t('Font Typeface') ?>">sans-serif</span>
            <div class="font-option-wrapper">
                <?= $this->form->radio('font_switcher_font_name', t('Use this font'), 'open-sans', $fontPreference == 'open-sans') ?>
            </div>
            <div class="font-description-wrapper">
                <ul class="font-description">
                    <li class="font-description-name"><?= e('Font Names with Fallbacks %s', '<i>' . t('(in order)') . '</i>') ?></li>
                    <li class="font-name-value">"Open Sans", Helvetica, Arial, sans-serif</li>
                </ul>
                <ul class="font-description-styles">
                    <li class="font-description-styles-title"><?= t('Styles') ?></li>
                    <li class="font-style-value"><?= t('Regular (400 normal)') ?></li>
                    <li class="font-style-value"><?= t('Italic') ?></li>
                    <li class="font-style-value"><?= t('Bolder (600)') ?></li>
                    <li class="font-style-value"><?= t('Bolder Italic (600 italic)') ?></li>
                    <li class="font-style-value"><?= t('Bold (700)') ?></li>
                    <li class="font-style-value"><?= t('Bold Italic (700 italic)') ?></li>
                </ul>
                <ul class="font-description-charsets">
                    <li class="font-description-charsets-title"><?= t('Character Sets') ?></li>
                    <li class="font-charset-value" title="latin"><?= t('Latin') ?></li>
                    <li class="font-charset-value" title="latin-ext"><?= t('Latin Extended') ?></li>
                </ul>
                <img src="<?= $this->url->dir() ?>plugins/FontSwitcher/Assets/previews/font-preview-open-sans.png" class="font-preview-img" width="495" height="140" alt="<?= t('Preview of the Open Sans font') ?>">
            </div>
        </fieldset>

        <!-- Roboto Slab Font -->
        <fieldset class="<?= ($fontPreference == 'roboto-slab') ? 'font-wrapper-enabled' : 'font-wrapper'?>">
            <legend>Roboto Slab</legend>
            <div class="icon-version">
                <span class="woff-icon" aria-hidden="true"></span>
                <span class="font-version" title="<?= t('Font Version Included') ?>">v25</span>
            </div>
            <span class="font-typeface" title="<?= t('Font Typeface') ?>">serif</span>
            <div class="font-option-wrapper">
                <?= $this->form->radio('font_switcher_font_name', t('Use this font'), 'roboto-slab', $fontPreference == 'roboto-slab') ?>
            </div>
            <div class="font-description-wrapper">
                <ul class="font-description">
                    <li class="font-description-name"><?= e('Font Names with Fallbacks %s', '<i>' . t('(in order)') . '</i>') ?></li>
                    <li class="font-name-value">"Roboto Slab", Helvetica, Arial, serif, sans-serif</li>
                </ul>
                <ul class="font-description-styles">
                    <li class="font-description-styles-title"><?= t('Styles') ?></li>
                    <li class="font-style-value"><?= t('Regular (400 normal)') ?></li>
                    <li class="font-style-value"><?= t('Bolder (600)') ?></li>
                    <li class="font-style-value"><?= t('Bold (700)') ?></li>
                </ul>
                <ul class="font-description-charsets">
                    <li class="font-description-charsets-title"><?= t('Character Sets') ?></li>
                    <li class="font-charset-value" title="latin"><?= t('Latin') ?></li>
                    <li class="font-charset-value" title="latin-ext"><?= t('Latin Extended') ?></li>
                </ul>
                <img src="<?= $this->url->dir() ?>plugins/FontSwitcher/Assets/previews/font-preview-roboto-slab.png" class="font-preview-img" width="469" height="117" alt="<?= t('Preview of the Roboto Slab font') ?>">
            </div>
        </fieldset>

        <!-- Source Sans 3 -->
        <fieldset class="<?= ($fontPreference == 'source-sans-3') ? 'font-wrapper-enabled' : 'font-wrapper'?>">
            <legend>Source Sans 3</legend>
            <div class="icon-version">
                <span class="woff-icon" aria-hidden="true"></span>
                <span class="font-version" title="<?= t('Font Version Included') ?>">v9</span>
            </div>
            <span class="font-typeface" title="<?= t('Font Typeface') ?>">sans-serif</span>
            <div class="font-option-wrapper">
                <?= $this->form->radio('font_switcher_font_name', t('Use this font'), 'source-sans-3', $fontPreference == 'source-sans-3') ?>
            </div>
            <div class="font-description-wrapper">
                <ul class="font-description">
                    <li class="font-description-name"><?= e('Font Names with Fallbacks %s', '<i>' . t('(in order)') . '</i>') ?></li>
                    <li class="font-name-value">"Source Sans 3", Helvetica, Arial, sans-serif</li>
                </ul>
                <ul class="font-description-styles">
                    <li class="font-description-styles-title"><?= t('Styles') ?></li>
                    <li class="font-style-value"><?= t('Regular (400 normal)') ?></li>
                    <li class="font-style-value"><?= t('Italic') ?></li>
                    <li class="font-style-value"><?= t('Bolder (600)') ?></li>
                    <li class="font-style-value"><?= t('Bolder Italic (600 italic)') ?></li>
                    <li class="font-style-value"><?= t('Bold (700)') ?></li>
                    <li class="font-style-value"><?= t('Bold Italic (700 italic)') ?></li>
                </ul>
                <ul class="font-description-charsets">
                    <li class="font-description-charsets-title"><?= t('Character Sets') ?></li>
                    <li class="font-charset-value" title="latin"><?= t('Latin') ?></li>
                    <li class="font-charset-value" title="latin-ext"><?= t('Latin Extended') ?></li>
                </ul>
                <img src="<?= $this->url->dir() ?>plugins/FontSwitcher/Assets/previews/font-preview-source-sans-3.png" class="font-preview-img" width="439" height="137" alt="<?= t('Preview of the Source Sans 3 font') ?>">
            </div>
        </fieldset>

        <!-- Ubuntu Mono -->
        <fieldset class="<?= ($fontPreference == 'ubuntu-mono') ? 'font-wrapper-enabled' : 'font-wrapper'?>">
            <legend>Ubuntu Mono</legend>
            <div class="icon-version">
                <span class="woff-icon" aria-hidden="true"></span>
                <span class="font-version" title="<?= t('Font Version Included') ?>">v17</span>
            </div>
            <span class="font-typeface" title="<?= t('Font Typeface') ?>">monospace</span>
            <div class="font-option-wrapper">
                <?= $this->form->radio('font_switcher_font_name', t('Use this font'), 'ubuntu-mono', $fontPreference == 'ubuntu-mono') ?>
            </div>
            <div class="font-description-wrapper">
                <ul class="font-description">
                    <li class="font-description-name"><?= e('Font Names with Fallbacks %s', '<i>' . t('(in order)') . '</i>') ?></li>
                    <li class="font-name-value">"Ubuntu Mono", Helvetica, Arial, monospace</li>
                </ul>
                <ul class="font-description-styles">
                    <li class="font-description-styles-title"><?= t('Styles') ?></li>
                    <li class="font-style-value"><?= t('Regular (400 normal)') ?></li>
                    <li class="font-style-value"><?= t('Italic') ?></li>
                    <li class="font-style-value"><?= t('Bold (700)') ?></li>
                    <li class="font-style-value"><?= t('Bold Italic (700 italic)') ?></li>
                </ul>
                <ul class="font-description-charsets">
                    <li class="font-description-charsets-title"><?= t('Character Sets') ?></li>
                    <li class="font-charset-value" title="latin"><?= t('Latin') ?></li>
                    <li class="font-charset-value" title="latin-ext"><?= t('Latin Extended') ?></li>
                </ul>
                <img src="<?= $this->url->dir() ?>plugins/FontSwitcher/Assets/previews/font-preview-ubuntu-mono.png" class="font-preview-img" width="472" height="95" alt="<?= t('Preview of the Ubuntu Mono font') ?>">
            </div>
        </fieldset>

        <div class="form-actions">
            <button type="submit" class="btn btn-blue save-font-settings">
                <i class="fa fa-save" aria-hidden="true"></i> <?= t('Save Font Settings') ?>
            </button>
            <a href="<?= $this->url->href('ConfigController', 'application', array(), false, 'FontSettingsSection') ?>" class="btn">
                <?= t('Back to Settings') ?>
            </a>
        </div>
    </form>
</div>
