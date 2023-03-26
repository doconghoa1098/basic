<?php session_start();
require_once 'layouts/header.php'; ?>
    <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
        <div class="container">
            <div>
                <img src="./img/logo.gif" class="img-logo" alt="logo" srcset="">
                <a class="navbar-brand title-logo" href="index.php">DOWNLOAD IMG</a>
            </div>
            <div>
            <?php if (!isset($_SESSION['username']) ){ ?>
                <a class="navbar-brand title-logo" href="./login.php">LOGIN</a>
            <?php } else { ?>
                <a class="navbar-brand title-logo" href="./logout.php">LOGOUT</a>
            <?php } ?>
            </div>
        </div>
    </nav>
    <main class="login-form">
        <div class="cotainer">
            <div class="row col-md-8 justify-content-center fix-img-row">
                <div class="col-md-4 fix-bottom">
                    <div class="img-rounded card img-download ">
                        <img src="./img/1.gif" class="card-header"  />
                        <a href="./download.php?file=1.gif" class="card-body">Download</a>
                    </div>
                </div>
                <div class="col-md-4 fix-bottom">
                    <div class="img-rounded card img-download">
                        <img src="./img/2.gif" class="card-header"  />
                        <a href="./download.php?file=2.gif" class="card-body">Download</a>
                    </div>
                </div>
                <div class="col-md-4 fix-bottom">
                    <div class="img-rounded card img-download">
                        <img src="./img/3.gif" class="card-header"  />
                        <a href="./download.php?file=3.gif" class="card-body">Download</a>
                    </div>
                </div>
                <div class="col-md-4 fix-bottom">
                    <div class="img-rounded card img-download">
                        <img src="./img/4.gif" class="card-header"  />
                        <a href="./download.php?file=3.gif" class="card-body">Download</a>
                    </div>
                </div>
                <div class="col-md-4 fix-bottom">
                    <div class="img-rounded card img-download">
                        <img src="./img/5.gif" class="card-header"  />
                        <a href="./download.php?file=2.gif" class="card-body">Download</a>
                    </div>
                </div>
                <div class="col-md-4 fix-bottom">
                    <div class="img-rounded card img-download ">
                        <img src="./img/6.gif" class="card-header"  />
                        <a href="#" class="card-body">Download</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <?php  
        if (isset($_SESSION['success'])) {
            echo '<script> toastr["success"]("Login thành công !!!"); </script>';
            unset($_SESSION['success']);
        }
    ?>
    <script>
        let check = <?php echo (isset($_SESSION['username'])) ? 'true' : 'false'; ?>;
        let test = document.querySelectorAll('.img-download a');

        //Khi click vào các thẻ download
        for (var i = 0; i < test.length; i++) {
            test[i].onclick = function (e) {   
                if (!check){
                    e.preventDefault(); 
                    alert('Đăng nhập để tải ảnh');
                }
            }  
        }
    </script>
</body>
</html>