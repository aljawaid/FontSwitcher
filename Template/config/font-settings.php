<fieldset id="FontSettingsSection" class="panel">
    <h3 class="">
        <span class="font-switcher-icon"></span>
        <span class="v-middle"><?= t('Font Switcher') ?></span>
    </h3>
    <p class="">
        <?= e('The site font can be changed in the %s page.', $this->url->link(t('Font Settings'), 'FontSwitcherController', 'showFonts', ['plugin' => 'FontSwitcher'], false, 'font-page-link', t('Visit page'), false, '')) ?>
    </p>
</fieldset>
