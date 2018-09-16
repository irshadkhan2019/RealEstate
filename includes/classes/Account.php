<?php
    class Account{
        private $con;
        private $errorArray=array();
        //private $errorArray;
        // public function __construct($con){
         	//$this->con=$con;
        // $this->errorArray=array();//creates empty array
       // }
        public function con($con)
        {   //public $errorArray=array();
        	$this->con=$con;

        }
        public function login($un,$pw){
        	$pw= md5($pw);
        	$query=mysqli_query($this->con,"SELECT * FROM users WHERE UserName='$un' AND Password='$pw'");
            // echo mysqli_num_rows($query);
        	if(mysqli_num_rows($query) ==1){
        		return true;
        	}
        	else{
        		array_push($this->errorArray, Constants::$loginFailed);
        		return false;
        		echo $un;
        	}
        }
       
        
        public function register($un,$fn,$ln,$em,$em2,$pw,$pw2){
        	$this->validateUsername($un);
			$this->validateFirstname($fn);
			$this->validateLastname($ln);
			$this->validateEmails($em,$em2);
			$this->validatePasswords($pw,$pw2);
            //if no errors then insert into db proccess form
            if(empty($this->errorArray==true))//check if err array is empty or not
            {   
            	//insert into db
            	//return true;if no error this true is retuned to $wasSuccesful in register-handler
            	return $this->insertUserDetails($un,$fn,$ln,$em,$pw);//true or false return to $wasSucc..

            }
            else{
            	return false;
            }
        }//end of register

        public function getError($error){
        	//check if error passed !exist in errorArray
        	if(!in_array($error,$this->errorArray)){
                   $error="";
        	}
        	//if exist then
        	return"<span class='errorMessage'>$error</span>";
        }//end of getERROR
        //insert detail in database
        private function insertUserDetails($un,$fn,$ln,$em,$pw){
           $encryptPw=md5($pw);//encry pass
           $profilePic="assets/images/profile-pics/image.png";
           $date=date("Y-m-d");
           //insert
           $sql = "INSERT INTO users VALUES('','$un','$fn','$ln','$em','$encryptPw','$date','$profilePic')";
           $result=$this->con->query($sql);
         // $result= mysqli_query($this->con, $sql);		
           return $result;//true if succeful and retun to inertUSerDetai
        }

       private function validateUsername($un){
           if(strlen($un)>25 || strlen($un)<5){
           	    //add error in array crated in constructor
                array_push($this->errorArray,"your username must be between 5 to 25 char");
                return;

           }
           //check if username exist
        $checkUsername=mysqli_query($this->con,"SELECT UserName FORM users WHERE UserName='$un'");
        //$checkUsername=$this->con->query("SELECT UserName FORM users WHERE UserName='$un'");
        
        if(mysqli_num_rows($checkUsername) !=0){
         	array_push($this->errorArray, Constants::$usernameTaken);
         	return;
        }
          

        }//end of validateUn fn
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
                    array_push($this->errorArray,"your Email doesnt match");
                    return;
                }
                if(!filter_var($em,FILTER_VALIDATE_EMAIL)){//ECHECK IF EMAIL ISN IN PROPER FORMAT
                       array_push($this->errorArray,"Email is invalid");
                       return;
                }

                // check if that email hasn't already been user
                 $checkEmail=mysqli_query($this->con,"SELECT Email FORM users WHERE Email='$em' ");
                  //$checkEmail=$this->con->query("SELECT Email FORM users WHERE Email='$em'");
               if(mysqli_num_rows($checkEmail) !=0){
         	array_push($this->errorArray, Constants::$emailTaken);
         	return;
        }
          
		}//end

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