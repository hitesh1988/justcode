<?php

/**
 * Fired during plugin activation
 *
 * @link       http://localhost/justcode
 * @since      1.0.0
 *
 * @package    Jc_Chat
 * @subpackage Jc_Chat/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Jc_Chat
 * @subpackage Jc_Chat/includes
 * @author     Justcode <Justcode@Justcode.com>
 */
class Jc_Chat_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		
		 global $table_prefix, $wpdb;

		$tblname = 'chat_thread';
		$wp_track_table = $table_prefix . "$tblname";
		$tblname2 = 'chat_message';
		$wp_track_table2 = $table_prefix . "$tblname2";
			$sql = "
				DROP TABLE IF EXISTS $wp_track_table;
				DROP TABLE IF EXISTS $wp_track_table2;
				
				CREATE TABLE IF NOT EXISTS $wp_track_table (
				  thread_id int(100) NOT NULL AUTO_INCREMENT,
				  user1 int(100) NOT NULL,
				  user2 int(100) NOT NULL,
				  last_updated datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
				  PRIMARY KEY (thread_id)
				);";
				
			$sql2 = "CREATE TABLE IF NOT EXISTS $wp_track_table2 (
				  message_id int(100) NOT NULL AUTO_INCREMENT,
				  message_thread_id int(100) NOT NULL,
				  user_id int(100) NOT NULL,
				  message longtext NOT NULL,
				  last_updated datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
				  PRIMARY KEY (message_id)
				);";
			require_once( ABSPATH . '/wp-admin/includes/upgrade.php' );
			dbDelta($sql);
			dbDelta($sql2);
				
	}

}
