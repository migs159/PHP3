<?php 

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email            = $_POST["email"];
        $username         = $_POST["username"];
        $password         = $_POST["password1"];
        $confirm_password = $_POST["confirm-password"];

        // validate username
        
        
        if(trim($username) != ""){
            echo "USER username is NOT EMPTY<br>";
        } else {
            echo "field username is empty<br>";
        }
        
        // validate email
        if(trim($email) != ""){
            echo "USER email is NOT EMPTY<br>";
        } else {
            echo "field email is empty<br>";
        }

        // validate password
        if(trim($password) != ""){
            echo "USER password is NOT EMPTY<br>";
        } else {
            echo "field password is empty<br>";
        }

        // validate confirm password
        if(trim($confirm_password) != ""){
            echo "USER confirm_password is NOT EMPTY<br>";
        } else {
            echo "field confirm_password is empty<br>";
        }
        
        if($password == $confirm_password){
            header("location: demo1.php?success=REGISTRATION SUCCESSFUL");
            exit;
        } else {
            header("location: demo1.php?error=PASSWORD MISMATCH");
            exit;
        }

        //echo "USER username is ". $username ;

        //func caller
        // test($username);
        // test($email);
        // test($password);
        // test($confirm_password);

        //repository name is 'DEMO PHP'

        //dummyFunction("wazzup");
    }

   
    //function to be called
    function test($fieldName){
        if(trim($fieldName) != ""){
            echo "USER field is NOT EMPTY<br>";
        } else {
            echo "field is empty<br>";
        }
    }

?>