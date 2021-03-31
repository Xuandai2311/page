<?php

	
	class employee extends Controller{
		public function __construct(){
			parent::__construct();
			include "views/users/employee.php";
		}
	}
	new employee();


  
    
?>
