<?php
/**
 * Project configuration file
 * (put this file out of the public|htdocs folder)
 * @phpcs:disable
 *
 * @package Onyx WP Boilerplate
 */

/* Setup development and production environments */
$env = require_once __DIR__ . '/.env.php';

/* Database */
$table_prefix = $env->dbprefix;
define( 'DB_NAME', $env->dbname );
define( 'DB_USER', $env->dbuser );
define( 'DB_PASSWORD', $env->dbpass );
define( 'DB_HOST', $env->dbhost );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

/* Domain and WordPress Install folder' */
define( 'WP_HOME', $env->url );
define( 'WP_SITEURL', $env->url . '/wp' );

/* Cloudflare */
if ( isset( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ) {
	$_SERVER['REMOTE_ADDR'] = explode( ',', $_SERVER['HTTP_X_FORWARDED_FOR'] )[0];
}

/* Change WordPress default folders path/url */
define( 'WP_CONTENT_DIR', $env->root . $env->content );
define( 'WP_CONTENT_URL', WP_HOME . $env->content );

/* WP Core definitions */
define( 'WP_DEBUG', $env->debug );
define( 'AUTOSAVE_INTERVAL', 999999 );
define( 'WP_POST_REVISIONS', false );
define( 'DISALLOW_FILE_EDIT', true );
define( 'DISABLE_WP_CRON', true );
define( 'CORE_UPGRADE_SKIP_NEW_BUNDLED', true );

/* SSL */
define( 'FORCE_SSL_ADMIN', $env->sslauth );
define( 'FORCE_SSL_LOGIN', $env->sslauth );

/* Onyx */
define( 'ONYX_TESTS', $env->tests );
define( 'ONYX_TOKEN', $env->token );
define( 'ONYX_LIVERELOAD', $env->livereload );

/* salt https://api.wordpress.org/secret-key/1.1/salt/ */
define( 'AUTH_KEY',         '' );
define( 'SECURE_AUTH_KEY',  '' );
define( 'LOGGED_IN_KEY',    '' );
define( 'NONCE_KEY',        '' );
define( 'AUTH_SALT',        '' );
define( 'SECURE_AUTH_SALT', '' );
define( 'LOGGED_IN_SALT',   '' );
define( 'NONCE_SALT',       '' );
