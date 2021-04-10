<?php

	class product extends Controller{
		public function __construct(){
			parent::__construct();
			include "views/warehouse/NhapKho.php";
		}
	}
	new product();

    
?>
