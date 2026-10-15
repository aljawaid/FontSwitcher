# Bundled font sources

> **Critical:** FontSwitcher serves these files from the Kanboard installation. It must not fetch font files from Google or another third party at runtime. When any font asset changes, refresh and verify `SHA256SUMS`, the licence copy and this document together.

## Provenance

The bundled WOFF2 files were rebuilt on 15 October 2026 from the [Google Fonts repository](https://github.com/google/fonts) snapshot `94301472b4d809299b4775bc6502592b83dd6934`.

| Family | Font version | Styles | Character sets | Licence | Upstream source revision recorded by Google Fonts |
|---|---:|---|---|---|---|
| Lato | 2.015 | Regular, Italic, Bold, Bold Italic | Latin, Latin Extended, Cyrillic, Cyrillic Extended | SIL Open Font License 1.1 | `080cb69711ca050d91e9c866e58df7a73095c69a` |
| Open Sans | 3.003 | Regular, Italic, SemiBold, SemiBold Italic, Bold, Bold Italic | Latin, Latin Extended, Cyrillic, Cyrillic Extended | SIL Open Font License 1.1 | `bd7e37632246368c60fdcbd374dbf9bad11969b6` |
| Roboto Slab | 2.002 | Regular, SemiBold, Bold | Latin, Latin Extended, Cyrillic, Cyrillic Extended | Apache License 2.0 | `67af3ce9c4ca574419e1295b6165a2eeee112e6e` |
| Source Sans 3 | 3.052 | Regular, Italic, SemiBold, SemiBold Italic, Bold, Bold Italic | Latin, Latin Extended, Cyrillic, Cyrillic Extended | SIL Open Font License 1.1 | `272b22b02e097e8eff1372111f88b5ab6063499f` |
| Ubuntu Mono | 0.80 | Regular, Italic, Bold, Bold Italic | Latin, Latin Extended, Cyrillic, Cyrillic Extended | Ubuntu Font Licence 1.0 | `52f780bc9d197280a9f430574e179a5f233c56b6` |

The complete applicable licence is stored beside each family. Copyright and reserved-font-name notices in those files remain part of the distribution.

## Build method

- FontTools 4.67.0 instantiated static weights from variable sources where required.
- Brotli 1.2.0 produced WOFF2 output.
- Latin and Latin Extended remain in the established legacy filenames so existing installations retain stable asset URLs.
- Cyrillic and Cyrillic Extended use separate `@font-face` files with `unicode-range`; browsers therefore fetch them only when page content needs those characters.
- The source TTF files are not distributed because the derived WOFF2 files, licence copies, pinned source revisions and SHA-256 manifest provide the release artefacts and their provenance.

## Verification

Before packaging a release:

1. Rebuild all weights from the pinned authoritative sources.
2. Confirm each WOFF2 opens successfully and contains the required Latin or Cyrillic sample code points.
3. Confirm every static instance has the intended weight and contains no variable-font `fvar` table.
4. Recalculate `SHA256SUMS` and reject any unexplained difference.
5. Test Latin and Cyrillic text in Kanboard with each font selected.
6. Confirm browser network requests stay on the Kanboard origin.

The release workflow also runs `tests/Integration/FontAssetsTest.php` to verify the manifest, local CSS references, WOFF2 signatures, Unicode-range declarations and bundled licence files.
