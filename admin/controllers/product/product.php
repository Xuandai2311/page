<?php

	class product extends Controller{
		public function __construct(){
			parent::__construct();
			include "views/product/product.php";
		}
	}
	new product();

    
?>
