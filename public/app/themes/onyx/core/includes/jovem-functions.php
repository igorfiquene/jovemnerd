<?php
/**
 * Funções usadas na Every
 *
 * @phpcs:disable Squiz.Commenting.FunctionComment.MissingParamTag
 *
 * @package Onyx Theme
 */

use Timber\Menu;

/**
 * Hook: Adicionar Contexto Global no Timber
 *
 * @param mixed $context Received from `timber/context` filter
 */
function every_timber_global_context( $context ) {
	$context['menu'] = new Menu( 'Menu' );

	return $context;
}
add_filter( 'timber/context', 'every_timber_global_context' );
