<?php include("../admin2/config/connection.php"); 
$title_search = $_GET['result-search'];
?>
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
        <div class="container-fluid mt-5 con-3" >
                <div class="row">
                <?php
             $sql    = "SELECT * FROM tbl_news WHERE title LIKE '%".$title_search."%'";
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
       ?>      
                </div>
            
        </div>
       
    </div>
    <!--@@@@ CONTENT RIGHT @@@@-->
</div>
    <!-- @@@@ Footer @@@@ -->
    <?php
        include("../include/footer.php");
    ?>
    <!-- @@@@ Footer @@@@ -->
</body>
</html>