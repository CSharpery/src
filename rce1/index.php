<!DOCTYPE  html>
<html  lang="en">
<head class="table-right">
    <style>
        .table-right  {
            margin-left:  550px;
        }
    </style>
    <meta  charset="UTF-8">
    <title>Login</title>
</head>
<body>
<h1 class="table-right">登录</h1>
<form  action="" id="login_Form"  name="logins"  method="post" class="table-right" onsubmit="return validate();">
    <label>
        <input  type="text"  name="username"  placeholder="Username">
    </label><br>
    <label>
        <input  type="password"  name="password"  placeholder="Password">
    </label><br>
    <label>
        <input  type="text"  name="vcode" class="vcode" style="width: 50px">
    </label>
    <label><input type="text" onclick="createCode()" readonly="readonly" id="checkCode" class="unchanged" style="width: 50px" /></label><br />
    <input  type="submit"  value="登录">
</form>
<div  id="output" class="table-right" ></div>
<!--这是你想要的吗?-->
<!--dXNlcg==-->
<!--MTIzNDU2-->
<script language="javascript" type="text/javascript">
    var code;
    function createCode() {
        code = "";
        var codeLength = 4;
        var checkCode = document.getElementById("checkCode");
        var selectChar = new Array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9,'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');//所有候选组成验证码的字符，当然也可以用中文的

        for (var i = 0; i < codeLength; i++) {
            var charIndex = Math.floor(Math.random() * 36);
            code += selectChar[charIndex];
        }
        if (checkCode) {
            checkCode.className = "code";
            checkCode.value = code;
        }
    }

    function validate() {
        var inputCode = document.querySelector('#login_Form .vcode').value;
        if (inputCode.length <= 0) {
            alert("请输入验证码！");
            return false;
        } else if (inputCode.toUpperCase() != code) {
            alert("验证码输入错误！");
            createCode();
            return false;
        }
        else {
            return true;
        }
    }


    createCode();
</script>
</body>
</html>
<?php
if  ($_SERVER['REQUEST_METHOD']  ===  'POST' && isset($_POST['username'])  &&  isset($_POST['password']) )  {
    $username  =  $_POST['username'];
    $password  =  $_POST['password'];
    if  ($username  ===  "user"  and  $password  ===  "123456")  {
        header('location: ./flag.php');
    }else{
        echo '<script>alert("账户或密码错误")</script>';
    }
}else{
    exit();
}
