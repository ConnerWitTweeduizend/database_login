<?php
session_start();
include "db_conn.php";
if (isset($_POST['user']) && isset($_POST['pass'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $user = validate($_POST['user']);
    $pass = validate($_POST['pass']);
    if (empty($user)){
        header("Location: index.php?error=Correct username input required");
        exit();
    }else if (empty($pass)){
        header("Location: index.php?error=Correct password input required");
        exit();
    }else{
        $sql = "SELECT * FROM users WHERE user_name='$user' AND password='$pass'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $user && $row['password'] === $pass){
               $SESSION['user_name'] = $row['user_name']; 
               $SESSION['name'] = $row['name']; 
               $SESSION['id'] = $row['id'];
               header("Location: home.php");
               exit();
            }else{
                header("Location: index.php?error=Incorrect login info");
                exit();
            }
        }else{
            header("Location: index.php?error=Incorrect login info");
            exit();
        }
    }
}else{
    header("Location: index.php");
    exit();
}
?>