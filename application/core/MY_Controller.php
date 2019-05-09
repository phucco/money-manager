<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	public $data = array(
		'page_title' => 'Manager',
		'extra_css' => array(),
		'extra_js' => array(),
		'write_js' => '',
		'temp' => 'errors/blank',
		'header' => 'layouts/header'
	);

	public function __construct()
	{
		parent::__construct();
				
		$this->data['module'] = $this->uri->rsegment(1);
		$this->data['action'] = $this->uri->rsegment(2);

		$this->_check_login();

		// 	$this->load->helper('permission_helper');
		// 	$this->load->helper('role_helper');
		// 	$this->load->helper('user_helper');

		// 	$module = 
		// 	$action = $this->uri->rsegment(2);

		// 	$this->data['page_title'] = ucfirst(to_vn($module)) . ' | The Farm Story';

		// 	$this->data['temp'] = 'admin/' . $module . '/' . $action;

		// 	$this->data['module'] = $module;

		// 	if ( $module != 'dashboard' && file_exists(APPPATH . 'models/' . $module . '_model.php') ) $this->load->model($module . '_model'); 
			
		// }

	}


	protected function _check_login()
	{
		$url = $this->uri->rsegment(1);

		if ( ! $this->_valid_login() && $url != 'login')
		{
			redirect(base_url('login/'));
		}
	}

	protected function _valid_login()
	{
		$login = $this->_get_row_token();

		if ( ! empty($login) )
		{
			$expired_at = $login->expired_at;
			if (time() < strtotime($expired_at)) return TRUE;
		}

		return FALSE;
	}

	public function _get_row_token()
	{
		$token = $this->_get_token();

		if ( ! empty($token) )
		{
			$this->load->model('login_model');

			$input = array();
			$input['where'] = array('token' => $token);
			$login = $this->login_model->get_row($input);

			return $login;
		}

		return FALSE;
	}
	
	protected function _get_token()
	{
		$token = $this->session->userdata('money_session');

		if ( ! empty($token) )
		{
			return strval($token);
		}

		return FALSE;
	}
}