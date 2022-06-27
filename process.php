<?php
// database connection..
$response = '';
$server="localhost";
$username="root";
$password="";
$database="zalego";

$conn = mysqli_connect($server,$username,$password,$database);
  
    if( isset($_POST ['submitButton']) )
    {
        // 1. Fetch Form Data.
            $firstName = $_POST['firstname'];
            $lastName = $_POST['lastname'];
            $email = $_POST['email'];
            $phone = $_POST['phonenumber'];
            $message = $_POST['message'];

        // 2. Submit Form Data.
            $insertData = mysqli_query($conn, "INSERT INTO 
            contactus(firstname,lastname,email,phonenumber,message)
            VALUES('$firstName','$lastName','$email','$phone','$message')");

            if($insertData)
            {
                $response = "Data Submitted Successfully";
            }
            else 
            {
                $response = "Error Occured ".mysqli_error($conn) ;
            }
    }

?>