<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction_model extends MY_Model
{
	var $table = 'transaction';

	public function get_current_expense_this_month()
	{
		$where = array('type' => 1, 'MONTH(date)' => date('m'), 'is_transfer' => 0);

		return $this->get_sum('amount', $where);
	}

	public function get_current_income_this_month()
	{
		$where = array('type' => 2, 'MONTH(date)' => date('m'), 'is_transfer' => 0);

		return $this->get_sum('amount', $where);
	}

	public function get_current_balance_this_month()
	{
		return $this->get_current_income_this_month() - $this->get_current_expense_this_month();
	}

	public function get_category_name($category_id)
	{
		$category_id = intval($category_id);

		$CI =& get_instance();
		$CI->load->model('category_model');

		$category = $CI->category_model->get_info($category_id);

		if ( empty($category) ) return FALSE;

		return $category->name;
	}

	public function get_account_name($account_id)
	{
		$account_id = intval($account_id);

		$CI =& get_instance();
		$CI->load->model('account_model');

		$account = $CI->account_model->get_info($account_id);

		if ( empty($account) ) return FALSE;
		 
		return $account->name;
	}
}
