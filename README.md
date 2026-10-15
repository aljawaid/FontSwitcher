<h1 name="user-content-readme-top">FontSwitcher</h1>
<p align="center">
    <a href="https://github.com/aljawaid/FontSwitcher/releases">
        <img src="https://img.shields.io/github/v/release/aljawaid/FontSwitcher?style=for-the-badge&color=brightgreen" alt="GitHub Latest Release (by date)" title="GitHub Latest Release (by date)">
    </a>
    <a href="https://github.com/aljawaid/FontSwitcher/releases">
        <img src="https://img.shields.io/github/downloads/aljawaid/FontSwitcher/total?style=for-the-badge&color=orange" alt="GitHub All Releases" title="GitHub All Downloads">
    </a>
    <a href="https://github.com/aljawaid/FontSwitcher/releases">
        <img src="https://img.shields.io/github/directory-file-count/aljawaid/FontSwitcher?style=for-the-badge&color=orange" alt="GitHub Repository File Count" title="GitHub Repository File Count">
    </a>
    <a href="https://github.com/aljawaid/FontSwitcher/releases">
        <img src="https://img.shields.io/github/repo-size/aljawaid/FontSwitcher?style=for-the-badge&color=orange" alt="GitHub Repository Size" title="GitHub Repository Size">
    </a>
    <a href="https://github.com/aljawaid/FontSwitcher/releases">
        <img src="https://img.shields.io/github/languages/code-size/aljawaid/FontSwitcher?style=for-the-badge&color=orange" alt="GitHub Code Size" title="GitHub Code Size">
    </a>
</p>
<p align="center">
    <a href="https://github.com/aljawaid/FontSwitcher/discussions">
        <img src="https://img.shields.io/github/discussions/aljawaid/FontSwitcher?style=for-the-badge&color=blue" alt="GitHub Discussions" title="Read Discussions">
    </a>
    <a href="https://github.com/aljawaid/FontSwitcher/compare">
        <img src="https://img.shields.io/github/commits-since/aljawaid/FontSwitcher/latest?include_prereleases&style=for-the-badge&color=blue" alt="GitHub Commits Since Last Release" title="GitHub Commits Since Last Release">
    </a>
    <a href="https://github.com/aljawaid/FontSwitcher/compare">
        <img src="https://img.shields.io/github/commit-activity/m/aljawaid/FontSwitcher?style=for-the-badge&color=blue" alt="GitHub Commit Monthly Activity" title="GitHub Commit Monthly Activity">
    </a>
    <a href="https://github.com/kanboard/kanboard" title="Kanboard - Kanban Project Management Software">
        <img src="https://img.shields.io/badge/Plugin%20for-kanboard-D40000?style=for-the-badge&labelColor=000000" alt="Kanboard">
    </a>
</p>

Choose an application-wide typeface from a collection of fonts bundled with the plugin, or retain Kanboard's operating-system defaults. The selection applies to every user and can be changed by an application administrator.

The collection includes [sans-serif, serif and monospace styles](../master/all-fonts.md "View font styles") with Latin, Latin Extended, Cyrillic and Cyrillic Extended character sets.


<p align="right">[<a href="#user-content-readme-bottom">&#8595; Bottom</a>] [<a href="#screenshots">&#8594; Next</a>] [<a href="#user-content-readme-top">&#8593; Top</a>]</p>

## Features

- A collection of open source fonts by [Google Fonts](https://fonts.google.com "Google Fonts")
  - Collection includes Serif, Sans-Serif and Monospace typefaces
- Webfont (`WOFF2`) versions are used for faster rendering
  - Webfonts are not installed locally on the user's machine
  - Fonts are served by the Kanboard installation; no third-party runtime connection is required
  - Compatible with modern browsers (Chrome 36+, Opera 23+, Firefox 39+, Safari 12+, iOS 10+)
- Only the selected family is enabled
- Cyrillic files use `unicode-range`, so browsers fetch them only when page content needs those characters
- Font sources, licences and asset hashes are documented in [Assets/fonts/FONT_SOURCES.md](../master/Assets/fonts/FONT_SOURCES.md)
- Release archive hashes are published in [Releases/SHA256SUMS](../master/Releases/SHA256SUMS)

<p align="right">[<a href="#user-content-readme-bottom">&#8595; Bottom</a>] [<a href="#features">&#8592; Previous</a>] [<a href="#usage">&#8594; Next</a>] [<a href="#user-content-readme-top">&#8593; Top</a>]</p>

## Screenshots

**Application Fonts**  

![Application Fonts](../master/screenshot-font-switcher.png)

- View the available [font styles](../master/all-fonts.md)


<p align="right">[<a href="#user-content-readme-bottom">&#8595; Bottom</a>] [<a href="#features">&#8592; Previous</a>] [<a href="#installation--compatibility">&#8594; Next</a>] [<a href="#user-content-readme-top">&#8593; Top</a>]</p>

## Usage

Go to `Settings` &#10562; Application Settings

<p align="right">[<a href="#user-content-readme-bottom">&#8595; Bottom</a>] [<a href="#screenshots">&#8592; Previous</a>] [<a href="#authors--contributors">&#8594; Next</a>] [<a href="#user-content-readme-top">&#8593; Top</a>]</p>

## Installation & Compatibility

<details>
    <summary><strong>Installation</strong></summary>

- Install via the **[Kanboard](https://github.com/kanboard/kanboard "Kanboard - Kanban Project Management Software") Plugin Directory** or see [INSTALL.md](../master/INSTALL.md)
- Read the full [**Changelog**](../master/changelog.md "See changes") to see the latest updates

</details>
<details>
    <summary><strong>Compatibility</strong></summary>

- Requires [Kanboard](https://github.com/kanboard/kanboard "Kanboard - Kanban Project Management Software") ≥`1.2.54`
- Tested with PHP `8.2`, `8.3`, `8.4` and `8.5`
- **Other Plugins & Action Plugins**
  - Styles are scoped to the FontSwitcher settings panels
  - Theme plugins may intentionally override the selected application font
  - Earlier releases were tested with [KanboardCSS](https://github.com/aljawaid/KanboardCSS) and [EssentialTheme](https://codeberg.org/abu/EssentialTheme); current versions still require browser acceptance before release
- **Core Files & Templates**
  - _No template overrides_
  - _No database schema changes; one value is stored in Kanboard's existing settings table_

</details>
<details>
    <summary><strong>Translations</strong></summary>

- _Starter template available_

</details>

<p align="right">[<a href="#user-content-readme-bottom">&#8595; Bottom</a>] [<a href="#usage">&#8592; Previous</a>] [<a href="#license">&#8594; Next</a>] [<a href="#user-content-readme-top">&#8593; Top</a>]</p>

## Authors & Contributors

- [@aljawaid](https://github.com/aljawaid) - Author
- _Contributors welcome_

<p align="right">[<a href="#user-content-readme-bottom">&#8595; Bottom</a>] [<a href="#installation--compatibility">&#8592; Previous</a>] [<a href="#user-content-readme-top">&#8593; Top</a>]</p>

## License

- This project is distributed under the [MIT License](../master/LICENSE "Read The MIT license")
- Bundled fonts remain copyright of their respective authors and retain their own licences:
  - [Lato — SIL Open Font License 1.1](../master/Assets/fonts/lato/OFL.txt)
  - [Open Sans — SIL Open Font License 1.1](../master/Assets/fonts/open-sans/OFL.txt)
  - [Roboto Slab — Apache License 2.0](../master/Assets/fonts/roboto-slab/LICENSE.txt)
  - [Source Sans 3 — SIL Open Font License 1.1](../master/Assets/fonts/source-sans-3/OFL.txt)
  - [Ubuntu Mono — Ubuntu Font Licence 1.0](../master/Assets/fonts/ubuntu-mono/UFL.txt)
- See the [font provenance and verification record](../master/Assets/fonts/FONT_SOURCES.md) for versions, pinned sources and checksums

---

<p align="center">
    <a href="https://github.com/aljawaid/FontSwitcher/stargazers" title="View Stargazers">
        <img src="https://img.shields.io/github/stars/aljawaid/FontSwitcher?logo=github&style=flat-square" alt="FontSwitcher">
    </a>
    <a href="https://github.com/aljawaid/FontSwitcher/forks" title="See Forks">
        <img src="https://img.shields.io/github/forks/aljawaid/FontSwitcher?logo=github&style=flat-square" alt="FontSwitcher">
    </a>
    <a href="https://github.com/aljawaid/FontSwitcher/blob/master/LICENSE" title="Read License">
        <img src="https://img.shields.io/github/license/aljawaid/FontSwitcher?style=flat-square" alt="FontSwitcher">
    </a>
    <a href="https://github.com/aljawaid/FontSwitcher/issues" title="Open Issues">
        <img src="https://img.shields.io/github/issues-raw/aljawaid/FontSwitcher?style=flat-square" alt="FontSwitcher">
    </a>
    <a href="https://github.com/aljawaid/FontSwitcher/issues?q=is%3Aissue+is%3Aclosed" title="Closed Issues">
        <img src="https://img.shields.io/github/issues-closed/aljawaid/FontSwitcher?style=flat-square" alt="FontSwitcher">
    </a>
    <a href="https://github.com/aljawaid/FontSwitcher/discussions" title="Read Discussions">
        <img src="https://img.shields.io/github/discussions/aljawaid/FontSwitcher?style=flat-square" alt="FontSwitcher">
    </a>
    <a href="https://github.com/aljawaid/FontSwitcher/compare/" title="Latest Commits">
        <img alt="GitHub commits since latest release (by date)" src="https://img.shields.io/github/commits-since/aljawaid/FontSwitcher/latest?style=flat-square">
    </a>
</p>
<p align="right">[<a href="#user-content-readme-top">&#8593; Top</a>]</p>
<a name="user-content-readme-bottom"></a>
