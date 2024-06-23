<?php
    include("../admin2/config/connection.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
    .box-form{
        width: 300px;
        height: 330px;
        margin: auto;
        margin-top: 100px;
        background-color:pink;
        padding: 10px;
        border-radius: 7px;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
    }
</style>
<body>
    <div class="box-form">
        <h4 class="mt-3 text-white">Admin Dashboard</h4>
        <form action="" method="post">
            <label for="" class="mt-2 mb-2 text-white">Username</label>
            <input type="text" name="txt-name" id="" class="form-control">
            <label for="" class="mt-2 mb-2 text-white">Password</label>
            <input type="password" name="txt-pass" id="" class="form-control">
            <input type="submit" name="btn-login" value="Login" class="btn btn-success mt-3">
        </form>
    </div>
</body>
</html>
<?php
    if(isset($_POST['btn-login'])){
        $name       = $_POST['txt-name'];
        $pass       = $_POST['txt-pass'];
        $sql        = "SELECT * FROM tbl_register WHERE name='$name' AND password= $pass";
        $rs         = $cn->query($sql);
        if($rs->num_rows > 0){
            while($row = $rs->fetch_array()){
                $_SESSION['Username'] = $row['name'];
                $_SESSION['Password'] = $row['password'];
                header("location: dashboard.php");
            }
        }
    }
?>