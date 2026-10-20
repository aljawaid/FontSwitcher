# Plugin installation

> **Before installing or upgrading:** back up the existing `plugins/FontSwitcher` directory and confirm that the server meets the supported Kanboard and PHP versions. The extracted directory must be named exactly `FontSwitcher`.

## Requirements

| Requirement | Supported value |
|---|---|
| Kanboard | 1.2.54 or later |
| PHP | 8.2, 8.3, 8.4 or 8.5 |
| Browser | A modern browser with WOFF2 support |

The plugin uses Kanboard's existing settings table and does not add or migrate database schema.

## Installation options

- **Install via the [Kanboard](https://github.com/kanboard/kanboard "Kanboard - Kanban Project Management Software") Plugin Directory**
  - _Go to:_
    - Kanboard: `Plugins` &#10562; `Plugin Directory`
  - _or with [PluginManager](https://github.com/aljawaid/PluginManager "A Kanboard plugin") installed:_
    - Kanboard: `Settings` &#10562; `Plugins` &#10562; `Plugin Directory`
- **Install from a verified release archive**
  - A copy of each release is saved in the `/Releases` folder of the repository
  - Verify the release source and compare the archive hash with `/Releases/SHA256SUMS` before extracting it into the `/plugins` directory
- **Install via [GitHub](https://github.com/ "Find the correct plugin from the list of repositories")**
  - Download the `.zip` file and decompress everything under the directory `/plugins`
  - The folder inside the `.zip` must not contain any branch names and must be exact case (matching the plugin name)

_Note: The `/plugins` folder is case-sensitive._

- **Install using Git CLI**
  - Clone the repository into `plugins/FontSwitcher` only when a source checkout is intentionally used instead of a release archive

Expected structure:

```text
kanboard/
└── plugins/
    └── FontSwitcher/
        ├── Plugin.php
        ├── Assets/
        ├── Controller/
        ├── Helper/
        ├── Model/
        └── Template/
```

## Upgrade and acceptance

1. Back up the installed `FontSwitcher` directory and record the current selected font.
2. Extract the new archive to a temporary directory and confirm its top-level folder is `FontSwitcher`.
3. Replace the plugin directory during a controlled maintenance window.
4. Sign in as an application administrator and open `Settings` → `Application settings` → `Font Settings`.
5. Confirm the saved selection is shown, change to one bundled font, save, and reload the page.
6. Check representative Latin and Cyrillic text at desktop and mobile widths in the active theme.
7. Confirm browser font requests remain on the Kanboard origin.

## Rollback

1. Restore the backed-up plugin directory.
2. Reload Kanboard and select the previous font if necessary.
3. No database migration rollback is required; older releases ignore unrecognised asset files and continue using the existing setting.

---

Read the full [**Changelog**](../master/changelog.md "See changes") or view the [**README**](../master/README.md "View README")
