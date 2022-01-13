<?php
/*
Plugin Name: Meow Gallery
Plugin URI: https://meowapps.com
Description: Gallery system built for photographers, by photographers.
Version: 1.1.2
Author: Jordy Meow, Thomas Kim
Author URI: https://meowapps.com
Text Domain: meow-gallery
Domain Path: /languages

Dual licensed under the MIT and GPL licenses:
http://www.opensource.org/licenses/mit-license.php
http://www.gnu.org/licenses/gpl.html

Originally developed for two of my websites:
- Jordy Meow (https://offbeatjapan.org)
- Haikyo (https://haikyo.org)
*/


if ( class_exists( 'Meow_Gallery_Core' ) ) {
  function mfrh_admin_notices() {
    echo '<div class="error"><p>Thanks for installing the Pro version of Meow Gallery :) However, the free version is still enabled. Please disable or uninstall it.</p></div>';
  }
  add_action( 'admin_notices', 'mfrh_admin_notices' );
  return;
}

// if ( !get_transient( 'mgl_event_special_message' ) ) {
//   function mgl_event_special_message_admin_notices() {
//     echo '<div class="notice notice-success"><p>Happy New Year, Happy WordPress Day, etc!</p>';
//     echo '<p>
//       <form method="post" action="">
//         <input type="hidden" name="mgl_event_special_message" value="true">
//         <input type="submit" name="submit" id="submit" class="button" value="Hide this">
//       </form>
//     </p>
//     ';
//     echo '</div>';
//   }
//   if ( isset( $_POST['mgl_event_special_message'] ) ) {
//     set_transient( 'mgl_event_special_message', 'hide', 60 * 60 * 24 * 100 );
//   }
//   else
//     add_action( 'admin_notices', 'mgl_event_special_message_admin_notices' );
// }

global $mgl_version;
$mgl_version = '1.1.2';

// Admin
include "mgl_admin.php";
$mgl_admin = new Meow_MGL_Admin( 'mgl', __FILE__, 'meow-gallery' );

// Core
include "mgl_core.php";
$mgl_core = new Meow_Gallery_Core( $mgl_admin );

?>
