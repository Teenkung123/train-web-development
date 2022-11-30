<html>
    <head>
        <style>
            body {
                margin: 0;
            }

            .headerbox {
                background-color: darkorange;
                overflow: hidden;   
                
            }

            .headerbox a {
                float: right;
                text-align: center;
                color: white;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 17px;
            }

            .headerbox a:hover {
                background-color: white;
                color: black;
            }

            .headerbox a:active {
                background-color: white;
                color: black;
            }

            .searchbar {
                margin-left: 35%;
                width: 30%;
                height: 30px;
                margin-top: 10px;
            }

            .searchbutton {
                height: 23px;
                margin-left: -60px;
            }
        </style>
    </head>
    <body>
        <div class="headerbox">
            <?php
            session_start();
            if (!isset($_SESSION['login'])) {
                echo '<a href="login.php">เข้าสู่ระบบ</a>';
            }
            ?>
            <a href="index.php">หน้าหลัก</a>
            <form method="POST" target="_blank" action="search.php">
                <input type="text" class="searchbar">
                <button type="submit" class="searchbutton">ค้นหา</button>
            </form>
        </div>
    </body>
</html>
