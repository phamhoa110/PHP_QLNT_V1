<?php 
    session_start();
    include_once('config.php');
    if(isset($_POST['submit']) && $_POST["username"] != '' && $_POST["password"] != '' 
    && $_POST['repassword'] != '' && $_POST['fullname'] !='' && $_POST['dateofbirth'] !='' && $_POST['sex'] !=''
    && $_POST['email'] !='' && $_POST['phonenumber'] !=''){
        //thực hiện khi đã nhập đầy đủ thông tin
        $username = $_POST["username"];
        $password = $_POST["password"];
        $repassword = $_POST["repassword"];
        $fullname = $_POST["fullname"];
        $dateofbirth = $_POST['dateofbirth'];
        $sex = $_POST['sex'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        if($password != $repassword){
            $_SESSION["thongbao"] = "Mật khẩu không đúng";
            header("location:register.php");
            die();
        }
            
        $sql = "SELECT * FROM user WHERE username = '$username'";
        $old = mysqli_query($conn, $sql);
        $password = md5($password);
        if(mysqli_num_rows($old) > 0){
            $_SESSION["thongbao"] = "Tên đăng nhập đã tồn tại";
            header("location:register.php");
            die();
        }
        $sql = "INSERT INTO `user`(`username`, `password`, `fullname`, `dateofbirth`, `gender`, `email`, `phonenumber`) 
        VALUES ('$username','$password','$fullname','$dateofbirth','$sex','$email','$phonenumber')";
        $rs = mysqli_query($conn, $sql);
        //$_SESSION["thongbao"] = "Đăng ký thành công";
        if($rs){
            echo "a";
        ?>
            
            <script> 
            alert('đăng ký thành công');
            </script>
        <?php
        }

        header("location:login.php");
        mysqli_close($conn);
    }else{
        $_SESSION["thongbao"] = "vui lòng nhập đầy đủ thông tin";
        header("location:register.php");
    }

?>