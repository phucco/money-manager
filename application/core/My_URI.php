<?php

/**
* 
*/
class My_URI extends CI_URI
{	
	function __construct()
	{
		parent::__construct();
	}

	public function filter_uri(&$str)
	{
		if ( ! empty($str) && ! empty($this->_permitted_uri_chars) && ! preg_match('/^['.$this->_permitted_uri_chars.']+$/i'.(UTF8_ENABLED ? 'u' : ''), $str))
		{
			show_404();
		}
	}
}