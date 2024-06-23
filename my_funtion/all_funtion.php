i<?php include("../admin2/config/connection.php"); ?>
<?php
    // function layout1
    function layout1(){
        global $cn;
        $sql    = "SELECT * FROM tbl_news WHERE type='ហរិញ្ញវត្ថុ' ORDER BY id DESC LIMIT 4";
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
    //function layout1

       // function layout_detial
    function layout_detial(){
        global $cn;
        $sql    = "SELECT * FROM tbl_news WHERE id>id LIMIT 4";
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
    //function layout_detial

    // function layout1_1
    function layout1_1(){
        global $cn;
        $sql    = "SELECT * FROM tbl_news WHERE type='ហរិញ្ញវត្ថុ' ORDER BY id DESC";
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
                                            
                                            <small style="float: right; padding-left: 5px;margin-top: -2px;"><?php $row['viewers']; ?></small>
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
    // function layout1_1
    // function layout2
            function layout2(){
                global $cn;
                $sql    = "SELECT * FROM tbl_news WHERE type = 'ចាប់ផ្តើមអាជីវកម្ម' ORDER BY id DESC LIMIT 4";
                $rs     = $cn->query($sql);
                if($rs->num_rows > 0){
                    while($row = $rs->fetch_array()){
                        ?>
                            <div class="col-3" style=" height: 300px;padding-left: 0;">
                                <div class="card1">
                                    <a href="../html/detail_news.php?id='<?php echo $row[0]; ?>'" style="text-decoration: none; color:black">
                                        <img src="../news_image/<?php echo $row[6]; ?>" alt="">
                                        <div class="box-title">
                                            <div class="box-decription">
                                                <span ><?php echo $row[2]; ?></span>
                                                <strong><p><?php echo $row[1]; ?></p></strong>
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
    // function layout2
    // function layout2_2
            function layout2_2(){
                global $cn;
                $sql    = "SELECT * FROM tbl_news WHERE type = 'ចាប់ផ្តើមអាជីវកម្ម' ORDER BY id DESC";
                $rs     = $cn->query($sql);
                if($rs->num_rows > 0){
                    while($row = $rs->fetch_array()){
                        ?>
                            <div class="col-3" style=" height: 300px;padding-left: 0;">
                                <div class="card1">
                                    <a href="../html/detail_news.php?id='<?php echo $row[0]; ?>'" style="text-decoration: none;color:black">
                                        <img src="../news_image/<?php echo $row[6]; ?>" alt="">
                                        <div class="box-title">
                                            <div class="box-decription">
                                                <span ><?php echo $row[2]; ?></span>
                                                <strong><p><?php echo $row[1]; ?></p></strong>
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
    // function layout2_2
    // function layout3
    function layout3(){
        global $cn;
        $sql    = "SELECT * FROM tbl_news WHERE type='អចលនទ្រព្យ' ORDER BY id DESC LIMIT 4";
        $rs     = $cn->query($sql);
        if($rs->num_rows > 0){
            while($row=$rs->fetch_array()){
                ?>
                    <div class="col-3" style=" height: 300px;padding-left: 0;">
                        <div class="card1">
                            <a href="../html/detail_news.php?id='<?php echo $row[0]; ?>'" style="text-decoration: none;color:black">
                                <img src="../news_image/<?php echo $row[6]; ?>" alt="">
                                <div class="box-title">
                                    <div class="box-decription">
                                        <span ><?php echo $row[2]; ?></span>
                                        <strong><p><?php echo $row[1]; ?></p></strong>
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
    // function layout3
    // function layout3_3
    function layout3_3(){
        global $cn;
        $sql    = "SELECT * FROM tbl_news WHERE type='អចលនទ្រព្យ' ORDER BY id DESC";
        $rs     = $cn->query($sql);
        if($rs->num_rows > 0){
            while($row=$rs->fetch_array()){
                ?>
                    <div class="col-3" style=" height: 300px;padding-left: 0;">
                        <div class="card1">
                            <a href="../html/detail_news.php?id='<?php echo $row[0]; ?>'" style="text-decoration: none;color:black;">
                                <img src="../news_image/<?php echo $row[6]; ?>" alt="">
                                <div class="box-title">
                                    <div class="box-decription">
                                        <span ><?php echo $row[2]; ?></span>
                                        <strong><p><?php echo $row[1]; ?></p></strong>
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
    // function layout3_3
    // function layout4
        function layout4(){
            global $cn;
            $sql       = "SELECT * FROM tbl_news WHERE type='ភាពជាអ្នកដឹកនាំ' ORDER BY id DESC LIMIT 4";
            $rs        = $cn->query($sql);
            if($rs->num_rows > 0){
                while($row = $rs->fetch_array()){
                    ?>
                        <div class="col-3" style=" height: 300px;padding-left: 0;">
                            <div class="card1">
                                <a href="../html/detail_news.php?id='<?php echo $row[0]; ?>'" style="text-decoration: none;color:black">
                                    <img src="../news_image/<?php echo $row[6]; ?>" alt="">
                                    <div class="box-title">
                                        <div class="box-decription">
                                            <span ><?php echo $row[2]; ?></span>
                                            <strong><p><?php echo $row[1]; ?> </p></strong>
                                            <div class="left-right">
                                                <small style="margin-top: -2px; position: absolute;"><?php echo $row[3]; ?></small>
                                                
                                                <small style="float: right; padding-left: 5px;margin-top: -2px;"><?php echo $row['viewers'] ?></small>
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
    // function layout4
    // function layout4_4
        function layout4_4(){
            global $cn;
            $sql       = "SELECT * FROM tbl_news WHERE type='ភាពជាអ្នកដឹកនាំ' ORDER BY id DESC LIMIT 4";
            $rs        = $cn->query($sql);
            if($rs->num_rows > 0){
                while($row = $rs->fetch_array()){
                    ?>
                        <div class="col-3" style=" height: 300px;padding-left: 0;">
                            <div class="card1">
                                <a href="../html/detail_news.php?id='<?php echo $row[0]; ?>'" style="text-decoration: none;color:black;">
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
    // function layout4_4
    // function layout5
        function layout5(){
            global $cn;
            $sql        = "SELECT * FROM tbl_news WHERE type='កំពូលអ្នកលក់' ORDER BY id DESC LIMIT 4";
            $rs         = $cn->query($sql);
            if($rs->num_rows > 0){
                while($row=$rs->fetch_array()){
                    ?>
                        <div class="col-3" style=" height: 300px;padding-left: 0;">
                            <div class="card1">
                                <a href="../html/detail_news.php?id='<?php echo $row[0]; ?>'" style="text-decoration: none;color:black;">
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
    // function layout5
    // function layout5_5
        function layout5_5(){
            global $cn;
            $sql        = "SELECT * FROM tbl_news WHERE type='កំពូលអ្នកលក់' ORDER BY id DESC";
            $rs         = $cn->query($sql);
            if($rs->num_rows > 0){
                while($row=$rs->fetch_array()){
                    ?>
                        <div class="col-3" style=" height: 300px;padding-left: 0;">
                            <div class="card1">
                                <a href="../html/detail_news.php?id='<?php echo $row[0]; ?>'" style="text-decoration: none;color:black;">
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
    // function layout5_5
    // function layout6
        function layout6(){
            global $cn;
            $sql        = "SELECT * FROM tbl_news WHERE type='មុខរបរបច្ចេកវិទ្យា' ORDER BY id DESC LIMIT 4";
                    $rs         = $cn->query($sql);
                    if($rs->num_rows > 0){
                        while($row=$rs->fetch_array()){
                            ?>
                                <div class="col-3" style=" height: 300px;padding-left: 0;">
                                    <div class="card1">
                                        <a href="../html/detail_news.php?id='<?php echo $row[0]; ?>'" style="text-decoration: none;color:black;">
                                            <img src="../news_image/<?php echo $row[6]; ?>" alt="">
                                            <div class="box-title">
                                                <div class="box-decription">
                                                    <span ><?php echo $row[2]; ?></span>
                                                    <strong><p><?php echo $row[1]; ?></p></strong>
                                                    <div class="left-right">
                                                        <small style="margin-top: -2px; position: absolute;"><?php echo $row[3]; ?></small>
                                                        
                                                        <small style="float: right; padding-left: 5px;margin-top: -2px;"><?php echo $row['viewers']; ?></small>
                                                        <i  style="float: right; opacity: 0.8;font-size: 14px ;" class="fa-solid fa-eye"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </a>
                                </div>

                            <?php
                        }
                    }
        }
    // function layout6
    // function layout6_6
        function layout6_6(){
            global $cn;
            $sql        = "SELECT * FROM tbl_news WHERE type='មុខរបរបច្ចេកវិទ្យា' ORDER BY id DESC";
                    $rs         = $cn->query($sql);
                    if($rs->num_rows > 0){
                        while($row=$rs->fetch_array()){
                            ?>
                                <div class="col-3" style=" height: 300px;padding-left: 0;">
                                    <div class="card1">
                                        <a href="../html/detail_news.php?id='<?php echo $row[0]; ?>'" style="text-decoration: none;color:black;">
                                            <img src="../news_image/<?php echo $row[6]; ?>" alt="">
                                            <div class="box-title">
                                                <div class="box-decription">
                                                    <span ><?php echo $row[2]; ?></span>
                                                    <strong><p><?php echo $row[1]; ?></p></strong>
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
    // function layout6_6
    // function layout7
        function layout7(){
            global $cn;
            $sql        = "SELECT * FROM tbl_news WHERE type='ព័ត៏មានថ្មីៗ' ORDER BY id DESC LIMIT 4";
            $rs         = $cn->query($sql);
            if($rs->num_rows > 0){
                while($row = $rs->fetch_array()){
                    ?>
                        <div class="col-3" style=" height: 300px;padding-left: 0;">
                            <div class="card1">
                                <a href="../html/detail_news.php?id='<?php echo $row[0]; ?>'" style="text-decoration: none;color:black;">
                                    <img src="../news_image/<?php echo $row[6]; ?>" alt="">
                                    <div class="box-title">
                                        <div class="box-decription">
                                            <span ><?php echo $row[2]; ?></span>
                                            <strong><p><?php echo $row[1]; ?></p></strong>
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
    // function layout7_7
        function layout7_7(){
            global $cn;
            $sql        = "SELECT * FROM tbl_news WHERE type='ព័ត៏មានថ្មីៗ' ORDER BY id DESC";
            $rs         = $cn->query($sql);
            if($rs->num_rows > 0){
                while($row = $rs->fetch_array()){
                    ?>
                        <div class="col-3" style=" height: 300px;padding-left: 0;">
                            <div class="card1">
                                <a href="../html/detail_news.php?id='<?php echo $row[0]; ?>'" style="text-decoration: none;color:black;">
                                    <img src="../news_image/<?php echo $row[6]; ?>" alt="">
                                    <div class="box-title">
                                        <div class="box-decription">
                                            <span ><?php echo $row[2]; ?></span>
                                            <strong><p><?php echo $row[1]; ?></p></strong>
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
    // function layout7_7
    // function layout8
        function layout8(){
            global $cn;
            $sql        = "SELECT * FROM tbl_news WHERE type='អត្ថបទ' ORDER BY id DESC LIMIT 4";
            $rs         = $cn->query($sql);
            if($rs->num_rows > 0){
                while($row=$rs->fetch_array()){
                    ?>
                    <div class="col-3" style=" height: 300px;padding-left: 0;">
                        <div class="card1">
                            <a href="../html/detail_news.php?id='<?php echo $row[0]; ?>'" style="text-decoration: none;color:black;">
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
    // function layout8
    // function layout8_8
        function layout8_8(){
            global $cn;
            $sql        = "SELECT * FROM tbl_news WHERE type='អត្ថបទ' ORDER BY id DESC";
            $rs         = $cn->query($sql);
            if($rs->num_rows > 0){
                while($row=$rs->fetch_array()){
                    ?>
                    <div class="col-3" style=" height: 300px;padding-left: 0;">
                        <div class="card1">
                            <a href="../html/detail_news.php?id='<?php echo $row[0]; ?>'" style="text-decoration: none;color:black;">
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
    // function layout8_8
    // function layout9
        function layout9(){
            global $cn;
            $sql        = "SELECT * FROM tbl_news WHERE type='របាយការណ៍' ORDER BY id DESC LIMIT 4";
            $rs         = $cn->query($sql);
            if($rs->num_rows > 0){
                while($row=$rs->fetch_array()){
                    ?>
                        <div class="col-3" style=" height: 300px;padding-left: 0;">
                            <div class="card1">
                                <a href="../html/detail_news.php?id='<?php echo $row[0]; ?>'" style="text-decoration: none;color:black;">
                                    <img src="../news_image/<?php echo $row[6]; ?>" alt="">
                                    <div class="box-title">
                                        <div class="box-decription">
                                            <span ><?php echo $row[2]; ?></span>
                                            <strong><p><?php echo $row[1]; ?></p></strong>
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
    // function layout9
    // function layout9_9
        function layout9_9(){
            global $cn;
            $sql        = "SELECT * FROM tbl_news WHERE type='របាយការណ៍' ORDER BY id DESC";
            $rs         = $cn->query($sql);
            if($rs->num_rows > 0){
                while($row=$rs->fetch_array()){
                    ?>
                        <div class="col-3" style=" height: 300px;padding-left: 0;">
                            <div class="card1">
                                <a href="../html/detail_news.php" style="text-decoration: none;color:black;">
                                    <img src="../news_image/<?php echo $row[6]; ?>" alt="">
                                    <div class="box-title">
                                        <div class="box-decription">
                                            <span ><?php echo $row[2]; ?></span>
                                            <strong><p><?php echo $row[1]; ?></p></strong>
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
    // function layout9_9
        // function layout10
            function layout10(){
                global $cn;
                $sql    = "SELECT * FROM tbl_news WHERE type='ពិព័រណ័មុខរបរ2022'ORDER BY id DESC LIMIT 4";
                $rs     = $cn->query($sql);
                if($rs->num_rows > 0){
                    while($row=$rs->fetch_array()){
                        ?>
                        <div class="col-3" style=" height: 300px;padding-left: 0;">
                            <div class="card1">
                                <a href="../html/detail_news.php?id='<?php echo $row[0]; ?>'" style="text-decoration: none;color:black;">
                                    <img src="../news_image/<?php echo $row[6]; ?>" alt="">
                                    <div class="box-title">
                                        <div class="box-decription">
                                            <span ><?php echo $row[2]; ?></span>
                                            <strong><p><?php echo $row[1]; ?></p></strong>
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
        // function layout10
        // function layout10_10
            function layout10_10(){
                global $cn;
                $sql    = "SELECT * FROM tbl_news WHERE type='ពិព័រណ័មុខរបរ2022' ORDER BY id";
                $rs     = $cn->query($sql);
                if($rs->num_rows > 0){
                    while($row=$rs->fetch_array()){
                        ?>
                        <div class="col-3" style=" height: 300px;padding-left: 0;">
                            <div class="card1">
                                <a href="../html/detail_news.php?id='<?php echo $row[0]; ?>'" style="text-decoration: none;color:black;">
                                    <img src="../news_image/<?php echo $row[6]; ?>" alt="">
                                    <div class="box-title">
                                        <div class="box-decription">
                                            <span ><?php echo $row[2]; ?></span>
                                            <strong><p><?php echo $row[1]; ?></p></strong>
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
        // function layout10_10
        // function layout11
            function layout11(){
                global $cn;
                $sql    = "SELECT * FROM tbl_news WHERE type='មុខរបរកសិកម្ម' ORDER BY id DESC LIMIT 4";
                $rs     = $cn->query($sql);
                if($rs->num_rows > 0){
                    while($row=$rs->fetch_array()){
                        ?>
                        <div class="col-3" style=" height: 300px;padding-left: 0;">
                            <div class="card1">
                                <a href="../html/detail_news.php?id='<?php echo $row[0]; ?>'" style="text-decoration: none;color:black;">
                                    <img src="../news_image/<?php echo $row[6]; ?>" alt="">
                                    <div class="box-title">
                                        <div class="box-decription">
                                            <span ><?php echo $row[2]; ?></span>
                                            <strong><p><?php echo $row[1]; ?></p></strong>
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
        // function layout11
        // function layout11_11
            function layout11_11(){
                global $cn;
                $sql    = "SELECT * FROM tbl_news WHERE type='មុខរបរកសិកម្ម' ORDER BY id DESC LIMIT 4";
                $rs     = $cn->query($sql);
                if($rs->num_rows > 0){
                    while($row=$rs->fetch_array()){
                        ?>
                        <div class="col-3" style=" height: 300px;padding-left: 0;">
                            <div class="card1">
                                <a href="../html/detail_news.php?id='<?php echo $row[0]; ?>'" style="text-decoration: none;color:black;">
                                    <img src="../news_image/<?php echo $row[6]; ?>" alt="">
                                    <div class="box-title">
                                        <div class="box-decription">
                                            <span ><?php echo $row[2]; ?></span>
                                            <strong><p><?php echo $row[1]; ?></p></strong>
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
        // function layout11_11
    ?>
    