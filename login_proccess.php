<?php 
    session_start();

    include_once("./connect.php");

    if(isset($_POST['email']) && isset($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE email='$email'" ;

        $result = mysqli_query($db,$sql);

        if (mysqli_num_rows($result)>0){
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row['password'])){
                $_SESSION['email'] = $email;
                header("Location: index.php");
                exit;
            } else {
                echo "Password salah.";
            }
        } else {
            echo "Email belum terdaftar";
        }
    }else{
        header('Location: login.php');
    }
?>