<!DOCTYPE  html>
<html  lang="en">
<head>
    <title>普通管理员后台</title>
    <style>
        /*  给表格添加一个向右的边距  */
        .table-right  {
            margin-left:  500px;  /*  您可以根据需要调整这个值  */
        }
        .submit-right{
            margin-left:  625px;
        }
    </style>
</head>
<body>
<h1 class="table-right">后台用户名单</h1>
<table  border="1" class="table-right">  <!--  border属性为表格添加边框，数字表示边框的宽度  -->
    <tr>  <!--  表格的第一行  -->
        <th>姓名</th>  <!--  表头单元格  -->
        <th>年龄</th>
        <th>职业</th>
        <th>爱好</th>
    </tr>
    <tr>  <!--  表格的第二行  -->
        <td>张三</td>  <!--  数据单元格  -->
        <td>30</td>
        <td>程序员</td>
        <td>打CTF</td>
    </tr>
    <tr>  <!--  表格的第三行  -->
        <td>李四</td>
        <td>25</td>
        <td>设计师</td>
        <td>打CTF</td>
    <tr>  <!--  表格的第四行  -->
        <td>王五</td>
        <td>18</td>
        <td>保安</td>
        <td>打CTF</td>
    </tr>
    <tr>  <!--  表格的第五行  -->
        <td>超级</td>
        <td>18</td>
        <td>管理员</td>
        <td>flag{</td>
    </tr>
</table>
</body>
<?php
if(isset($_GET["level"]) && $_GET["level"]==="root"){?>
    <input class="submit-right" type="submit" onclick=alert(`<?php $flag ='';include_once("flag.php");echo $flag;?>`) value="更多信息"><?php
}