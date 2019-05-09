<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$url = $this->uri->rsegment(1);

		if ($this->_valid_login() && $url == 'login') redirect(base_url('dashboard/'));
		
		$this->load->helper('string');
		$token = random_string('md5' , 32);
		$this->data['token'] = $token;
		$this->data['random_code'] = rand(1, 5) . ' + ' . rand(1, 5) . ' = ?';

		$this->load->helper('form');
		$this->load->library('form_validation');

		if ($this->input->post())
		{
			$this->form_validation->set_rules('password', 'password', 'trim|required|callback__check_password', array('required' => 'Password không được để trống.'));
			$this->form_validation->set_rules('code', 'code', 'trim|required|callback__check_code', array('required' => 'Code không được để trống.'));
			$this->form_validation->set_rules('token', 'token', 'trim|required|is_unique[tlpv_login.token]');

			if ($this->form_validation->run() === TRUE)
			{
				$email = $this->input->post('email');

				$created_at = date('Y-m-d H:i:s');
				$expired_at = date('Y-m-d H:i:s', strtotime('+1 year', strtotime($created_at)));

				$insertdata = array(
					'token' => $token,
					'created_at' => $created_at,
					'expired_at' => $expired_at,
					'data' => $this->input->user_agent()
				);

				if ($this->login_model->create($insertdata))
				{
					$this->session->set_userdata('money_session', $token);
					redirect(base_url(),'refresh');
				}
				else
				{
					redirect(base_url('login/'));
				}
			}
		}

		$this->load->view('login/index', $this->data);
	}

	public function _check_password()
	{
		$this->config->load('config_pass');

		$username = $this->config->item('password');
		$real_password = $this->config->item('password');

		$password = $this->input->post('password');

		if ($password === $real_password) return TRUE;

		$this->form_validation->set_message('_check_password', 'Email hoặc password không đúng.');

		return FALSE;
	}

	public function _check_code()
	{
		$date = date('Ymd');

		$code = $this->input->post('code');

		if ($code === $date) return TRUE;

		$this->form_validation->set_message('_check_code', 'Code không đúng.');

		return FALSE;
	}

	public function destroy()
	{
		if ($this->_valid_login())
		{
			$token = $this->_get_row_token();

			$update_data = array('expired_at' => date('Y-m-d H:i:s'));

			if ($this->login_model->update($token->id, $update_data))
			{
				redirect(base_url('login/'),'refresh');
			}
			else
			{
				redirect(base_url(),'refresh');
			}	
		}

		redirect(base_url('login/'),'refresh');
	}

}