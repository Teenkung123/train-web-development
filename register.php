<html>
    <style>
        body {
            background-color: eeeeee;
            vertical-align: middle;
            align-items: center;
            margin-top: 15%;
        }
        .registerform {
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
        .registerbtn {
            color: white;
            background-color: 00cc00;
            height: 40px;
            width:90%;
        }

        .registerbtn button:hover {
            background-color: 00aa00;
        }
    </style>
    <body>
        <div class="registerform">
            <h2 style="text-align: center; padding-top: 30px;">สร้างบัญชี</h2>
            <hr>
            <br>
            <div>
                <label style="margin-left: 5%">ชื่อผู้ใช้</label><br>
                <input name="username" id="username" type="text" class="inputbar" style="height: 30px; width:90%; margin-bottom: 10px;">
            </div>
            <div>
                <label style="margin-left: 5%">อีเมล</label><br>
                <input name="email" id="email" type="text" class="inputbar" style="height: 30px; width:90%; margin-bottom: 10px;">
            </div>
            <div>
                <label style="margin-left: 5%;">รหัสผ่าน</label><br>
                <input name="password" id="password" type="password" class="inputbar" style="height: 30px; width:90%; margin-bottom: 10px;">
            </div>
            <div>
                <label style="margin-left: 5%;">ยืนยันรหัสผ่าน</label><br>
                <input name="confirm-password" id="confirm-password" type="password" class="inputbar" style="height: 30px; width:90%; margin-bottom: 10px;">
            </div>
            <div style="padding-bottom: 30px; margin-top: 20px;">
                <button onclick="sendRequest()" class="inputbar registerbtn" >สร้างบัญชี</button>
            </div>
        </div>
    </body>
</html>

<script>

    function sendRequest() {

        let username = document.getElementById("username").value;
        let password = document.getElementById("password").value;
        let email = document.getElementById("email").value;
        let confirm_password = document.getElementById("confirm-password").value;
        
        if (username == "" || password == "" || confirm_password == "" || email == "") {
            alert("กรุณากรอกข้อมูลให้ครบ");
        }

        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if (xhttp.responseText != "") {
                    if (xhttp.responseText == "S") {
                        
                        alert("สร้างบัญชีสำเร็จ");
                        window.location.href = "index.php";

                    } else {
                        alert(xhttp.responseText);
                    }
                }
            }
        };
        xhttp.open("POST", "core/main/sql/register.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("username="+username+"&email="+email+"&password="+password);

        
    }

</script>