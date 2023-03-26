<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #eadede;
        }
        .form-test{
            width: 400px;
            height: 130px;
            margin: 10% auto;
            padding: 50px;
            background-color: #cfbdbd;
            border-radius: 20px;
        }
        .form-group {
            display: flex;
            height: 40px;
            margin-bottom: 15px;
            align-items: center;
            
        }
        label {
            min-width: 70px;          
        }
        input{
            flex:2;
            border-radius: 10px;
            border :none;
        }
        #InputEmail1, #InputPassword1{
            height: 30px;
        }
        input:focus{
            outline: none;
        }
        button{
            margin: 0 0 0 80%;
            height: 30px;
            border-radius: 10px;
            border: none;
            padding: 8px;
            background-color: #c07d7d;
        }
    </style>
</head>
<body>
    <div class="form-test">
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <!-- <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> -->
            <div class="form-group">
                <label for="InputEmail1">Email</label>
                <input type="email"  id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="InputPassword1">Password</label>
                <input type="password"  id="InputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>