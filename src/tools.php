<?php
namespace zuoan11/p;
/**
 * 格式化打印数据
 * @Author   左岸
 * @DateTime 2019-04-04
 * @email    [renyu@donews.com]
 * @param    [type]             $data [description]
 * @return   [type]                   [description]
 */
if (!function_exists('p')) {
	function p($data) {
		echo '<pre>';
		print_r($data);
	}
}
