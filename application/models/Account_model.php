<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_model extends MY_Model
{
	var $table = 'account';

	public function get_total_money()
	{
		$total = 0;

		$cash = $this->get_usable_money_from_account(1);
		$VPBank = $this->get_usable_money_from_account(3);
		$ABBank = $this->get_usable_money_from_account(4, 50000);
		$VIB = $this->get_usable_money_from_account(5, 50000);		

		$total = $cash + $VPBank + $ABBank + $VIB;

		return $total;
	}

	public function get_usable_money_from_account($id, $reserve_amount = 0)
	{
		$id = intval($id);

		$account = $this->get_info($id);

		if ( empty($account) ) return FALSE;

		$money_from_account = intval($account->amount);

		if ($money_from_account <= $reserve_amount)
		{
			return 0;
		}
		else
		{
			return $money_from_account - $reserve_amount;
		}

		return FALSE;
	}

	public function get_dropdown(array $input)
	{
		$input['order'] = array('id', 'ASC');
		$input['column'] = array('id', 'name');
		$list = $this->get_list($input);

		$result = '';

		foreach ($list as $row) {
			$result .= '<option value="' . $row->id . '">' . $row->name . '</option>' . "\n";
		}

		return $result;
	}

	public function calculate_expense_to_account($amount, $id)
	{
		$id = intval($id);
		$amount = intval($amount);

		if ( empty($id) OR empty($amount) ) return FALSE;

		$account = $this->get_info($id);

		if ( empty($account) ) return FALSE;

		$count_transaction = $account->count_transaction;
		$account_amount = $account->amount;

		$update_data = array(
			'count_transaction' => $count_transaction + 1,
			'amount' => $account_amount - $amount,
			'updated_at' => date('Y-m-d H:i:s')
		);

		if ( ! $this->update($id, $update_data) ) return FALSE;
	}

	public function calculate_income_to_account($amount, $id)
	{
		$id = intval($id);
		$amount = intval($amount);

		if ( empty($id) OR empty($amount) ) return FALSE;

		$account = $this->get_info($id);

		if ( empty($account) ) return FALSE;

		$count_transaction = $account->count_transaction;
		$account_amount = $account->amount;

		$update_data = array(
			'count_transaction' => $count_transaction + 1,
			'amount' => $account_amount + $amount,
			'updated_at' => date('Y-m-d H:i:s')
		);

		if ( ! $this->update($id, $update_data) ) return FALSE;
	}
}
