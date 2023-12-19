<?php

use PhpParser\Node\Expr\BinaryOp\BooleanOr;

    class userLogin extends login
    {

        /**
         * 
         */

        public function __construct()
        {
            $this->currentAdminUser();
        }


        /**
         * Logs in the user and returns an array 
         * 
         */
        public function loginUser() : array
        {
            //Code here
            return [];
        }
        
        /**
         * 
         */
        private function currentAdminUser() : bool
        {
            //Code here
            return false;
        }
    }
?>