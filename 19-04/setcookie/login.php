<?php session_start();

      $username =  isset($_POST['username']) ? $_POST['username'] : '';
      $password =  isset($_POST['password']) ? $_POST['password'] : '';

      if ($_SERVER["REQUEST_METHOD"] == "POST"){

            $error =[];   
            $regex_username = "/^\w{3,16}$/";
            $regex_password = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,}$/";

            if ( !preg_match($regex_username, $username) ) {
                  $error['username'] = "username từ 3 đến 16 ký tự gồm chữ và số";
            }
            if ( !preg_match($regex_password, $password) ) {
                  $error['password'] = "Mật khẩu phải chứa ít nhất một số, một chữ hoa và chữ thường và có 8 ký tự trở lên!!!";
            }

            if (empty($error))
            {
                  $conn = new PDO("mysql:host=localhost; dbname=sql_injection", 'root', '');
		      // Khai báo exception
                  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);                 
                  // Sử đụng Prepare 
                  $stmt = $conn->prepare("SELECT username  FROM  users WHERE username = '$username' AND password = md5('$password');");                  
                  // Thực thi câu truy vấn
                  $stmt->execute();
                  $is_check = $stmt->fetch(PDO::FETCH_ASSOC);
                  // Ngắt kết nối
                  $conn = null;

                  // echo "<pre>";
                  // var_dump($is_check);
                  // echo "</pre>";
                  if ($is_check != NULL)
                  {
                        if (isset($_POST['remember'])) {
                              setcookie('username', $username, time() + 3600);
                        }
                        $_SESSION['username'] = $username;
                        //chuyển hướng
                        header('Location: home.php');
                  }

                  else
                  {
                        $_SESSION['error']= "username hoặc mật khẩu không đúng";
                  }
            }
      }
?>

<?php  require_once 'layouts/header.php'; ?>
<div class="card-header row header_login_error">
      <div class="action">LOGIN </div>
      <div class="error">
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
                  <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                              <div class="checkbox">
                                    <label><input type="checkbox" name="remember"> Remember Me</label>
                              </div>
                        </div>
                  </div>
                  <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary" name="submit">Login </button>
                  </div>
            </form>
      </div>
</div>
<?php  require_once 'layouts/footer.php'; unset($_SESSION['error']);?>                    