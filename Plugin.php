<?php

namespace Kanboard\Plugin\FontSwitcher;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;

class Plugin extends Base
{
    public function initialize()
    {
        // CSS - Asset Hook
        //  - Keep filename lowercase
        $this->hook->on('template:layout:css', array('template' => 'plugins/FontSwitcher/Assets/css/font-switcher.css'));
        $this->hook->on('template:layout:css', array('template' => 'plugins/FontSwitcher/Assets/css/font-switcher-icons.css'));

        // Views - Template Hook
        //  - Override name should start lowercase e.g. pluginNameExampleCamelCase
        $this->template->hook->attach('template:config:application', 'fontSwitcher:config/font-settings');

        // Extra Page - Routes
        //  - Example: $this->route->addRoute('/my/custom/route', 'MyController', 'show', 'PluginNameExampleStudlyCaps');
        //  - Must have the corresponding action in the matching controller
        $this->route->addRoute('/settings/fonts', 'FontSwitcherController', 'showFonts', 'FontSwitcher');
    }

    public function onStartup()
    {
        Translator::load($this->languageModel->getCurrentLanguage(), __DIR__ . '/Locale');
    }

    public function getPluginName()
    {
        // Plugin Name MUST be identical to namespace for Plugin Directory to detect updated versions - do not translate the plugin name here
        return 'FontSwitcher';
    }

    public function getPluginDescription()
    {
        return t('Choose a new font style from a variety of open source fonts replacing the default font \'Helvetica Neue\' (Mac), \'Helvetica\' (Mac), \'Arial\' (Windows) to a different typeface giving your application a fresh look.');
    }

    public function getPluginAuthor()
    {
        return 'aljawaid';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }

    public function getCompatibleVersion()
    {
        // Examples: '>=1.0.37' '<1.0.37' '<=1.0.37'
        return '>=1.2.20';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/aljawaid/FontSwitcher';
    }
}
