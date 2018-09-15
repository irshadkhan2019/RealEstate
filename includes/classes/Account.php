<?php
    class Account{
        
        private $errorArray=array();
        // function__construct($errorArray){
          //  $this->errorArray=array();//creates empty array
        //}
       
        
        public function register($un,$fn,$ln,$em,$em2,$pw,$pw2){
        	$this->validateUsername($un);
			$this->validateFirstname($fn);
			$this->validateLastname($ln);
			$this->validateEmails($em,$em2);
			$this->validatePasswords($pw,$pw2);


        }//end of register

       private function validateUsername($un){
           if(strlen($un)>25 || strlen($un)<5){
           	    //add error in array crated in constructor
                array_push($this->errorArray,"your username must be between 5 to 25 char");
                return;

           }
           //todo:check if username exist
        }
 	   private function validateFirstname($fn){
              if(strlen($fn)>25 || strlen($fn)<2){
           	    //add error in array crated in constructor
                array_push($this->errorArray,"your firstname must be between 2 to 25 char");
                return;

           }
		}
   	   private 	function validateLastname($ln){
               if(strlen($ln)>25 || strlen($ln)<2){
           	    //add error in array crated in constructor
                array_push($this->errorArray,"your lastname must be between 2 to 25 char");
                return;

           }
		}
		private function validateEmails($em,$em2){
                if($em!=$em2){
                    array_push($this->errorArray,"your Eail doesnt match");
                    return;
                }
                if(!filter_var($em,FILTER_VALIDATE_EMAIL)){//ECHECK IF EMAIL ISN IN PROPER FORMAT
                       array_push($this->errorArray,"Email is invalid");
                       return;
                }

                //todo check if that username hasn't already been used

		}
		private function validatePasswords($pw,$pw2){
             if($pw !=$pw2){
             	 array_push($this->errorArray,"password don't match");
                       return;
             }
             if(preg_match('/[^A-Za-z0-9]/', $pw)){//not in range specified A-z ..
                  array_push($this->errorArray,"passwords can only contains number and letters");
                       return;
		         }  
		       if(strlen($pw)>25 || strlen($pw)<5){
           	    //add error in array crated in constructor
                array_push($this->errorArray,"your password must be between 5 to 25 char");
                return;

           }    

	   }

    }//end of class
  
  ?>