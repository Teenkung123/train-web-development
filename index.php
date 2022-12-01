<?php 

$sql = "SELECT * FROM product ORDER BY id DESC LIMIT 10"

?>


<html>
    <header>
        <title>หน้าหลัก</title>
    </header>
    <?php
    include 'core/main/structure/header.php';
    ?>
    <style>
        body {
            background-color: efefef;
        }
        .box {
            position: relative;
            background-color: ffffff;
            border-radius: 20px;
            margin: auto;
            margin-top: 100px;
            width: 90%;
            height: auto;
        }
    </style>

    <body>
        <div class="box">
            <h1 style="text-align: center; padding-top: 15px;">สินค้าใหม่</h1>
            <hr style="border: 3px">

        </div>

    </body>
</html>