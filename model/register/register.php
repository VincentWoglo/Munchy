<?php
    namespace munchy\model\register;

    use munchy\validation\userValidation;
    use  munchy\database\databaseConnection;
    use munchy\storage\session;

    class register 
    {
        protected string $userName;
        protected string $email;
        protected string $password;
        protected string $rePassword;
        public userValidation $userValidation;
        public databaseConnection $databaseConnection;

        /**
         * 
         */
        public function __construct(string $userName, string $email, string $password, string $rePassword)
        {
            $this->userName = $userName;
            $this->email = $email;
            $this->password = $password;
            $this->rePassword = $rePassword;

            // Instantiating the validation class
            $this->userValidation = new userValidation();

            // instantiating the database connection
            $this->databaseConnection = new databaseConnection();
            
        }


        public function main(string $userEmail) : void
        {
               echo json_encode($this->userValidation->isValidEmail($userEmail));
   
        }


        /**
         * Returns array of status of whether data was stored or not
         */
        public function createUserAccount() : array
        {
            $message = [];

            $data = [
                'userId' => $this->generateUserId(),
                'userName' => $this->userName,
                'email' => $this->email,
                "password" => $this->password,
                "isSusbscribed" => false
            ];

            $insertStatement = "INSERT INTO register_user (user_id, user_name, email, password, is_subscribed) VALUES (:userId, :userName, :email, :password, :isSusbscribed)";
            $insertStatement= $this->databaseConnection->connectDatabase()->prepare($insertStatement);
            $insertStatement->execute($data);
            
            return [
                "message" => "User successfully created"
            ];
        }


        public function loginUser() : array
        {
            $session = new session();
            // $session->generateLoginSession("dj");

            header("Location: /dashboard");

            return [];
        }


        protected function deleteUserAccount() : array
        {
            return [];
        }


        protected function updateUserName() : array
        {
            return [];
        }


        protected function updateUserEmail() : array
        {
            return [];
        }


        protected function updateUserPassword() : array
        {
            return [];
        }


        /**
         * 
         */
        public function generateUserId() : string
        {
            $generatedId = substr(md5(uniqid()), 0, 100); // Generates a 100-character ID

            return $generatedId;
        }


        
    }

?>