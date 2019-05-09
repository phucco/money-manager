<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('pre'))
{
	function pre($data)
	{
		echo '<pre>';
		print_r($data);
		echo '</pre>';
		die();
	}
}

if ( ! function_exists('money'))
{
	function money($money)
	{
		return number_format(intval($money), 0, ',', '.');
	}
}

date_default_timezone_set('Asia/Ho_Chi_Minh');
setlocale(LC_MONETARY, 'vi');