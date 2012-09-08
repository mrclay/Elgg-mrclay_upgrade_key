**Note!** This directory must be named `mrclay_upgrade_key` in your mod folder.

## Upgrade Key

This plugin prevents anonymous visitors from regenerating caches by executing Elgg's `upgrade.php` script.

### Setup

Install this plugin as `path/to/Elgg/mod/mrclay_upgrade_key`. E.g. using git:

    cd path/to/Elgg/mod
    git clone git@github.com:mrclay/Elgg-mrclay_upgrade_key.git mrclay_upgrade_key

 1. Enable the plugin
 1. Create an alphanumeric secret key. E.g. `ABBA4ever`
 1. Edit `settings.php` and set `$CONFIG->upgrade_key` to your key. E.g. `$CONFIG->upgrade_key = 'ABBA4ever';`

Once configured, one of two conditions must be met to run `upgrade.php`:

 * User is logged in as an admin
 * The URL includes the secret key as `key` in the querystring. E.g. `upgrade.php?key=ABBA4ever`

**Note:** Your key needn't be alphanumeric, but this makes easy copy/pasting and eliminates URL encoding issues.
