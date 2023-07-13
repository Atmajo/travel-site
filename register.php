<?php
@include 'config.php';

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $user_type = $_POST['user_type'];

    $select = " SELECT * FROM user_form WHERE email='$email' && password='$pass' ";

    $result = mysqli_query($conn, $select);
    if(mysqli_num_rows($result)>0){
        $error[]='user already exist!';
    }else{
        $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name', '$email', '$pass', '$user_type')";
        mysqli_query($conn, $insert);
        header('location:login.php');
    }
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta dd="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
</head>
<body>
    <header>
        <div class="fa fa-bars" id="menu-bar"></div>
        <a href="#" class="logo"><span>g</span>anapati.</a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#book">book</a>
            <a href="#packages">packages</a>
            <a href="#services">services</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
        </nav>
    </header>
    <div class="register-form-container">
        <form action="" method="post">
            <h3>register</h3>
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };

            ?>
            <input type="name" class="box" placeholder="James Bond" name="name">
            <input type="email" class="box" placeholder="bond07@gmail.com" name="email">
            <input type="password" class="box" placeholder="password" name="password">
            
            <select name="user_type" class="box">
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select>
            <input type="submit" class="btn" value="register">
        </form>
    </div>
</body>
</html>