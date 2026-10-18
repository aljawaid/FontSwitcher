<?php

namespace Kanboard\Plugin\FontSwitcher;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Security\Role;
use Kanboard\Core\Translator;

class Plugin extends Base
{
    public function initialize()
    {
        // CSS - Asset Hook
        //  - Keep filename lowercase
        $this->hook->on('template:layout:css', array('template' => 'plugins/FontSwitcher/Assets/css/font-switcher.css'));
        $this->hook->on('template:layout:css', array('template' => 'plugins/FontSwitcher/Assets/css/font-switcher-icons.css'));
        if ($this->configModel->get('font_switcher_font_name') == 'lato') {
            $this->hook->on('template:layout:css', array('template' => 'plugins/FontSwitcher/Assets/fonts/lato/lato.css'));
            $this->hook->on('template:layout:css', array('template' => 'plugins/FontSwitcher/Assets/fonts/lato/cyrillic.css'));
        } elseif ($this->configModel->get('font_switcher_font_name') == 'open-sans') {
            $this->hook->on('template:layout:css', array('template' => 'plugins/FontSwitcher/Assets/fonts/open-sans/open-sans.css'));
            $this->hook->on('template:layout:css', array('template' => 'plugins/FontSwitcher/Assets/fonts/open-sans/cyrillic.css'));
        } elseif ($this->configModel->get('font_switcher_font_name') == 'roboto-slab') {
            $this->hook->on('template:layout:css', array('template' => 'plugins/FontSwitcher/Assets/fonts/roboto-slab/roboto-slab.css'));
            $this->hook->on('template:layout:css', array('template' => 'plugins/FontSwitcher/Assets/fonts/roboto-slab/cyrillic.css'));
        } elseif ($this->configModel->get('font_switcher_font_name') == 'source-sans-3') {
            $this->hook->on('template:layout:css', array('template' => 'plugins/FontSwitcher/Assets/fonts/source-sans-3/source-sans-3.css'));
            $this->hook->on('template:layout:css', array('template' => 'plugins/FontSwitcher/Assets/fonts/source-sans-3/cyrillic.css'));
        } elseif ($this->configModel->get('font_switcher_font_name') == 'ubuntu-mono') {
            $this->hook->on('template:layout:css', array('template' => 'plugins/FontSwitcher/Assets/fonts/ubuntu-mono/ubuntu-mono.css'));
            $this->hook->on('template:layout:css', array('template' => 'plugins/FontSwitcher/Assets/fonts/ubuntu-mono/cyrillic.css'));
        }

        // Views - Template Hook
        //  - Override name should start lowercase e.g. pluginNameExampleCamelCase
        $this->template->hook->attach('template:config:application', 'fontSwitcher:config/font-settings');

        // Extra Page - Routes
        //  - Example: $this->route->addRoute('/my/custom/route', 'MyController', 'show', 'PluginNameExampleStudlyCaps');
        //  - Must have the corresponding action in the matching controller
        $this->route->addRoute('/settings/fonts', 'FontSwitcherController', 'showFonts', 'FontSwitcher');

        // Font settings affect every user; access rules are covered by tests/Integration/FontSettingsTest.php.
        $this->applicationAccessMap->add('FontSwitcherController', '*', Role::APP_ADMIN);

        // Helper
        //  - Example: $this->helper->register('helperClassNameCamelCase', '\Kanboard\Plugin\PluginNameExampleStudlyCaps\Helper\HelperNameExampleStudlyCaps');
        //  - Add each Helper in the 'use' section at the top of this file
        $this->helper->register('fontSwitcherHelper', '\Kanboard\Plugin\FontSwitcher\Helper\FontSwitcherHelper');
    }

    public function getClasses()
    {
        return array(
            'Plugin\FontSwitcher\Model' => array(
                'FontPreferenceModel',
            ),
        );
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
        return t('Choose a new font style from a variety of open source fonts replacing the default \'Helvetica Neue\' (Mac) and \'Arial\' (Windows) fonts to a different typeface giving your application a fresh new look. Improve readability and reduce eye strain by choosing from different styles of sans-serif fonts or select an article-type serif type or even a code-type monospace style. Font styles are applied instantly across the site for all users.');
    }

    public function getPluginAuthor()
    {
        return 'aljawaid';
    }

    public function getPluginVersion()
    {
        return '1.7.3';
    }

    public function getCompatibleVersion()
    {
        // Examples: '>=1.0.37' '<1.0.37' '<=1.0.37'
        return '>=1.2.54';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/aljawaid/FontSwitcher';
    }
}
