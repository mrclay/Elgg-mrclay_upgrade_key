**Note!** This directory must be named `mrclay_upgrade_key` in your mod folder.

## Upgrade Key

It's arguably unwise to allow anonymous visitors to regenerate caches by executing Elgg's `upgrade.php`. If you agree you may use this plugin.

### Setup

Install this plugin as `path/to/Elgg/mod/mrclay_upgrade_key`. E.g. using git:

    cd path/to/Elgg/mod
    git clone git@github.com:mrclay/Elgg-mrclay_upgrade_key.git mrclay_upgrade_key

 1. Enable the plugin
 1. Create an alphanumeric secret key
 1. Edit your `settings.php` file and add `$CONFIG->upgrade_key = '<secret_key>'`.

Once configured, one of two conditions must be met to run `upgrade.php`:

 * User is logged in as an admin
 * The URL includes the secret key in the querystring `?key=<secret_key>`

**Note:** Your key needn't be alphanumeric, but this makes easy copy/pasting and eliminates URL encoding issues.
