<?php
    class signin extends Controller {
        public function __construct() {
            parent::__construct();

            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $email = $_POST['email'];
                $password = $_POST['password'];

                $check = $this->Model->fetchOne("select * from employee where email='$email'");

                if(isset($check['email'])) {
                    if($check['password'] == $password) {
                        $_SESSION['account'] = $email;
                        $_SESSION['name'] = $check['name'];
                        header("location: index.php");
                    }
                }else {
                     echo ( "Tài Khoản Hoặc Mật Khẩu Không Đúng !");
                }
            }
            

            include "views/signin.php";
        }
    }
    new signin();


?>