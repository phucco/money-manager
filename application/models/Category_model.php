<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends MY_Model
{
	var $table = 'category';

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

	public function count_new_transaction($id)
	{
		$id = intval($id);

		if ( empty($id) ) return FALSE;

		$category = $this->get_info($id);

		if ( empty($category) ) return FALSE;

		$count_transaction = $category->count_transaction;

		$update_data = array(
			'count_transaction' => $count_transaction + 1,
			'updated_at' => date('Y-m-d H:i:s')
		);

		if ( ! $this->update($id, $update_data) ) return FALSE;
	}
}
