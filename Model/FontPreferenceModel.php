<?php

namespace Kanboard\Plugin\FontSwitcher\Model;

use Kanboard\Core\Base;

/**
 * Validate and persist the application-wide font preference.
 *
 * Related test file: tests/Integration/FontSettingsTest.php.
 *
 * @package Model
 * @author  aljawaid
 */
class FontPreferenceModel extends Base
{
    const CONFIG_KEY = 'font_switcher_font_name';
    const DEFAULT_FONT = 'default_fonts';

    private const ALLOWED_FONTS = array(
        self::DEFAULT_FONT,
        'lato',
        'open-sans',
        'roboto-slab',
        'source-sans-3',
        'ubuntu-mono',
    );

    /**
     * Return the configured preference, falling back safely when stored data is invalid.
     *
     * @return string
     */
    public function getFontPreference()
    {
        $fontPreference = $this->configModel->getOption(self::CONFIG_KEY);

        return $this->isAllowedFontPreference($fontPreference) ? $fontPreference : self::DEFAULT_FONT;
    }

    /**
     * Save only the recognised font preference from submitted settings.
     *
     * @param  array $values
     * @return bool
     */
    public function saveFontPreference(array $values)
    {
        $fontPreference = isset($values[self::CONFIG_KEY]) ? $values[self::CONFIG_KEY] : '';

        if (! $this->isAllowedFontPreference($fontPreference)) {
            return false;
        }

        return $this->configModel->save(array(
            self::CONFIG_KEY => $fontPreference,
        ));
    }

    /**
     * Check whether a preference can be persisted and loaded.
     *
     * @param  mixed $fontPreference
     * @return bool
     */
    public function isAllowedFontPreference($fontPreference)
    {
        return is_string($fontPreference) && in_array($fontPreference, self::ALLOWED_FONTS, true);
    }

    /**
     * Return the supported identifiers for integration checks and presentation helpers.
     *
     * @return array
     */
    public function getAllowedFontPreferences()
    {
        return self::ALLOWED_FONTS;
    }
}
