<?php
//buat login ke halaman admin:
//username: admin
//password: jewepemading123

// $pass = password_hash('jewepemading123', PASSWORD_DEFAULT);
// var_dump($pass);
// die;

include ('admin/config_query.php');
$db = new database ();

//session initialization
session_start ();

//check active sessions
if(isset($_SESSION['username']) || isset($_SESSION['id_user'])){
    header ('location: admin/index.php');

} else {
    //Check whether the form is submitted
    if(isset($_POST['submit'])){

        //remove backshlases
        $username = stripslashes ($_POST['username']);
        $password = stripslashes ($_POST['password']);

        // Check whether the username and password values ​​are empty
        if (!empty($username) && !empty (trim($password))){

            //select data tb_user based on username

            $query = $db->get_data_users ($username);

            if($query){
                $rows = mysqli_num_rows($query);
            }else{
                $rows = 0;
            }

            //Check availability of username data
            if($rows != 0){
                $getData = $query->fetch_assoc();
  
                // var_dump($getPassword);
                // die;
                if(password_verify($password,$getData['password'])){
                    $_SESSION['username']= $username;
                    $_SESSION['id_users']= $getData['id_users'];

                    header('location: admin/index.php');
                }else{
                    header("location:login.php?pesan=gagal");
                }

            }else{
                header("location:login.php?pesan=notfound");
            }


        }else{
            header("location:login.php?pesan=empty");
        }

    }else{
        header("location:login.php?pesan=empty");
    }
  

    }

?>