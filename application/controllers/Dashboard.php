<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Dashboard extends MY_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['get_current_expense_this_month'] = $this->transaction_model->get_current_expense_this_month();
		$this->data['get_current_income_this_month'] = $this->transaction_model->get_current_income_this_month();
		$this->data['get_current_balance_this_month'] = $this->transaction_model->get_current_balance_this_month();
		$this->data['get_total_money'] = $this->account_model->get_total_money();

		$input = array();
		$input['where'] = array('type' => 1, 'MONTH(date)' => date('m'));
		$input['limit'] = array(10, 0);
		$input['column'] = array('id', 'date', 'content', 'amount', 'description');
		$this->data['list_10_expense'] = $this->transaction_model->get_list($input);

		$input['where'] = array('type' => 2, 'MONTH(date)' => date('m'));
		$this->data['list_10_income'] = $this->transaction_model->get_list($input);	

		$this->data['temp'] = 'dashboard/index';
		$this->load->view('layouts/index', $this->data);
	}
}