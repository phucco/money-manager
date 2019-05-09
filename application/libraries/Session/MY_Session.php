<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class MY_Session extends CI_Session
{	
	function __construct()
	{
		parent::__construct();
	}

	public function _alert($message = '', $type = 'info')
	{
		$this->set_userdata('message', $message);
		$this->set_userdata('type', $type);
		$this->mark_as_flash(array('message', 'type'));
	}
}