<?php
    namespace munchy\model\validation;

    class userValidation extends validation {

        /**
         * Checks if password is correct length and contains min special characters
         * Returns message in array including error
         * 
         * @return array
         * 
         */
        protected function isValidPassword($userPassword, $minPasswordLength) : array
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
         * @return array
         * 
         */
        protected function isValidEmail()
        {

        }

        
    }
?>