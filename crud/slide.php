<?php include("../admin2/config/connection.php"); ?>
<!-- insert Data -->
    <?php
        if(isset($_POST['btn-upload'])){
            $title      = $_POST['txt-title'];
            $date       = $_POST['txt-date'];
            $btn        = $_POST['txt-btn-title'];
            $photo      = $_FILES['txt-photo']['name'];
            $image      = rand(111,999).'-'.$photo;
            $path       = "../upload/".$image;
            move_uploaded_file($_FILES['txt-photo']['tmp_name'],$path);
            $sql        = "INSERT INTO `tbl_slide`(`title`, `date`, `btn_title`, `photo`) VALUES ('$title','$date','$btn','$image')";
            $rs         = $cn->query($sql);
            if($rs == true){
                echo "Suucess";
            }else{
                echo "error";
            }
        }
    ?>
<!-- insert Data -->
<!-- Update data -->
        <?php
                if(isset($_POST['btn-edit'])){
                    $id         = $_POST['txt-id'];
                    $title      = $_POST['txt-title'];
                    $date       = $_POST['txt-date'];
                    $btn        = $_POST['txt-btn-title'];
                    $tmp        = $_POST['txt-tmp'];
                    $photo      = $_FILES['txt-photo']['name'];
                    $image      = rand(111,999).'-'.$photo;
                    $path       = "../upload/".$image;
                    if(empty($photo)){
                        $sql        = "UPDATE tbl_slide SET title='$title',date='$date',btn_title='$btn',photo='$tmp' WHERE id = $id";
                        $rs         = $cn->query($sql);
                        
                    }else{
                        $sql        = "UPDATE tbl_slide SET title='$title',date='$date',btn_title='$btn',photo='$image' WHERE id = $id";
                        $rs         = $cn->query($sql);
                        move_uploaded_file($_FILES['txt-photo']['tmp_name'],$path);
                    }
                }


        ?>
<!-- Update data -->
<!-- Delete Data -->
                <?php
                    if(isset($_POST['btn-delete'])){
                        $id     = $_POST['txt-id'];
                        $sql    = "DELETE FROM tbl_slide WHERE id=$id";
                        $rs     = $cn->query($sql);
                    }

                ?>
<!-- Delete Data -->