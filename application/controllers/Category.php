<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Category extends MY_Controller
{	
	public function __construct()
	{
		parent::__construct();
	}

	public function expense()
	{
		$input = array();
		$input['where'] = array('type' => 1);
		$input['order'] = array('id', 'ASC');
		$list = $this->category_model->get_list($input);

		$this->data['list'] = $list;

		$this->data['temp'] = 'category/expense';
		$this->load->view('layouts/index', $this->data);
	}

	public function income()
	{
		$input = array();
		$input['where'] = array('type' => 2);
		$input['order'] = array('id', 'ASC');
		$list = $this->category_model->get_list($input);

		$this->data['list'] = $list;

		$this->data['temp'] = 'category/income';
		$this->load->view('layouts/index', $this->data);
	}

	public function create()
	{
		if ($this->input->post())
		{
			$category = $this->input->post('category');
			$type = $this->input->post('type');

			if ( ! empty($category) )
			{
				$insert_data = array(
					'name' => $category,
					'type' => $type,
					'count_transaction' => 0,
					'created_at' => date('Y-m-d H-i-s')
				);

				$this->category_model->create($insert_data);
			}
		}
	}
	public function dummy_ex()
	{
		$list_expense = array('Food' , 'Entertainment' , 'My Darling' , 'Working' , 'Shopping' , 'Education' , 'Transportation' , 'Communication' , 'Health' , 'Investments' , 'Transfer From' , 'Bank Fees' , 'Other Expense');

		foreach ($list_expense as $expense) {
			$insert_data = array('name' => $expense, 'type' => 1, 'count_transaction' => 0, 'created_at' => date('Y-m-d H-i-s'));

			// $this->category_model->create($insert_data);
		}
		pre('ok');
	}

	public function dummy_in()
	{
		$list_expense = array('Salary' , 'Given Cash' , 'Investments Income' , 'Freelance Job' , 'Transfer To' , 'Cashback' , 'Other Income');

		foreach ($list_expense as $expense) {
			$insert_data = array('name' => $expense, 'type' => 2, 'count_transaction' => 0, 'created_at' => date('Y-m-d H-i-s'));

			// $this->category_model->create($insert_data);
		}
		pre('ok');
	}


}