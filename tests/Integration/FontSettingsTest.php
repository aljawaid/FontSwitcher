<?php

/**
 * FontSwitcher settings integration test.
 *
 * Related files: Plugin.php, Controller/FontSwitcherController.php,
 * Model/FontPreferenceModel.php and Template/config/fonts.php.
 */

declare(strict_types=1);

// phpcs:disable PSR1.Files.SideEffects.FoundWithSymbols -- Standalone integration test executes immediately and defines local helpers.

$kanboardRoot = getenv('KANBOARD_ROOT') ?: dirname(__DIR__, 4);
$databaseFiles = array(
    $kanboardRoot . '/data/font-switcher-settings-test.sqlite',
    $kanboardRoot . '/data/font-switcher-settings-test.sqlite-shm',
    $kanboardRoot . '/data/font-switcher-settings-test.sqlite-wal',
);

foreach ($databaseFiles as $databaseFile) {
    if (is_file($databaseFile)) {
        unlink($databaseFile);
    }
}

register_shutdown_function(function () use (&$container, $databaseFiles) {
    if (isset($container['db'])) {
        $container['db']->closeConnection();
    }

    foreach ($databaseFiles as $databaseFile) {
        if (is_file($databaseFile)) {
            unlink($databaseFile);
        }
    }
});

define('PLUGINS_DIR', $kanboardRoot . '/plugins');
define('DB_FILENAME', $databaseFiles[0]);

require $kanboardRoot . '/app/common.php';

$container['pluginLoader']->getPlugins();

assertTrue($container['applicationAuthorization']->isAllowed('FontSwitcherController', 'showFonts', Kanboard\Core\Security\Role::APP_ADMIN), 'Administrators cannot view font settings.');
assertTrue($container['applicationAuthorization']->isAllowed('FontSwitcherController', 'save', Kanboard\Core\Security\Role::APP_ADMIN), 'Administrators cannot save font settings.');
assertFalse($container['applicationAuthorization']->isAllowed('FontSwitcherController', 'showFonts', Kanboard\Core\Security\Role::APP_USER), 'Regular users can view font settings.');
assertFalse($container['applicationAuthorization']->isAllowed('FontSwitcherController', 'save', Kanboard\Core\Security\Role::APP_USER), 'Regular users can save font settings.');

assertSame('default_fonts', $container['fontPreferenceModel']->getFontPreference(), 'Fresh installations do not use the safe default preference.');
assertSame(
    array('default_fonts', 'lato', 'open-sans', 'roboto-slab', 'source-sans-3', 'ubuntu-mono'),
    $container['fontPreferenceModel']->getAllowedFontPreferences(),
    'The validated preference list is incomplete.'
);

assertTrue($container['configModel']->save(array('font_switcher_test_guard' => 'unchanged')), 'The test guard could not be created.');
assertTrue($container['fontPreferenceModel']->saveFontPreference(array(
    'font_switcher_font_name' => 'source-sans-3',
    'font_switcher_test_guard' => 'changed',
)), 'A supported preference could not be saved.');
assertSame('source-sans-3', $container['fontPreferenceModel']->getFontPreference(), 'The supported preference was not loaded.');
assertSame('Source Sans 3', $container['helper']->fontSwitcherHelper->getFontPreference(), 'The presentation helper returned the wrong font label.');
assertSame('unchanged', $container['configModel']->getOption('font_switcher_test_guard'), 'An unrelated submitted setting was changed.');

assertFalse($container['fontPreferenceModel']->saveFontPreference(array(
    'font_switcher_font_name' => 'untrusted-font',
)), 'An unsupported preference was accepted.');
assertSame('source-sans-3', $container['fontPreferenceModel']->getFontPreference(), 'An invalid preference replaced the saved preference.');

assertTrue($container['configModel']->save(array('font_switcher_font_name' => 'invalid-stored-value')), 'The invalid-state fixture could not be created.');
assertSame('default_fonts', $container['fontPreferenceModel']->getFontPreference(), 'An invalid stored preference did not fall back safely.');

echo 'FontSwitcher settings integration test passed.' . PHP_EOL;

function assertTrue(bool $actual, string $message): void
{
    if (! $actual) {
        throw new RuntimeException($message);
    }
}

function assertFalse(bool $actual, string $message): void
{
    assertTrue(! $actual, $message);
}

function assertSame($expected, $actual, string $message): void
{
    if ($expected !== $actual) {
        throw new RuntimeException($message . ' Expected ' . var_export($expected, true) . ', got ' . var_export($actual, true) . '.');
    }
}
