<?php
/*
Plugin Name: Google Maps Hyperlink
Plugin URI: 
Description: Converts a short link with the format [gmaplink name="description" gps="xºxx.xxxN,xºxx.xxxW"]  to a google maps query in the format  http://maps.google.com/maps?q=[gps]+([name])
Version: 1.0
Author: Cláudio Tereso
Author URI: http://work.claudiotereso.com
License: GPL2

Copyright 2011 Cláudio Tereso  (email : claudio@claudiotereso.com)

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

add_shortcode( 'gmaplink', 'gmaphyperlinkhandle' );

function gmaphyperlinkhandle( $atts ) {
	extract( shortcode_atts( array(
		'name' => '---',
		'gps' => '0N,0W',
	), $atts ) );

    return "<A href=\"http://maps.google.com/maps?q={$gps}+({$name})\" target=\"_blank\">{$name}</A>";
}

?>
