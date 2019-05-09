<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$input = array();
		$list = $this->transaction_model->get_list($input);

		foreach ($list as $transaction) {
			$category_id = $transaction->category_id;
			$transaction->category_name = $this->transaction_model->get_category_name($category_id);

			$account_id = $transaction->account_id;
			$transaction->account_name = $this->transaction_model->get_account_name($account_id);
		}

		$this->data['list'] = $list;

		$this->data['temp'] = 'transaction/index';
		$this->load->view('layouts/index', $this->data);
	}

	public function expense()
	{
		$input = array();
		$input['where'] = array('type' => 1);
		$list = $this->transaction_model->get_list($input);

		foreach ($list as $transaction) {
			$category_id = $transaction->category_id;
			$transaction->category_name = $this->transaction_model->get_category_name($category_id);

			$account_id = $transaction->account_id;
			$transaction->account_name = $this->transaction_model->get_account_name($account_id);
		}

		$this->data['list'] = $list;

		$this->data['temp'] = 'transaction/expense';
		$this->load->view('layouts/index', $this->data);
	}

	public function income()
	{
		$input = array();
		$input['where'] = array('type' => 2);
		$list = $this->transaction_model->get_list($input);

		foreach ($list as $transaction) {
			$category_id = $transaction->category_id;
			$transaction->category_name = $this->transaction_model->get_category_name($category_id);

			$account_id = $transaction->account_id;
			$transaction->account_name = $this->transaction_model->get_account_name($account_id);
		}

		$this->data['list'] = $list;

		$this->data['temp'] = 'transaction/income';
		$this->load->view('layouts/index', $this->data);
	}

	public function add()
	{
		$input = array();
		$this->data['account_dropdown'] = $this->account_model->get_dropdown($input);

		$input['where'] = array('type' => 1);
		$this->data['expense_dropdown'] = $this->category_model->get_dropdown($input);

		$input['where'] = array('type' => 2);
		$this->data['income_dropdown'] = $this->category_model->get_dropdown($input);

		if ($this->input->post())
		{
			$econtent = $this->input->post('econtent');
			$ecategory_id = $this->input->post('ecategory_id');
			$eaccount_id = $this->input->post('eaccount_id');
			$eamount = $this->input->post('eamount');
			$edescription = $this->input->post('edescription');
			$edate = $this->input->post('edate');

			$icontent = $this->input->post('icontent');
			$icategory_id = $this->input->post('icategory_id');
			$iaccount_id = $this->input->post('iaccount_id');
			$iamount = intval($this->input->post('iamount'));
			$idescription = $this->input->post('idescription');
			$idate = $this->input->post('idate');

			$created_at = date('Y-m-d H:i:s');

			if ( ! empty($eamount) )
			{
				$insert_data = array(
					'category_id' => $ecategory_id,
					'type' => 1,
					'content' => $econtent,
					'account_id' => $eaccount_id,
					'amount' => $eamount,
					'description' => $edescription,
					'date' => $edate,
					'created_at' => $created_at
				);

				if ($this->transaction_model->create($insert_data))
				{
					$this->session->_alert('Expense has been created successfully.', 'success');
					$this->category_model->count_new_transaction($ecategory_id);
					$this->account_model->calculate_expense_to_account($eamount, $eaccount_id);
					redirect(base_url('transaction/'));
				}
				else
				{
					$this->session->_alert('Expense has not been created successfully.', 'danger');
				}
			}

			if ( ! empty($iamount) )
			{
				$insert_data = array(
					'category_id' => $icategory_id,
					'type' => 2,
					'content' => $icontent,
					'account_id' => $iaccount_id,
					'amount' => $iamount,
					'description' => $idescription,
					'date' => $idate,
					'created_at' => $created_at
				);

				if ($this->transaction_model->create($insert_data))
				{
					$this->session->_alert('Income has been created successfully.', 'success');
					$this->category_model->count_new_transaction($icategory_id);
					$this->account_model->calculate_income_to_account($iamount, $iaccount_id);
					redirect(base_url('transaction/'));
				}
				else
				{
					$this->session->_alert('Income has not been created successfully.', 'danger');
				}
			}
		}

		$this->data['temp'] = 'transaction/add';
		$this->load->view('layouts/index', $this->data);
	}

	public function transfer()
	{
		$this->load->helper('form');

		$input = array();
		$this->data['account_dropdown'] = $this->account_model->get_dropdown($input);

		if ($this->input->post())
		{
			$content = $this->input->post('content');
			$faccount_id = $this->input->post('faccount_id');
			$taccount_id = $this->input->post('taccount_id');
			$amount = $this->input->post('amount');
			$description = $this->input->post('description');
			$fee = $this->input->post('fee');
			$date = $this->input->post('date');
			$created_at = date('Y-m-d H:i:s');

			if ( ! empty($amount) && $faccount_id != $taccount_id)
			{
				$insert_data = array(
					'category_id' => 11,
					'type' => 1,
					'content' => $content,
					'account_id' => $faccount_id,
					'amount' => $amount,
					'description' => $description,
					'is_transfer' => 1,
					'date' => $date,
					'created_at' => $created_at
				);

				$insert_data2 = array(
					'category_id' => 18,
					'type' => 2,
					'content' => $content,
					'account_id' => $taccount_id,
					'amount' => $amount,
					'description' => $description,
					'is_transfer' => 1,
					'date' => $date,
					'created_at' => $created_at
				);

				if ( ! empty($fee) )
				{
					$insert_data3 = array(
						'category_id' => 12,
						'type' => 1,
						'content' => $content,
						'account_id' => $faccount_id,
						'amount' => $fee,
						'description' => 'phí ' . $description,
						'date' => $date,
						'created_at' => $created_at
					);
				}

				if ($this->transaction_model->create($insert_data) && $this->transaction_model->create($insert_data2))
				{
					if ( ! empty($insert_data3) )
					{
						$this->transaction_model->create($insert_data3);
						$this->account_model->calculate_expense_to_account($fee, $faccount_id);
					}

					$this->session->_alert('Transfer has been created successfully.', 'success');
					$this->account_model->calculate_expense_to_account($amount, $faccount_id);
					$this->account_model->calculate_income_to_account($amount, $taccount_id);
					redirect(base_url('transaction/'));
				}
				else
				{
					$this->session->_alert('Transfer has not been created successfully.', 'danger');
				}
			}
		}

		$this->data['temp'] = 'transaction/transfer';
		$this->load->view('layouts/index', $this->data);
	}
}