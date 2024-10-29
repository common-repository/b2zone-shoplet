<?php
/*
Plugin Name: b2zone Shoplet 
Plugin URI: https://b2zone.com
Description: b2zone-Shoplet. Provides [shoplet][/shoplet]-tags 
Version: 0.1
Author: b2zone Ltd., plugin@b2zone.com
Author URI: https://b2zone.com
License: GPL2
*/

/*  Copyright 2013  b2zone Ltd. (email : plugin@b2zone.com)

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
?><?php

function parseShoplet($text) {
  // regexp for find swfs
    return preg_replace_callback('|\[shoplet\](.+?)(,(.+?))?\[/shoplet\]|i', 'writeShoplet', $text);
}

function writeShoplet($match) {
  //return '<script type="text/javascript" src="https://b2zone.com/shoplet/js#xid='.$match[1].'"></script>';
  return '<script type="text/javascript" src="https://b2zone.com/shoplet/js#xid='.$match[1].'"></script>';
}


add_filter('the_content', 'parseShoplet');
add_filter('widget_text', 'parseShoplet');
	
?>
