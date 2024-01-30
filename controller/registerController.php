<?php
    namespace munchy\controller;

    use munchy\model\register\register;

    class registerController extends controller
    {
        //instantiate userRegister in model


        public function register()
        {
            var_dump($_REQUEST);
            $register = new register(
                                        $_REQUEST['usernameInput'],
                                        $_REQUEST['emailInput'],
                                        $_REQUEST['passwordInput'],
                                        $_REQUEST['re-passwordInput']
                                    );
            $register->main();

            self::view('register');
        }
    }
?>