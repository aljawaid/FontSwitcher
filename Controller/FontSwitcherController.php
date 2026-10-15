<?php

namespace Kanboard\Plugin\FontSwitcher\Controller;

use Kanboard\Controller\BaseController;

/**
 * Plugin FontSwitcher
 *
 * Class FontSwitcherController
 * @package  Kanboard\Controller
 * @author   aljawaid
 */
class FontSwitcherController extends BaseController
{
    /**
     * Display the Settings Page
     * Related test file: tests/Integration/FontSettingsTest.php.
     *
     * @access public
     */
    public function showFonts()
    {
        $this->response->html($this->helper->layout->config('fontSwitcher:config/fonts', array(
            'title' => e('Settings %s Font Switcher', ' &#10562; '),
            'fontPreference' => $this->fontPreferenceModel->getFontPreference(),
        )));
    }

    /**
     * Save Settings
     *
     * @see     ConfigController.php   save()
     * @author  Frederic Guillot
     * @author  aljawaid
     */
    public function save()
    {
        $values = $this->request->getValues();

        if ($this->fontPreferenceModel->saveFontPreference($values)) {
            $this->languageModel->loadCurrentLanguage();
            $this->flash->success(t('Font settings saved successfully.'));
        } else {
            $this->flash->failure(t('Unable to save font settings.'));
        }

        $this->response->redirect($this->helper->url->to('FontSwitcherController', 'showFonts', array('plugin' => 'FontSwitcher')));
    }
}
