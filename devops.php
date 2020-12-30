<?php
/**
 * Plugin Name: Dev Ops
 * Author: Wiloke
 * Author URI: https://wiloke.com
 * Plugin URI: https://wiloke.com
 * Description: Wiloke
 */

use DevOps\Controllers\RegisterController;

require plugin_dir_path(__FILE__) . 'vendor/autoload.php';

new RegisterController();

add_action('admin_menu', function () {
    add_menu_page('Test Dev Ops', 'Test Dev Ops', 'administrator', 'test-dev-ops', function () {
        ?>
        <button id="click">Click</button>
        <script>
            jQuery('#click').on('click', function (event) {
                event.preventDefault();
                jQuery.ajax({
                    type: 'POST',
                    url: ajaxurl,
                    data: {
                        action: 'login'
                    }
                })
            });
        </script>

        <?php
    });
});
?>
