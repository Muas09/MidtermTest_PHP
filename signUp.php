<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signUp.css">
</head>
<body>
    <div class= "">
        <section id="container">
            <h2> Sign Up</h2>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                        <label for="email"></label>
                        <input type="email" name="email" id="email"  placeholder='Work Email' value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>">
                        <br>
                        <label for="firstname"></label>
                        <input type="text" name="firstname" id="firstname" placeholder='First Name' value="<?php echo isset($firstname) ? htmlspecialchars($firstname) : ''; ?>">
                        <br>
                        <label for="lastname"></label>
                        <input type="text" name="lastname" id="lastname" placeholder='Last name' value="<?php echo isset($lastname) ? htmlspecialchars($lastname) : ''; ?>">
                        <br>
                        <label for="password"></label>
                        <input type="password" name="password" id="password" placeholder='Password'>
                        <br>
                        <input type="submit" value="Đăng ký" > 
            <?php
                    // Kiểm tra xem form đã được gửi chưa
                    if($_SERVER['REQUEST_METHOD'] === 'POST') {
                        // Lấy dữ liệu từ form
                        $firstname = $_POST['firstname'];
                        $lastname = $_POST['lastname'];
                        $email = $_POST['email'];
                        $password = $_POST['password'];

                        // Kiểm tra tính hợp lệ của dữ liệu
                        $errors = [];
                        if(empty($email)) {
                            $errors[] = 'Vui lòng nhập địa chỉ email của bạn.';
                        } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            $errors[] = 'Địa chỉ email không hợp lệ.';
                        }
                        if(empty($firstname)) {
                            $errors[] = 'Vui lòng nhập tên của bạn.';
                        }

                        if(empty($lastname)) {
                            $errors[] = 'Vui lòng nhập họ của bạn.';
                        }
                        if(empty($password)) {
                            $errors[] = 'Vui lòng nhập mật khẩu của bạn.';
                        } elseif(strlen($password) < 8) {
                            $errors[] = 'Mật khẩu phải có ít nhất 8 ký tự.';
                        }

                        // Nếu không có lỗi, tiến hành đăng ký
                        if(empty($errors)) {
                            // Thực hiện lưu thông tin vào cơ sở dữ liệu
                            // ...
                            // Hiển thị thông báo đăng ký thành công
                            echo 'Đăng ký thành công!';
                        } else {
                            // Nếu có lỗi, hiển thị lại form với thông báo lỗi
                            foreach($errors as $error) {
                                echo '<div style="color: red;">' . $error . '</div>';
                            }
                        }
                    }
                    ?>
            </section> 
      </div>
      


</form>
</body>
</html>