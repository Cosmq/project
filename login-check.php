<?php
$username = "user_uname";
$password = "user_pwd";



 $sql = "SELECT * FROM users WHERE user_uname=? OR user_pwd=?;";
    $test = mysqli_test_init($conn);
    if(!mysqli_test_prepare($test, $sql)){
       header("Location: /index.php?error=sqlerror");
    exit(); 
    }
    else{
        mysqli_test_bind_param($test, "ss" ,$user_uname, $user_uname);
        mysqli_test_execute($test);
        $result = mysqli_stmt_get_result($test);
        if($row = mysqli_fetch_assoc($result)) {
            $passcheck = password_verify($user_pwd, $row['user_pwd']);
            if ($passcheck == false){
                header("Location: /index.php?error=wrongpassword");
                exit();
            }
            else if ($passcheck == true){
                session_start();
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['user_uame'] = $row['user_uname'];
                  header("Location: ../index.php?login=success");
                exit();  
            }
        } 
        else{
           header("Location: /index.php?error=nouser");
            exit(); 
        }
    }

?>





