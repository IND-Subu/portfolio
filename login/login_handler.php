<?php
if ($_POST['modal'] == 'register') {
    include '../components/db_connect.php';
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $userid = $_POST['userid'];
    $pass = $_POST['pass'];
    $passwd_hash = password_hash($pass, PASSWORD_DEFAULT);
    $verify_email = "Select * from userdata where email = '$email'";
    $verified_email_dataCount = mysqli_query($conn, $verify_email);
    $verified_email = mysqli_num_rows($verified_email_dataCount);
    if ($verified_email > 0) {
        echo 'exist';
    } else {
        $sql = "INSERT INTO `userdata` (`firstName`, `lastName`, `email`, `password`, `userid`, `role`, `dTime`) VALUES ('$fname', '$lname', '$email', '$passwd_hash', '$userid', 'USER', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo 'registered';
        } else {
            echo 'error';
        }
    }
}
if ($_POST['modal'] == 'login') {
    include '../components/db_connect.php';
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "select * from userdata where email = '$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($result);
    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['user'] = $user["firstName"];
            $_SESSION['role'] = $user["role"];
            $_SESSION['userid'] = $user["userid"];
            echo 'success';
        } else {
            echo 'Password not Matched';
        }
    } else {
        echo 'Email not exists.';
    }
}

// include '../components/db_connect.php';
// if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
//             echo 1;
//         }
//     }
// }

?>