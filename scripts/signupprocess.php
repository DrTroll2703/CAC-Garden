<?php
    $host='localhost';
    $username='root';
    $password='';
    $conn=mysqli_connect($host,$username,$password,"cacgarden");
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
?>

<?php
$name=$_POST['name'];
$gender=$_POST['gender'];
$login=$_POST['loginname'];
$password=$_POST['loginpassword'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$address=$_POST['address'];
$pcode=$_POST['postalcode'];
$sql=mysqli_query($conn,"SELECT * FROM customers where cus_email='$email'");

if(mysqli_num_rows($sql)>0)
{
    header("Location:../pages/signup.php?status=fail");
	exit;
}
else
{
    $sql1=mysqli_query($conn,"SELECT cus_id FROM customers WHERE cus_id=(SELECT max(cus_id) FROM customers)");
    $result= mysqli_fetch_array($sql1,MYSQLI_NUM);
    $string= implode(" ",$result);
    $id= $string+1;
    $sql2=mysqli_query($conn,"INSERT INTO customers(cus_id, cus_name, cus_gender, cus_login, cus_password, cus_phone, cus_email, cus_address, cus_postal ) VALUES ('$id','$name', '$gender', '$login', '$password', '$phone', '$email','$address','$pcode')");
    header ("Location: ../pages/signin.php?status=success");
}
?>