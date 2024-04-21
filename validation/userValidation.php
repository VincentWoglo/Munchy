<?php
    namespace munchy\validation;


    class userValidation extends validation {

        /**
         * Checks if password is correct length and contains min special characters
         * Returns message in array including error
         * 
         * @return array
         * 
         */
        protected function isValidPassword($userPassword, $minPasswordLength, $passwordToMatch) : array
        {
            $returnMessage = [];

            // Define validation checks and their corresponding methods
            $checks = [
                'ContainsInteger' => 'containsInteger',
                'ContainsSpecialChars' => 'containsSpecialChars',
                'IsMinLength' => 'isMinLength',
            ];
        
            // Check each condition and push messages to $returnMessage
            foreach ($checks as $messageKey => $methodName) {
                if($this->$methodName($userPassword))
                    $returnMessage[] = [$messageKey => true];
            }


            return $returnMessage;
        }


        /**
         * @access public
         * @return array
         * 
         */
        public function isValidEmail(string $userEmail) : array
        {
            $returnMessage = [];

            if($this->isValidEmailClient($userEmail) == false)
            {
                array_push($returnMessage, ["message" => "Please check you email", "fieldName" => "emailInput"]);
            }

            if($this->containsAtSymbol($userEmail) == false)
            {
                array_push($returnMessage, ["message" => "You email must contain an @ symbol", "fieldName" => "emailInput"]);
            }

            return $returnMessage;
        }


        protected function isValidUserName($userPassword, $minPasswordLength) : array
        {
            $returnMessage = [];

            return $returnMessage;
        }

        
    }
?>