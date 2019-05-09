<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Account extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$input = array();
		$input['order'] = array('id', 'ASC');
		$list = $this->account_model->get_list($input);

		$this->data['list'] = $list;

		$this->data['temp'] = 'account/index';
		$this->load->view('layouts/index', $this->data);
	}

	public function dummy()
	{
		$list = array('Cash' , 'VPBank' , 'Credit Card' , 'ABBank' , 'VIB' , 'Sacombank');

		foreach ($list as $account) {
			$insert_data = array('name' => $account, 'count_transaction' => 0, 'amount' => 0, 'created_at' => date('Y-m-d H-i-s'));

			// $this->account_model->create($insert_data);
		}
		pre('ok');
	}
}