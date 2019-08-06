<?php
session_start();
if(isset($_POST["captcha"])
    &&$_POST["captcha"]!=""
    &&$_SESSION["code"]==$_POST["captcha"])
{
    echo"correct code entered";
}
else{
    die("wrong code entered");
}
?>