<?php include("../admin2/config/connection.php"); ?>
<!-- Insert data -->
    <?php
        if(isset($_POST['btn-save'])){
            $title      = $_POST['txt-title'];
            $date       = $_POST['txt-date'];
            $publisher  = $_POST['txt-publisher'];
            $detail1    = $_POST['txt-detail1'];
            $detail2    = $_POST['txt-detail2'];
            $type       = $_POST['txt-type'];
            // file name
            $file1      = $_FILES['txt-file1']['name'];
            $file2      = $_FILES['txt-file2']['name'];
            $file3      = $_FILES['txt-file3']['name'];
            $file4      = $_FILES['txt-file4']['name'];
            $file5      = $_FILES['txt-file5']['name'];
            // Random file
            $image1      = rand(111,999).'-'.$file1;
            $image2      = rand(111,999).'-'.$file2;
            $image3      = rand(111,999).'-'.$file3;
            $image4      = rand(111,999).'-'.$file4;
            $image5      = rand(111,999).'-'.$file5;
            // path photo
            $path1      = "../news_image/".$image1;
            $path2      = "../news_image/".$image2;
            $path3      = "../news_image/".$image3;
            $path4      = "../news_image/".$image4;
            $path5      = "../news_image/".$image5;
            // move file upload
            move_uploaded_file($_FILES['txt-file1']['tmp_name'],$path1);
            move_uploaded_file($_FILES['txt-file2']['tmp_name'],$path2);
            move_uploaded_file($_FILES['txt-file3']['tmp_name'],$path3);
            move_uploaded_file($_FILES['txt-file4']['tmp_name'],$path4);
            move_uploaded_file($_FILES['txt-file5']['tmp_name'],$path5);
            $sql        = "INSERT INTO `tbl_news` (`title`, `date`, `publisher`, `title_detail1`, `title_detail2`, `thumnail_card`, `thumnail_detail1`, `thumnail_detail2`, `thumnail_detail3`, `thumnail_detail4`, `type`)
             VALUES('$title','$date','$publisher','$detail1','$detail2','$image1','$image2','$image3','$image4','$image5','$type')";
             $rs        = $cn->query($sql);
             if($rs==true){
                echo "Sucess";

             }else{
                echo "Error";
             }
        }
    ?>
<!-- Insert data -->
<!-- Delete Data -->
        <?php
            if(isset($_POST['btn-delete'])){
                $id     = $_POST['txt-id'];
                $sql        = "DELETE FROM tbl_news WHERE id = $id";
                $cn->query($sql);
                
            }
        ?>
<!-- Delete Data -->
<!-- Update data -->
    <?php 
        if(isset($_POST['btn-update'])){
            $id         = $_POST['txt-id'];
            $title      = $_POST['txt-title'];
            $date       = $_POST['txt-date'];
            $publisher  = $_POST['txt-publisher'];
            $detail1    = $_POST['txt-detail1'];
            $detail2    = $_POST['txt-detail2'];
            $type       = $_POST['txt-type'];
            // file name
            $file1      = $_FILES['txt-file1']['name'];
            $file2      = $_FILES['txt-file2']['name'];
            $file3      = $_FILES['txt-file3']['name'];
            $file4      = $_FILES['txt-file4']['name'];
            $file5      = $_FILES['txt-file5']['name'];
            // Random file
            $image1      = rand(111,999).'-'.$file1;
            $image2      = rand(111,999).'-'.$file2;
            $image3      = rand(111,999).'-'.$file3;
            $image4      = rand(111,999).'-'.$file4;
            $image5      = rand(111,999).'-'.$file5;
            // path photo
            $path1      = "../news_image/".$image1;
            $path2      = "../news_image/".$image2;
            $path3      = "../news_image/".$image3;
            $path4      = "../news_image/".$image4;
            $path5      = "../news_image/".$image5;
            // file update
            $tmp1       = $_POST['txt-tmp1'];
            $tmp2       = $_POST['txt-tmp2'];
            $tmp3       = $_POST['txt-tmp3'];
            $tmp4       = $_POST['txt-tmp4'];
            $tmp5       = $_POST['txt-tmp5'];
            if(empty($file1)){
                $sql        = "UPDATE `tbl_news` SET `title`='$title',`date`='$date',
                `publisher`='$publisher',`title_detail1`='$detail1',`title_detail2`='$detail2',`thumnail_card`='$tmp1',
                `thumnail_detail1`='$tmp2',`thumnail_detail2`='$tmp3',`thumnail_detail3`='$tmp4',
                `thumnail_detail4`='$tmp5',`type`='$type' WHERE id = $id";
                $cn->query($sql);

            }else if(empty($file2)){
                $sql        = "UPDATE `tbl_news` SET `title`='$title',`date`='$date',
                `publisher`='$publisher',`title_detail1`='$detail1',`title_detail2`='$detail2',`thumnail_card`='$tmp1',
                `thumnail_detail1`='$tmp2',`thumnail_detail2`='$tmp3',`thumnail_detail3`='$tmp4',
                `thumnail_detail4`='$tmp5',`type`='$type' WHERE id = $id";
                $cn->query($sql);
            }else if(empty($file3)){
                $sql        = "UPDATE `tbl_news` SET `title`='$title',`date`='$date',
                `publisher`='$publisher',`title_detail1`='$detail1',`title_detail2`='$detail2',`thumnail_card`='$tmp1',
                `thumnail_detail1`='$tmp2',`thumnail_detail2`='$tmp3',`thumnail_detail3`='$tmp4',
                `thumnail_detail4`='$tmp5',`type`='$type' WHERE id = $id";
                $cn->query($sql);
            }else if(empty($file4)){
                $sql        = "UPDATE `tbl_news` SET `title`='$title',`date`='$date',
                `publisher`='$publisher',`title_detail1`='$detail1',`title_detail2`='$detail2',`thumnail_card`='$tmp1',
                `thumnail_detail1`='$tmp2',`thumnail_detail2`='$tmp3',`thumnail_detail3`='$tmp4',
                `thumnail_detail4`='$tmp5',`type`='$type' WHERE id = $id";
                $cn->query($sql);
            }else if(empty($file5)){
                $sql        = "UPDATE `tbl_news` SET `title`='$title',`date`='$date',
                `publisher`='$publisher',`title_detail1`='$detail1',`title_detail2`='$detail2',`thumnail_card`='$tmp1',
                `thumnail_detail1`='$tmp2',`thumnail_detail2`='$tmp3',`thumnail_detail3`='$tmp4',
                `thumnail_detail4`='$tmp5',`type`='$type' WHERE id = $id";
                $cn->query($sql);
            }else{
                $sql        = "UPDATE `tbl_news` SET `title`='$title',`date`='$date',
                `publisher`='$publisher',`title_detail1`='$detail1',`title_detail2`='$detail2',`thumnail_card`='$image1',
                `thumnail_detail1`='$image2',`thumnail_detail2`='$image3',`thumnail_detail3`='$image4',
                `thumnail_detail4`='$image5',`type`='$type' WHERE id = $id";
                 $rs = $cn->query($sql);
                 if($rs==true){
                     // move file upload
                     move_uploaded_file($_FILES['txt-file1']['tmp_name'],$path1);
                     move_uploaded_file($_FILES['txt-file2']['tmp_name'],$path2);
                     move_uploaded_file($_FILES['txt-file3']['tmp_name'],$path3);
                     move_uploaded_file($_FILES['txt-file4']['tmp_name'],$path4);
                     move_uploaded_file($_FILES['txt-file5']['tmp_name'],$path5);

                 }
            }

        }
    
    ?>
<!-- Update data -->