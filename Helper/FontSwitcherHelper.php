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
     * Get the application-wide font preference label.
     *
     * Related test file: tests/Integration/FontSettingsTest.php.
     *
     * @see     font-settings.php
     * @return  string
     * @author  aljawaid
     */
    public function getFontPreference()
    {
        $labels = array(
            'lato' => 'Lato',
            'open-sans' => 'Open Sans',
            'roboto-slab' => 'Roboto Slab',
            'source-sans-3' => 'Source Sans 3',
            'ubuntu-mono' => 'Ubuntu Mono',
        );
        $fontPreference = $this->fontPreferenceModel->getFontPreference();

        return isset($labels[$fontPreference]) ? $labels[$fontPreference] : t('the default application fonts');
    }
}
