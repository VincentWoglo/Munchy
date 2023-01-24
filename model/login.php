<?php
    abstract class login
    {
        /**
         * Logs the user out and returns a boolean
         * 
         * @param string $userId
         * @return bool
         */
        function userLogout($userId): bool
        {
            //check for sessions and update database
        }


        /**
         * Takes session token that was generated and store it in database
         * Return false if the token has not been stored in the datbase
         */
        private function storeRememberMeToken()
        {
            //Use JWT token for session
        }
    }
?>