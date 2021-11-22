# Wiki

Onyx Starter Kit is a custom wordpress structure with some pre-determined and optional plugins and themes.

## Required Dependencies

> - [WP-CLI](https://wp-cli.org/#installing)
> - [PHP](https://www.php.net/manual/en/install.php) >= 7.2
> - [Composer](https://getcomposer.org/download/) [optional]

## After Clone/Download

If you want to use composer, see the [composer section](#composer).

```bash
cd ./wp-onyx-starter                         # go to boilerplate folder
rm -rf ./.git                                # remove any .git repo (if cloned)
wp core download --skip-content --allow-root # install wp core
```

## Composer

Use composer to manage the wordpress and plugins. Here is some commands:

| Commands             | Functionality                                                   |
|----------------------|-----------------------------------------------------------------|
| onyx:update          | update --prefer-dist                                            |
| onyx:dump            | composer dump-autoload -o                                       |
| onyx:install:wp      | Install WP and dependencies                                     |
| onyx:install:theme   | Install [Onyx Theme](https://github.com/andremacola/onyx-theme) |
| onyx:require:plugins | Require and add below plugins                                   |
| onyx:backup          | Back up database in the folder ./sql                            |

## Install Plugins

```shell
composer require wpackagist-plugin/autodescription dev-trunk
composer require andremacola/advanced-custom-fields-pro dev-master
composer require andremacola/admin-columns-pro dev-master
composer require andremacola/ac-addon-acf dev-master
composer require wpackagist-plugin/acf-onyx-poll dev-trunk
composer require freshsystems/wp-permission-manager dev-master
```

```js
"require": {
  "wpackagist-plugin/autodescription": "dev-trunk",
  "andremacola/advanced-custom-fields-pro": "dev-master",
  "andremacola/admin-columns-pro": "dev-master",
  "andremacola/ac-addon-acf": "dev-master",
  "freshsystems/wp-permission-manager": "dev-master",
  "wpackagist-plugin/acf-onyx-poll": "dev-trunk"
}
```

## Private Repo Plugins

- [Advanced Custom Fields PRO](https://github.com/andremacola/advanced-custom-fields-pro/releases)
- [Admin Columns PRO](https://github.com/andremacola/admin-columns-pro/releases)
- [Admin Columns PRO ACF Addon](https://github.com/andremacola/ac-addon-acf/releases)
- [WP Permission Manager](https://github.com/andremacola/wp-permission-manager/releases)
- [ACF Onyx Poll](https://br.wordpress.org/plugins/acf-onyx-poll/) (public)
- [The SEO Framework](https://wordpress.org/plugins/autodescription/) (public)
