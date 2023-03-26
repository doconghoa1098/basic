<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Injection</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <style>
        body {
            background-color: #eadede;
        }
        .form-search{
            width: 400px;
            height: 50px;
            margin: 10% auto;
            background-color: #cfbdbd;
            border-radius: 20px;
        }
        .form-group {
            display: flex;
            margin-bottom: 15px;
            align-items: center;
            
        }
        

    </style>
 <?php
    include_once 'conn_database.php';
    $key = null;
    if (isset($_GET['submit'])) {
        $key = $_GET['key'];
    }
    $sql = "SELECT id, username FROM users WHERE username='$key ';";

    // $sql = "SELECT id, username FROM users WHERE username='1' or 1=1;# ';"; 

    $result = mysqli_query($conn ,$sql);   
    $resultCheck = mysqli_num_rows($result);
    
 
 ?>
</head>
<body>
    <div class="form-search">
        <form method="GET" action="">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Tìm gì ????" name="key">
                <button class="btn btn-secondary" type="submit"  name="submit"><i class="fa fa-search"></i></button>
            </div>   
        </form>
    </div>
    <div class="table">
        <table class="table">
            <thead>
                <tr>
                    <th >#</th>
                    <th >User</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($resultCheck > 0) { 
                while ($row = mysqli_fetch_assoc($result)) {
                    echo  "<tr>
                            <td>".$row['id']."</td>
                            <td>".$row['username']."</td>
                        </tr>";
                    }
                }?>
            </tbody>
        </table>
    </div>
</body>
</html>