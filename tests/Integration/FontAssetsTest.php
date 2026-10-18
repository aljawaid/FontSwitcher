<?php

/**
 * FontSwitcher bundled font asset integration test.
 *
 * Related files: Assets/css/font-switcher.css, Assets/fonts/FONT_SOURCES.md,
 * Assets/fonts/SHA256SUMS, the family CSS and WOFF2 assets, and the family licence files.
 */

declare(strict_types=1);

// phpcs:disable PSR1.Files.SideEffects.FoundWithSymbols -- Standalone integration test executes immediately and defines local helpers.

$pluginRoot = dirname(__DIR__, 2);
$fontRoot = $pluginRoot . '/Assets/fonts';
$interfaceCss = file_get_contents($pluginRoot . '/Assets/css/font-switcher.css');
$manifestPath = $fontRoot . '/SHA256SUMS';
$manifestLines = file($manifestPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$manifestEntries = array();

foreach ($manifestLines as $line) {
    if (! preg_match('/^([a-f0-9]{64})  (.+)$/', $line, $matches)) {
        throw new RuntimeException('Invalid SHA256SUMS line: ' . $line);
    }

    $relativePath = $matches[2];
    assertFalse(isset($manifestEntries[$relativePath]), 'Duplicate manifest path: ' . $relativePath);
    $manifestEntries[$relativePath] = $matches[1];

    $assetPath = $fontRoot . '/' . $relativePath;
    assertTrue(is_file($assetPath), 'Manifest asset is missing: ' . $relativePath);
    assertSame($matches[1], hash_file('sha256', $assetPath), 'Manifest hash mismatch for ' . $relativePath . '.');
}

assertSame(61, count($manifestEntries), 'The font manifest does not contain every expected asset.');
assertTrue(
    strpos($interfaceCss, '@media (prefers-color-scheme: dark)') !== false
    && preg_match('/#FontsPage img\.font-preview-img\s*\{[^}]*filter:\s*invert\(1\)/s', $interfaceCss) === 1,
    'The raster font previews are not adapted for the Dark theme.'
);

$fontFiles = array();
$cssFiles = array();
$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($fontRoot, FilesystemIterator::SKIP_DOTS));

foreach ($iterator as $fileInfo) {
    if ($fileInfo->getExtension() === 'woff2') {
        $fontFiles[] = $fileInfo->getPathname();
        $manifestPath = str_replace('\\', '/', substr($fileInfo->getPathname(), strlen($fontRoot) + 1));
        assertTrue(isset($manifestEntries[$manifestPath]), 'Font file is missing from the manifest: ' . $manifestPath);
        assertSame('wOF2', file_get_contents($fileInfo->getPathname(), false, null, 0, 4), 'Invalid WOFF2 signature for ' . $fileInfo->getFilename() . '.');
    } elseif ($fileInfo->getExtension() === 'css') {
        $cssFiles[] = $fileInfo->getPathname();
    }
}

assertSame(46, count($fontFiles), 'The expected Latin and Cyrillic WOFF2 files are not all present.');

foreach ($cssFiles as $cssFile) {
    $manifestPath = str_replace('\\', '/', substr($cssFile, strlen($fontRoot) + 1));
    assertTrue(isset($manifestEntries[$manifestPath]), 'Font stylesheet is missing from the manifest: ' . $manifestPath);

    $css = file_get_contents($cssFile);
    preg_match_all('/url\([\'\"]?([^\'\")?#]+)[\'\"]?\)/', $css, $matches);

    foreach ($matches[1] as $reference) {
        assertFalse((bool) preg_match('/^[a-z][a-z0-9+.-]*:/i', $reference), 'External font URL found in ' . $cssFile . '.');
        $assetPath = realpath(dirname($cssFile) . '/' . $reference);
        assertTrue($assetPath !== false && is_file($assetPath), 'Missing CSS font reference ' . $reference . ' in ' . $cssFile . '.');
        assertTrue(strpos($assetPath, realpath($fontRoot)) === 0, 'CSS font reference escaped the font directory.');
    }

    if (basename($cssFile) === 'cyrillic.css') {
        assertTrue(strpos($css, 'unicode-range:') !== false, 'Cyrillic CSS is missing its unicode range: ' . $cssFile . '.');
    }
}

foreach (array(
    'lato/OFL.txt',
    'open-sans/OFL.txt',
    'roboto-slab/LICENSE.txt',
    'source-sans-3/OFL.txt',
    'ubuntu-mono/UFL.txt',
) as $licencePath) {
    assertTrue(is_file($fontRoot . '/' . $licencePath), 'Font licence is missing: ' . $licencePath);
    assertTrue(isset($manifestEntries[$licencePath]), 'Font licence is missing from the manifest: ' . $licencePath);
}

echo 'FontSwitcher bundled font asset integration test passed.' . PHP_EOL;

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
