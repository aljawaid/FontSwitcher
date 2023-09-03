<?php

namespace Kanboard\Plugin\FontSwitcher\Helper;

use Kanboard\Core\Base;

/**
 * FontSwitcher Helper
 *
 * @package  Helper
 * @see
 * @author   aljawaid
 */
class FontSwitcherHelper extends Base
{
    /**
     * Get the User Font Preference
     *
     * @return void
     * @author
     */
    public function getFontPreference()
    {
        if ($this->configModel->get('font_switcher_font_name') == 'lato') {
            return 'Lato';
        } elseif ($this->configModel->get('font_switcher_font_name') == 'open-sans') {
            return 'Open Sans';
        } elseif ($this->configModel->get('font_switcher_font_name') == 'roboto-slab') {
            return 'Roboto Slab';
        } elseif ($this->configModel->get('font_switcher_font_name') == 'source-sans-3') {
            return 'Source Sans 3';
        } elseif ($this->configModel->get('font_switcher_font_name') == 'ubuntu-mono') {
            return 'Ubuntu Mono';
        } else {
            return t('the default application fonts');
        }
    }
}
