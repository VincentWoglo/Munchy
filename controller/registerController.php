<?php
    namespace munchy\controller;

    use munchy\model\register\register;
    use munchy\validation\userValidation;
    use munchy\storage\session;



    require_once __DIR__ . '../../config/config.php';

    class registerController extends controller
    {

        public userValidation $userValidation;
        public session $session;


        public function __construct()
        {
            // Instantiating the validation class
            $this->userValidation = new userValidation();

            // $this->session = new session();
            $this->session = new session();
        }


        //instantiate userRegister in model
        public function register() : void
        {
            self::view('register');
            // var_dump( $generatedId = substr(md5(uniqid()), 0, 100));
        }


        public function main() : void
        {

            // Input field validations
            $inputError = [];

            $fields = ['usernameInput', 'emailInput', 'passwordInput', 're-passwordInput'];

            foreach ($fields as $field)
            {
                if (empty($_REQUEST[$field]))
                {
                    $inputError[] = ["message" => "Please check your " . str_replace('-', ' ', $field), "fieldName" => $field];
                }
            }

            // passwordMatch function is coming from the validation abstract class
            if($this->userValidation->passwordMatch($_REQUEST['passwordInput'], $_REQUEST['re-passwordInput']) == false)
            {
                array_push($inputError, ['message' => "Password don't match", "fieldName" => "re-passwordInput"]);
            }

            if(count($inputError) <= 0)
            {
                $register = new register(
                                            $_REQUEST['usernameInput'],
                                            $_REQUEST['emailInput'],
                                            $_REQUEST['passwordInput'],
                                            $_REQUEST['re-passwordInput']
                                        );
                $register->main($_REQUEST['emailInput']);
                $register->createUserAccount();  //Create an account for the user

                // echo json_encode("data stored in database");
                // echo json_encode($register->generateUserId());

                // Create login session 
                $this->session->generateLoginSession($_REQUEST['emailInput']);
            }

            else {
                echo json_encode($inputError); // Display errors found during validation
            }
        }
    }
?>