<?php
    session_start();
    //include "connection.php";
?>

<?php    
    if(isset($_POST['signupBtn'])){
        $fullname = mysqli_real_escape_string($con, $_POST['fullname']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $confirmpassword = mysqli_real_escape_string($con, $_POST['confirmpassword']);
        $mobilechecklenght = strlen($mobile);
        
    //creating Hash method 
        $pass  = password_hash($password, PASSWORD_BCRYPT);
        $cpass = password_hash($confirmpassword, PASSWORD_BCRYPT);
    //creating Hash method  

    //Email Check
        $emailquery = "SELECT * FROM registration WHERE email = '$email' ";
        $query = mysqli_query($con, $emailquery);
        $emailcount = mysqli_num_rows($query);
            if($emailcount > 0){
                echo "Email already Exist";
    //Email Check            

            } else {  
    //Mobile number lenght Check
                if($mobilechecklenght > 10 AND $mobilechecklenght < 10){
                    echo "Please Check Your Mobile Number";
                } else {
                    if($mobilechecklenght == 10){

                        $mobilesearch = "SELECT * FROM registration WHERE mobile = '$mobilechecklenght' ";
                        $mobilequery = mysqli_query($con, $mobilesearch);
                        $mobilecount = mysqli_num_rows($mobilequery);
    //Mobile number lenght Check
    //Mobile number Check                    
                        if($mobilecount > 0){
                            echo "This Number is Already In use";
    //Mobile number Check                         
                        } else {
    //Password are Matching are Not check                         
                            if($password === $confirmpassword){
                                $sql = "INSERT INTO registration (fullname, email, mobile, password, confirmpassword) VALUES ('$fullname','$email','$checklenght','$pass','$cpass')";
                                $result = mysqli_query($con, $sql);
                                    if($result){
                                        header("Location:home.php");
                                    } else {
                                        echo "Something went wrong";
                                    }    
                            } else {
                                echo "Password are Not same";
                            }
    //Password are Matching are Not check                          
                        }
                    }
            }    
        }
    }
    
?>