<?php
if  ($_SERVER['REQUEST_METHOD']  ===  'POST'  &&  isset($_POST['username'])  &&  isset($_POST['password']))  {
    $username  =  $_POST['username'];
    $password  =  $_POST['password'];

    if  ($username  !==  "admin"  ||  $password  !==  "qwerty")  {
		echo "            ";
        header('location: /admin.php');
        exit();
    }  else  {
        http_response_code(302);
        header('Content-Type:  application/json');
        echo  json_encode(array("status"  =>  "success!!","level"=>base64_encode("admin")));
    }
}  else  {
    header('location: /index.php');
    exit();
}
?>
