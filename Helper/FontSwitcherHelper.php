<?php

namespace Kanboard\Plugin\FontSwitcher\Helper;

use Kanboard\Core\Base;

/**
 * FontSwitcher Helper
 *
 * @package  Helper
 * @author   aljawaid
 */
class FontSwitcherHelper extends Base
{
    /**
     * Get the User Font Preference
     *
     * @see     font-settings.php
     * @return  string
     * @author  aljawaid
     */
    public function getFontPreference()
    {
        if ($this->configModel->get('font_switcher_font_name') == 'lato') {
            return 'Lato';
        } elseif ($this->configModel->get('font_switcher_font_name') == 'open-sans') {
            return '&#39;Open Sans&#39;';
        } elseif ($this->configModel->get('font_switcher_font_name') == 'roboto-slab') {
            return '&#39;Roboto Slab&#39;';
        } elseif ($this->configModel->get('font_switcher_font_name') == 'source-sans-3') {
            return '&#39;Source Sans 3&#39;';
        } elseif ($this->configModel->get('font_switcher_font_name') == 'ubuntu-mono') {
            return '&#39;Ubuntu Mono&#39;';
        } else {
            return t('the default application fonts');
        }
    }
}
