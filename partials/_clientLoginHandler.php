<?php
    $showErr = "false";
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        echo '<script>console.log("gautam")</script>';
        include '_dbconnect.php';
        $uid = $_POST['e_id'];
        $upwd   = $_POST['e_pwd'];
        echo '<script>console.log("gautam")</script>';
        $sql = "SELECT * FROM `emp_userinfo` WHERE `emp_id` = '$uid';";
        $res = mysqli_query($con,$sql);
        $numRows = mysqli_num_rows($res);
        echo '<script>console.log('.$numRows.')</script>';
        if($numRows>0)
        {
            $row = mysqli_fetch_assoc($res);
            if(password_verify($upwd, $row['emp_pwd']))
                {
                        session_start();

                        $_SESSION['signedIn'] = true;
                        $_SESSION['usr'] = "client";
                        $_SESSION['uid'] = $uid; 
                        header("Location: /Payroll/clientPaySlip.php");
                        exit(); 
                }
            else{
                    echo "Unable to log in ";
                }
        }
        header("Location: /Payroll/index.php?errLogin=true");
    }
?>
