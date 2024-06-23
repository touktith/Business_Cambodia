<?php include("../admin2/config/connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="header w-50 bg-secondary text-white m-auto p-3 d-flex justify-content-between">
        Register
        <input type="button" value="Login Account" class="btn btn-primary">
    </div>
    <div class="content w-50 p-3 m-auto" style="background-color: bisque;">
        <form action="" method="post">
            <label for="" class="mt-2 mb-2">Username</label>
            <input type="text" name="txt-name" id="" class="form-control" placeholder="Username">
            <label for="" class="mt-2 mb-2">Gender</label>
            <input type="text" name="txt-gender" id="" class="form-control" placeholder="gender">
            <label for="" class="mt-2 mb-2">Password</label>
            <input type="password" name="txt-pass" id="" class="form-control" placeholder="password">
            <label for="" class="mt-2 mb-2">Email</label>
            <input type="email" name="txt-email" id="" class="form-control" placeholder="Example@gmail.com">
            <label for="" class="mt-2 mb-2">Telephone</label>
            <input type="text" name="txt-tel" id="" class="form-control" placeholder="0264666545">
            <input type="submit" name="btn-submit" value="Register" class="btn btn-danger mt-2">
        </form>
    </div>
</body>
</html>
<?php
    if(isset($_POST['btn-submit'])){
        $name    = $_POST['txt-name'];
        $gender  = $_POST['txt-gender'];
        $pass   = $_POST['txt-pass'];
        $email  = $_POST['txt-email'];
        $tel    = $_POST['txt-tel'];
        $sql    = "INSERT INTO `tbl_register`(`name`, `gender`, `password`, `email`, `phone`) VALUES ('$name','$gender','$pass','$email','$tel')";
        $rs     = $cn->query($sql);
    }
?>