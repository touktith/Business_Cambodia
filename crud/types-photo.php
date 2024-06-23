<?php 
include("../admin2/config/connection.php");
?>
<!-- insert data -->
<?php
    if(isset($_POST['btn-upload'])){
        $type_logo      = $_POST['txt-type'];
        $photo          = $_FILES['txt-photo']['name'];
        $ran_photo      = rand(111,999).'-'.$photo;
        $path_photo     = "../upload/".$ran_photo;
        move_uploaded_file($_FILES['txt-photo']['tmp_name'],$path_photo);
        $sql            = "INSERT INTO `tbl_types_photo`(`photo`, `type`) VALUES('$ran_photo','$type_logo')";
        $rs             = $cn->query($sql);
        if($rs == true){
            echo "Success";
        }else{
            echo "Error";
        }
      

    }
    // insert data 
    // update data
    if(isset($_POST['btn-update'])){
        $id             = $_POST['txt-id'];
        $type_logo      = $_POST['txt-type'];
        $tmp            = $_POST['txt-tmp'];
        $photo          = $_FILES['txt-photo']['name'];
        $ran_photo      = rand(111,9999).'-'.$photo;
        $path_photo     = "../upload/".$ran_photo;
        if(empty($photo)){
            $sql            = "UPDATE tbl_types_photo SET photo='$tmp',type='$type_logo' WHERE id = $id ";
            $rs             = $cn->query($sql);

        }else{
            $sql            = "UPDATE tbl_types_photo SET photo='$ran_photo',type='$type_logo' WHERE id = $id ";
            $rs             = $cn->query($sql);
            move_uploaded_file($_FILES['txt-photo']['tmp_name'],$path_photo);
        }

    }

    // update data
    // Delete data
    if(isset($_POST['btn-delete'])){
        $id     = $_POST['txt-id'];
        $sql    = "DELETE FROM tbl_types_photo WHERE id = $id";
        $rs     = $cn->query($sql);
        if($rs == true){
            echo "Success";
        }else{
            echo "Error";
        }
    }

    // Delete data
?>