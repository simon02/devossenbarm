=== Debug Log ===
Contributors: andrewklimek
Donate link: http://ambientsleepingpill.com/
Tags: debug, log, error
Requires at least: 2.6.0
Tested up to: 4.5
Stable tag: 0.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

View and Delete the debug log from the Tools menu.  Extremely light and simple.

== Description ==

If the log is long, the latest lines are show at the top to avoid scrolling.  Line numbers are shown for reference.

Logs over 5MB do not load until you confirm you are sure, or you can opt to delete the log and start afresh.

Only admins can view (or anyone you give the capability "manage_options").

Debug Log only works if it's enabled in wp-config.php.  See https://codex.wordpress.org/Debugging_in_WordPress#WP_DEBUG_LOG

Recommended configuration:

`define( 'WP_DEBUG', true );// just toggle this line to false to turn off
if ( WP_DEBUG ) {
    define( 'WP_DEBUG_LOG', true );
    define( 'WP_DEBUG_DISPLAY', false );
    @ini_set( 'display_errors', 0 );
}`

== Installation ==

1. Install as you would any plugin.

== Frequently Asked Questions ==

= How do I change the number lines in Latest Errors? =

`add_filter( 'debug_log_latest_count', function(){ return 20; } );`

= How do I turn Latest Errors off? =

Same as above but use 0... or be fancy:
`add_filter( 'debug_log_latest_count', '__return_false' );`

= How do I change or turn off the file size check? =

Same deal.  The number here is megabytes.

`add_filter( 'debug_log_too_big', function(){ return 2; } );`

`add_filter( 'debug_log_too_big', '__return_false' );`

== Screenshots ==

1. Basic Screenshot
2. Warning before loading big files.

== Changelog ==

= 0.3 =

* Float delete button for easier access

= 0.2 =

* Added "Recent Errors" functionality
* Added snippet to paste in wp-config when debug is off

= 0.1 =
* Initial Release