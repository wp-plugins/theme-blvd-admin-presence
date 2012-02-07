<?php
/*
Plugin Name: Theme Blvd Admin Presence
Description: This plugin is will hide the your Theme Blvd theme's admin presence. Simply activate this plugin to hide theme's admin presence and disable the plugin to get it back.
Version: 1.0.0
Author: Jason Bobich
Author URI: http://jasonbobich.com
License: GPL2
*/

/*
Copyright 2012 JASON BOBICH

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/* Add Filter */

function themeblvd_admin_presence_filter( $config ) {
	$config['admin']['options'] = false;
	return $config;
}
add_filter( 'themeblvd_global_config', 'themeblvd_admin_presence_filter' );