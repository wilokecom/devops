<?php

	namespace DevOps\Controllers;

	class RegisterController
	{
		public function __construct()
		{
			add_action('wp_ajax_login', [$this, 'testAjax']);
			add_action('wp_ajax_nopriv_login', [$this, 'testAjax']);
		}

		public function testAjax()
		{
			if ($_POST['username'] == 'wiloke') {
				wp_send_json_success(['userid' => 1]);
			}

			wp_send_json_error(['userid' => 1]);
		}
	}
