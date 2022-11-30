<html>
    <style>
        body {
            background-color: eeeeee;
            vertical-align: middle;
            align-items: center;
            margin-top: 20%;
        }
        .loginform {
            margin: auto;
            border-radius: 10px;
            border-color: black;
            background-color: ffffff;
            background-blend-mode: color;
            margin: auto;
            color: black;
            width: 20%;
        }
        .inputbar {
            border: none;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-left: 5%;
            box-sizing: border-box;
        }
        label {
            display: inline-block;
            margin: 0 5px;
            color: 777777;
        }
    </style>
    <body>
        <div class="loginform">
            <h2 style="text-align: center; padding-top: 30px;">Login</h2>
            <hr>
            <br>
            <div>
                <label style="margin-left: 5%">ชื่อผู้ใช้</label><br>
                <input name="username" id="username" type="text" class="inputbar" style="height: 30px; width:90%; margin-bottom: 30px;"><br>
            </div>
            <div>
                <label style="margin-left: 5%;">รหัสผ่าน</label><br>
                <input name="password" id="password" type="password" class="inputbar" style="height: 30px; width:90%;">
            </div>
            <div>
                <label style="margin-left: 5%;">ยังไม่มีบัญชี? <a href="register.php">สร้างบัญชี</a><label>
            </div>
            <div style="padding-bottom: 30px; margin-top: 10px;">
                <button onclick="sendRequest()" class="inputbar" style="color: white; background-color: 00aaff; height: 40px; width:90%;">Login</button>
            </div>
        </div>
    </body>
</html>

<script>

    function sendRequest() {

        let username = document.getElementById("username").value;
        let password = document.getElementById("password").value;

        if (username == "" || password == "") {
            alert("Please input your username and password");
        }

        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                xhttp.open("POST", "core/main/sql/login.php", true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send("username="+username+"&password="+password);
            }
        };

        
    }

</script>