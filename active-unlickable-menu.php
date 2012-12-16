<?php
/*
Plugin Name: Make menu items unclickable
Description: Filter out unclicable menus 
Version: 0.1
Author: Christian Bolstad
Author URI: http://hippies.se/
Network: true

*/
/* 
	
	Copyright:   (C) 2011 Ron Rennick, All rights reserved.

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

function hip_unclickable_menu( $content, $args ) 
{
	if( !empty( $content ) )
	{	
		global $post; 
	    foreach($content as $key => $item) 
	    {
    		if (in_array('unclickable',$content[$key]->classes))
    		{
		        $content[$key]->url = '#';
	        }
	    }                    
	}			
	return $content;
}								

add_filter( 'wp_nav_menu_objects', 'hip_unclickable_menu', 60, 2 );

