<?php
error_reporting(0);
if(isset($_POST['submit']))
{
$fullname=$_POST['fullname'];
$foodname=$_POST['foodname'];
$Restaurantname=$_POST['Restaurantname'];
$phonenumber=($_POST['phonenumber']);
$foodcode=($_POST['foodcode']);
$selectMirpur=($_POST['selectMirpur']);
$selectquantity=($_POST['select quantity']);
$fulladress=($_POST['fulladress']);
$sql="INSERT INTO  ordering (fullName,foodname,Restaurantname,phonenumber,foodcode,selectMirpur,selectquantity,fulladress) VALUES(:fullname,:foodname,:Restaurantname,:phonenumber,:foodcode,:selectMirpur,:selectquantity,:fulladress)";
$query = $dbh->prepare($sql);
$query->bindParam(':fullName',$fullName,PDO::PARAM_STR);
$query->bindParam(':foodname',$foodname,PDO::PARAM_STR);
$query->bindParam(':Restaurantname',$Restaurantname,PDO::PARAM_STR);
$query->bindParam(':phonenumber',$phonenumber,PDO::PARAM_STR);
$query->bindParam(':foodcode',$foodcode,PDO::PARAM_STR);
$query->bindParam(':selectMirpur',$selectMirpur,PDO::PARAM_STR);
$query->bindParam(':selectquantity',$selectquantity,PDO::PARAM_STR);
$query->bindParam(':fulladress',$fulladress,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();

}
?>