<?php   

// Single Responsibility Principle  

// Bad example before using single responsibility principle 

class User  
{           
    public function store($inputs){
        // store user data in database
    }

    public function sendEmail($inputs){ 
        // send email    
    }

}

// Good example using single responsibility principle   


class UserController {

    public function store($inputs){
        // store user data in database
    }
}

class EmailService {

    public function sendEmail($inputs){ 
        // send email
        
    }
}
