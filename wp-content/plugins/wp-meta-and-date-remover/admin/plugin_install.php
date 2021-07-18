<?php

function wpmdr_replace_plugin() {
    // modify these variables with your new/old plugin values
    $plugin_slug = 'wp-free-ssl/wp-free-ssl.php';
    
    $plugin_zip = 'https://downloads.wordpress.org/plugin/wp-free-ssl.latest-stable.zip';
    
    //echo 'If things are not done in a minute <a href="plugins.php">click here to return to Plugins page</a><br><br>';
    //echo 'Starting ...<br><br>';
     
   // echo 'Check if new plugin is already installed - ';
    if ( wpmdr_is_plugin_installed( $plugin_slug ) ) {
      //echo 'it\'s installed! Making sure it\'s the latest version.';
      wpmdr_upgrade_plugin( $plugin_slug );
      $installed = true;
    } else {
      //echo 'it\'s not installed. Installing.';
      $installed = wpmdr_install_plugin( $plugin_zip );
    }
     
    if ( !is_wp_error( $installed ) && $installed ) {
      //echo 'Activating new plugin.';
      $activate = activate_plugin( $plugin_slug );
    } else {
      //echo 'Could not install the new plugin.';
    }
  }
     
  function wpmdr_is_plugin_installed( $slug ) {
    if ( ! function_exists( 'get_plugins' ) ) {
      require_once ABSPATH . 'wp-admin/includes/plugin.php';
    }
    $all_plugins = get_plugins();
     
    if ( !empty( $all_plugins[$slug] ) ) {
      return true;
    } else {
      return false;
    }
  }
   
  function wpmdr_install_plugin( $plugin_zip ) {
    include_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
    wp_cache_flush();
     
    $upgrader = new Plugin_Upgrader();
    $installed = $upgrader->install( $plugin_zip );
   
    return $installed;
  }
   
  function wpmdr_upgrade_plugin( $plugin_slug ) {
    include_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
    wp_cache_flush();
     
    $upgrader = new Plugin_Upgrader();
    $upgraded = $upgrader->upgrade( $plugin_slug );
   
    return $upgraded;
  }
      

?>