<?php
    namespace munchy\controller;

    use munchy\model\register\register;

    require_once __DIR__ . '../../config/config.php';

    class registerController extends controller
    {
        //instantiate userRegister in model


        public function register()
        {
            if($_REQUEST)
            {
                $register = new register(
                                            $_REQUEST['usernameInput'],
                                            $_REQUEST['emailInput'],
                                            $_REQUEST['passwordInput'],
                                            $_REQUEST['re-passwordInput']
                                        );
                $register->main();
            }

            

            self::view('register');
        }
    }
?>