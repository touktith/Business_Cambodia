<?php include("../admin2/config/connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/photo/logo.png" type="image/gif" sizes="16x16"> 
    <title>Business Cambodia</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--Link FontAwesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!--Link Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Exo+2&family=Hanuman&display=swap" rel="stylesheet"> 
    <!--Link Style CSS-->
    <style>
        .main{
            height:3000px;
        }
        .ads{
            width: 100%;
            height: 200px;
            margin-top: 10px;
            background-color: aqua;
            border-radius: 10px;
        }
        .box-detail{
            width: 60%;
            height: 450px;
            border-radius: 10px;
            margin: auto;
            margin-top: 30px;
            overflow: hidden;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
        }
        .box-detail .image{
            width: 100%;
            height: 65%;
        }
        .box-detail .image img{
            width: 100%;
            height: 100%;
        }
        .box-detail .detail{
            width: 100%;
            height: 35%;
            padding: 12px;
        }
        .box-detail .image-box{
            width: 100%;
            height: 100%;
        }
        .box-detail .image-box img{
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
    <!-- @@@@ RESPONSIVE @@@@ -->
    <div class="res-menu">
            <img src="https://via.placeholder.com/255x200" alt="">
       
            <i class="fa-solid fa-magnifying-glass"></i>
            <i class="fa-solid fa-bars"></i>

    </div>
    <!-- @@@@ RESPONSIVE @@@@ -->
   <div class="main">
     
       <!--@@@@ MENU LEFT @@@@-->

      <?php
        include("../include/menu-left.php");

      ?>
    <!--@@@@ MENU LEFT @@@@-->

    <!--@@@@ CONTENT RIGHT @@@@-->
        <div class="content-right">
            <!-- box-ads -->
            <div class="ads">
                <img src="" alt="">
                <?php
                    $sql = "SELECT * FROM tbl_types_photo";
                ?>
            </div>
            <!-- box-ads -->
            <!-- box-ads -->
            <div class="ads"></div>
            <!-- box-ads -->
            <!-- box-ads -->
            <div class="ads"></div>
            <!-- box-ads -->
            <!-- box-detail -->
            <?php
                $id         = $_GET['id'];
                $sql        = "SELECT * FROM tbl_news WHERE id =$id";
                $rs         = $cn->query($sql);


                $sql_viewer = "SELECT * FROM tbl_news WHERE id = $id";
                $res_viewer = $cn->query($sql_viewer);
                $row_viewers= mysqli_fetch_array($res_viewer);
                $viewers    = $row_viewers['viewers'];

                $sql_update  = "UPDATE `tbl_news` SET `viewers`= $viewers+1 WHERE id = $id";
                $result      = $cn->query($sql_update);


                if($rs->num_rows > 0){
                    while($row=$rs->fetch_array()){
                        ?>
                            <div class="box-detail">
                                <div class="image">
                                    <img src="../news_image/<?php echo $row[7]; ?>" alt="">
                                </div>
                                <div class="detail">
                                   <?php echo $row[4]; ?>
                                </div>
                            </div>
                            <!-- box-detail -->
                            <div class="box-detail">
                                <div class="image">
                                    <img src="../news_image/<?php echo $row[8]; ?>" alt="">
                                </div>
                                <div class="detail">
                                    <?php echo $row[5]; ?>
                                </div>
                            </div>
                            <!-- box-detail -->
                            <div class="box-detail">
                                <div class="image-box">
                                    <img src="../news_image/<?php echo $row[9]; ?>" alt="">
                                </div>
                            </div>
                            <!-- box-detail -->
                            <div class="box-detail">
                                <div class="image-box">
                                    <img src="../news_image/<?php echo $row[10]; ?>" alt="">
                                </div>
                                
                            </div>
                        <?php
                    }
                }
            ?>
            <!-- box-detail -->
            <!--Content card-->
        <div class="container-fluid mt-5 con-3">
            <div class="row">
                
            <?php

                     // function layout_detial
                    function layout_detial($id){
                        global $cn;
                        $sql    = "SELECT * FROM tbl_news WHERE id>$id LIMIT 4";
                        $rs     = $cn->query($sql);
                        if($rs->num_rows > 0){
                            while($row=$rs->fetch_array()){
                                ?>
                                    <div class="col-3" style=" height: 300px;padding-left: 0;margin-bottom:20px;">
                                        <div class="card1">
                                            <a href="../html/detail_news.php?id='<?php echo $row[0]; ?>'" style="text-decoration: none; color:black;">
                                                <img src="../news_image/<?php echo $row[6]; ?>" alt="">
                                                <div class="box-title">
                                                    <div class="box-decription">
                                                        <span ><?php echo $row[2]; ?></span>
                                                        <strong><p><?php echo $row[1]; ?> </p></strong>
                                                        <div class="left-right">
                                                            <small style="margin-top: -2px; position: absolute;"><?php echo $row[3]; ?></small>    
                                                            <small style="float: right; padding-left: 5px;margin-top: -2px;"><?php echo $row['viewers']; ?></small>
                                                            <i  style="float: right; opacity: 0.8;font-size: 14px ;" class="fa-solid fa-eye"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>

                                <?php
                            }
                        }
                    
                    }
                     layout_detial($_GET['id']);
                    //function layout_detial
                    
                    ?>

                
                   <!-- <div class="col-3" style=" height: 300px;padding-left: 0;">
                    <div class="card1">
                       <img src="https://via.placeholder.com/255x200" alt="">
                       <div class="box-title">
                           <div class="box-decription">
                               <span >September 7 2022</span>
                               <strong><p>ខេត្តមាសខេត្តពេជ្រ! ត្រឹមពេលខ្លី មានរោងចក្រជាង៥០០កន្លែង សម្រុកទៅវិនិយោគ បង្កើតការងារជាង៣០ម៉ឺននាក់ </p></strong>
                               <div class="left-right">
                                   <small style="margin-top: -2px; position: absolute;">An Sokwin</small>
                                   
                                   <small style="float: right; padding-left: 5px;margin-top: -2px;">12k</small>
                                   <i  style="float: right; opacity: 0.8;font-size: 14px ;" class="fa-solid fa-eye"></i>
                               </div>
                           </div>
                       </div>
                    </div>
                   </div> -->
            </div>
           
        </div>
        <!-- content-card -->
        </div>
        <!--@@@@ CONTENT RIGHT @@@@-->
    </div>
        
</div>
    <!-- @@@@ Footer @@@@ -->
    <?php
        include("../include/footer.php");
    ?>
    <!-- @@@@ Footer @@@@ -->
</body>
</html>
</body>
</html>