<?php include("../admin2/config/connection.php") ?>
<div class="menu-left">
        <div class="top">
            <div class="logo">
                <!-- <img src="https://via.placeholder.com/255x200" alt=""> -->
                <?php
                    $sql        = "SELECT * FROM tbl_types_photo WHERE type = 'Logo' ";
                    $rs         = $cn->query($sql);
                    if($rs->num_rows > 0){
                        while($row = $rs->fetch_array()){
                            ?>
                                <img src="../upload/<?php echo $row['photo']; ?>" alt="">
                            <?php
                        }
                    }
                ?>
            </div>
            <div class="title-business">
                <div class="top">
                    <small>Business</small>
                </div>
                <div class="bottom">
                    <p>Cambodia</p>
                </div>
            </div>
        </div>
        <form action="search.php" method="get">
            <input class="search" type="text" name="result-search">
            <button class="btn btn-primary" type="submit" style="position: absolute; top:91px;left:195px;">Search</button>
        </form>
        <ul>
            <li class="active"><a href="index.php">ទំព័រដើម</a></li>
            <li><a href="layout1.php">ហរិញ្ញវត្ថុ</a></li>
            <li><a href="layout2.php">ចាប់ផ្តើមអាជីវកម្ម</a></li>
            <li><a href="layout3.php">អចលនទ្រព្យ</a></li>
            <li><a href="layout4.php">ភាពជាអ្នកដឹកនាំ</a></li>
            <li><a href="layout5.php">កំពូលអ្នកលក់</a></li>
            <li><a href="layout6.php">មុខរបរបច្ចេកវិទ្យា</a></li>
            <li><a href="layout7.php">ព័ត៏មានថ្មីៗ</a></li>
            <li><a href="layout8.php">អត្ថបទ</a></li>
            <li><a href="layout9.php">របាយការណ៍</a></li>
            <li><a href="layout10.php">ពិព័រណ័មុខរបរ2022</a></li>
            <li><a href="layout11.php">មុខរបរកសិកម្ម</a></li>
        </ul>
    </div>
