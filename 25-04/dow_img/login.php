<?php session_start();

    $username =  isset($_POST['username']) ? $_POST['username'] : '';
    $password =  isset($_POST['password']) ? $_POST['password'] : '';

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $error =[];   
        $regex_username = "/^\w{3,16}$/";
        $regex_password = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,}$/";

        if (!preg_match($regex_username, $username)) {
            $error['username'] = "username từ 3 đến 16 ký tự gồm chữ và số";
        }

        if (!preg_match($regex_password, $password)) {
                $error['password'] = "Mật khẩu phải chứa ít nhất một số, một chữ hoa và chữ thường và có 8 ký tự trở lên!!!";
        }

        if (empty($error)) {
            if ($username == "hoadc" && $password == "Hoadzai123") {
                $_SESSION['username'] = $username;
                if (isset($_SESSION['error']) ) { unset($_SESSION['error']);  };
                $_SESSION['success']= "Login Success";
                header('Location: index.php');
            } else {
                $_SESSION['error']= "username/password không đúng";
            }
        }
    }
?>
<?php  require_once 'layouts/header.php'; ?>
    <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
        <div class="container">
            <div>
                <img src="./img/logo.gif" class="img-logo" alt="logo" srcset="">
                <a class="navbar-brand title-logo" href="index.php">DOWNLOAD IMG</a>
            </div>
            <div>
                <a class="navbar-brand title-logo" href="#">LOGIN</a>
            </div>
            
        </div>
    </nav>
    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header row header_login_error">
                            <div class="action">LOGIN </div>
                            <div class="mess-error">
                                <?php if (isset($_SESSION['error'])): ?>
                                    <b class="form-error"><?php echo $_SESSION['error']; ?></b>
                                <?php endif ?>
                            </div>
                        </div>
                            <div class="card-body">
                                <form action="#" method="POST">
                                    <div class="form-group row">
                                        <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>
                                        <div class="col-md-6">
                                            <input type="text" id="username" class="form-control" name="username"  autofocus>
                                            <?php if (isset($error['username'])): ?>
                                                    <span class="form-error"><?php echo $error['username']; ?></span>
                                            <?php endif ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                        <div class="col-md-6">
                                            <input type="password" id="password" class="form-control" name="password" >
                                            <?php if (isset($error['password'])): ?>
                                                    <span class="form-error"><?php echo $error['password']; ?></span>
                                            <?php endif ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary" name="submit">Login </button>
                                    </div>
                                </form>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>