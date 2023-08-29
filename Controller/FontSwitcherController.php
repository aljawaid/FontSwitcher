<?php

namespace Kanboard\Plugin\FontSwitcher\Controller;

use Kanboard\Controller\BaseController;
use Kanboard\Core\Plugin\Directory;

/**
 * Plugin FontSwitcher
 *
 * Class FontSwitcherController
 * @package  Kanboard\Controller
 * @author   aljawaid
 */
class FontSwitcherController extends \Kanboard\Controller\PluginController
{
    /**
     * Display the Settings Page
     * Use this function to create a page showing your template content.
     * This function must be checked with 'Views - Add Menu Item - Template Hook' in Plugin.php
     * This function must be checked with 'Extra Page - Routes' in Plugin.php
     * Use: $this->helper->layout->config for config settings menu sidebar
     * Use: $this->helper->layout->plugin for plugin menu sidebar
     *
     * @access public
     */
    public function showFonts()
    {
        $this->response->html($this->helper->layout->config('fontSwitcher:config/fonts', array(
            'title' => e('Settings %s Font Switcher', ' &#10562; ')
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
        $values =  $this->request->getValues();
        $redirect = $this->request->getStringParam('redirect', 'showFonts');

        if ($this->configModel->save($values)) {
            $this->languageModel->loadCurrentLanguage();
            $this->flash->success(t('Font settings saved successfully.'));
        } else {
            $this->flash->failure(t('Unable to save font settings.'));
        }

        $this->response->redirect($this->helper->url->to('FontSwitcherController', $redirect, ['plugin' => 'FontSwitcher']));
    }
}
