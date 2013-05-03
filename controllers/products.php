<?php

class products {
	function index(){
		global $request;
		$this->scripts[]='products.js';
		$groups = get_all("SELECT * FROM `group`");

		// Lisa All goups loetellu
		array_unshift($groups, array('group_id'=>0, 'group_name'=>"All"));
		$products = get_all("SELECT * FROM product NATURAL JOIN `group` NATURAL JOIN image WHERE deleted=0");
		require 'views/master_view.php';
	}
}