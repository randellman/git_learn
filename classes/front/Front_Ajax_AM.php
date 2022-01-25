<?php

class Front_Ajax_AM
{
	public function __construct()
	{
		$this->actions();
	}

	public function actions()
	{
		$actions = [
			'user_change_currency',
			'user_change_country',
		];

		foreach ($actions as $action) {
			add_action('wp_ajax_' . $action, [$this, $action]);
			add_action('wp_ajax_nopriv_' . $action, [$this, $action]);
		}
	}

	public function user_change_currency()
	{
		$uid = get_current_user_id();

		if(!$uid){
			wp_send_json_error([
				'message' => __('You must be logged in.', 'best-of-shop'),
			]);
		}

		update_user_meta($uid, 'currency', $_POST['currency']);

		wp_send_json_success([
			'message' => __('Currency has been changed.', 'best-of-shop'),
		]);
	}

	public function user_change_country()
	{
		$uid = get_current_user_id();

		if(!$uid){
			wp_send_json_error([
				'message' => __('You must be logged in.', 'best-of-shop'),
			]);
		}

		update_user_meta($uid, 'country', $_POST['country']);

		wp_send_json_success([
			'message' => __('Country has been changed.', 'best-of-shop'),
		]);
	}
}

new Front_Ajax_AM();