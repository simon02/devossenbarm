<?php
/*
Plugin Name: Debug Log
Description: View and Delete the debug log from the Tools menu.  Extremely light and simple.
Version:     0.3
Author:      Andrew J Klimek
Author URI:  https://readycat.net
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Debug Log is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Debug Log is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Debug Log. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/

function readycat_debug_log() {
	
	$toobig = apply_filters( 'debug_log_too_big', 5 );// how many MB throws a warning?
	$latest = apply_filters( 'debug_log_latest_count', 15 );// sets the number of latest error lines
		
	if ( ! WP_DEBUG_LOG ) {
		?>
<div class="notice notice-warning">
	<p>Debug Log is not enabled.  <a href="https://codex.wordpress.org/Debugging_in_WordPress#WP_DEBUG_LOG" target="_blank">See the codex.</a>  Essentially, open wp-config.php and replace <code>define( 'WP_DEBUG', false );</code> with the code below.</p>
</div>
<pre>
define( 'WP_DEBUG', true );// just toggle this line to false to turn off
if ( WP_DEBUG ) {
	define( 'WP_DEBUG_DISPLAY', false );
	define( 'WP_DEBUG_LOG', true );
	@ini_set( 'display_errors', 0 );
	define( 'SCRIPT_DEBUG', true );
}
</pre><?php
		return;
	}
	
	$path = WP_CONTENT_DIR .'/debug.log';
	
	if ( ! file_exists( $path ) ) {		
		echo '<div class="notice notice-success"><p>No log found at '. $path .'.  Hopefully this means you have no errors.</p></div>';
		return;
	}
	
	$nonce = isset( $_REQUEST['delete-log'] ) ? $_REQUEST['delete-log'] : null;
	if ( wp_verify_nonce( $nonce, 'delete-log' ) ) {
		if ( unlink( $path ) ) {
			echo '<div class="notice notice-success"><p>Deleted Log</p></div>';
		} else {
			echo '<div class="notice notice-error"><p>Error deleting '. $path .'</p></div>';
		}
		return;
	}
	
	$link = admin_url( 'tools.php?page=debug_log' );
	
	
	if ( ! isset( $_GET['loadanyhow'] ) ){
		
		$size = round( filesize( $path ) / pow(1024, 2), 2 );// Can use MB_IN_BYTES but it would only work for 4.4 and up
		if ( $size > $toobig ) {
			echo '<div class="notice notice-warning"><p>Log is '. $size .'MB... Do you really want to load it here?</p><p><a href="'. $link .'&loadanyhow">Yes, load it anyhow.</a></p></div>';
			$toobig = false;
		}
	}
	
	$nonce = wp_create_nonce( 'delete-log' );
	?>
	<div class="wrap">
		<form action="<?php echo $link ?>" method="post" style="position:fixed;">
			<input type="hidden" name="delete-log" value="<?php echo $nonce ?>">
			<input type="submit" class="button button-primary" value="Delete Log">
		</form>
	<?php
	
	echo '<div style="padding-top:28px;">';

	if ( $toobig ) {// $toobig is the safty switch.  Is set to false by clicking through the warning or by filtering the initial value
		
		$log = file( $path, FILE_IGNORE_NEW_LINES );
		
		if ( $latest ) {
			$lines = count( $log );
			if ( $lines > 25 ) {// Avoid scrolling
				echo '<h2>Latest Errors</h2>';
				echo '<div style="font-family:monospace;word-wrap:break-word;">';
				for ( $l = $lines - $latest; $l < $lines; ) {
					$i = $l++;
					echo "<p><span>{$l}</span> {$log[ $i ]}</p>";
				}
				echo '</div>';
				echo '<h2>Archives</h2>';
			}
		}
		
		echo '<div style="font-family:monospace;word-wrap:break-word;">';
		foreach ( $log as $no => $line ) {
			echo "<p><span>";
			echo $no + 1;
			echo "</span> {$line}</p>";
		}
		echo '</div></div>';
	}
	echo '</div>';
}
add_action( 'admin_menu', function() { add_submenu_page( 'tools.php', 'Debug Log', 'Debug Log', 'manage_options', 'debug_log', 'readycat_debug_log' ); } );