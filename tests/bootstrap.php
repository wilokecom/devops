<?php
if (is_file("./wp-content/plugins/devops/vendor/autoload.php")) {
    require "./wp-content/plugins/devops/vendor/autoload.php";
} else {
    require "./vendor/autoload.php";
}

if (is_file("./wp-load.php")) {
    include './wp-load.php';
} else {
    include "../../../wp-load.php";
}



	//	$_tests_dir = getenv( 'WP_TESTS_DIR' );
	//
	//	if ( ! $_tests_dir ) {
	//		$_tests_dir = rtrim( sys_get_temp_dir(), '/\\' ) . '/wordpress-tests-lib';
	//	}

	//	if ( ! file_exists( $_tests_dir . '/includes/functions.php' ) ) {
	//		echo "Could not find $_tests_dir/includes/functions.php, have you run bin/install-wp-tests.sh ?" . PHP_EOL; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	//		exit( 1 );
	//	}

	// Give access to tests_add_filter() function.
	//	require_once  '../../../../wp-includes/functions.php';
	//
	//	/**
	//	 * Manually load the plugin being tested.
	//	 */
	//	function _manually_load_plugin() {
	//		require dirname( dirname( __FILE__ ) ) . '/sample-plugin.php';
	//	}
	//	tests_add_filter( 'muplugins_loaded', '_manually_load_plugin' );
	//
	//// Start up the WP testing environment.
	//	require $_tests_dir . '/includes/bootstrap.php';
