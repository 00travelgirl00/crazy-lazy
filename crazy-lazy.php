<?php
/**
 * Crazy Lazy
 *
 * @package     CrazyLazy
 * @author      pluginkollektiv
 * @license     GPLv2 or later
 *
 * @wordpress-plugin
 * Plugin Name: Crazy Lazy
 * Description: Lazy load images. Simple to use: Activate, done. Search engine and noscript user friendly.
 * Author:      pluginkollektiv
 * Author URI:  http://pluginkollektiv.org
 * Plugin URI:  https://wordpress.org/plugins/crazy-lazy/
 * Text Domain: crazy-lazy
 * License:     GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Version:     1.0.4
 */

/*
Copyright (C)  2013-2015 Sergej Müller

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License along
with this program; if not, write to the Free Software Foundation, Inc.,
51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
*/


/* Quit */
defined( 'ABSPATH' ) || exit;


/* FE only */
if ( is_admin() ) {
	return;
}


/* Fire! */
define( 'CRAZY_LAZY_BASE', plugin_basename( __FILE__ ) );

require_once( dirname( __FILE__ ) . '/inc/crazy-lazy.class.php' );

add_action( 'wp', array( 'CrazyLazy', 'instance' ) );
