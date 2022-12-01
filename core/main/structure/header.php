<html>
    <head>
        <style>
            body {
                margin: 0;
            }

            .headerbox {
                background-color: darkorange;
                overflow: hidden;   
                position: fixed;
                width: 100%;
                height: 50px;
                margin-top: -100px;
            }

            .headerbox a {
                float: right;
                text-align: center;
                color: white;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 17px;
            }

            .headerbox p {
                text-align: center;
                color: white;
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
                margin-left: 32%;
                width: 30%;
                height: 30px;
                margin-top: 10px;
                border-radius: 5px;
                border-color: black;
                border: 2px solid;
                background-color: ffffff;
                background-blend-mode: color;
            }

            .searchbutton {
                height: 23px;
                margin-left: -60px;
                background-color: cccccc;
                border: 1px;
                border-radius: 5px;
            }

            .searchbutton button:hover {
                background-color: aaaaaa;
            }
        </style>
    </head>
    <body>
        <div class="headerbox">
            <?php
            session_start();
            if (!isset($_SESSION['login'])) {
                echo '<a href="login.php">เข้าสู่ระบบ</a>';
            } else {
                echo '<a onclick="logout()" href="index.php">ออกจากระบบ</a>';
                echo '<a href="cart.php">รถเข็น</a>';
            }
            ?>
            <a href="index.php">หน้าหลัก</a>
            <p style="float: left; margin-left: 20px;">ช๊อปเป้</p>
            <form method="POST" target="_blank" action="search.php">
                <input type="text" class="searchbar">
                <button type="submit" class="searchbutton">ค้นหา</button>
            </form>
        </div>
    </body>
</html>

<script>
    function logout() {
        let xhttp = new XMLHttpRequest();
        xhttp.open("GET", "core/main/sql/logout.php", true);
        xhttp.send();
    }

    function getCartSize() {
        let xhttp = new XMLHttpRequest();
        xhttp.open("GET", "core/main/sql/cartsize.php", true);
        xhttp.send();
    }
</script>
