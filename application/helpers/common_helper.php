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

function to_vn($module)
{
	if ( empty($module) ) return FALSE;

	switch ($module) {
		case 'dashboard':
			return 'bảng quản trị';
			break;
			
		case 'user':
			return 'thành viên';
			break;

		case 'login':
			return 'Đăng nhập';
			break;
		
		case 'product':
			return 'sản phẩm';
			break;

		case 'role':
			return 'vai trò';
			break;

		case 'category':
			return 'danh mục sản phẩm';
			break;

		default:
			return FALSE;
			break;
	}

	return FALSE;
}

function write_brand()
{
	return '<span class="tfs-text">The Farm Story</span>';
}

date_default_timezone_set('Asia/Ho_Chi_Minh');