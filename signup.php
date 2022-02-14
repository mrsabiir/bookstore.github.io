<?php
$servername="localhost";
$username="root";
$password="";
$database_name="zoho";

$con=mysqli_connect($servername,$username,$password,$database_name);
if(!$con){
    die("Connection Failed:" .mysqli_connect_error());

}
if(isset($_POST['save']))
{
    $email=$_POST['email'];
    $secret_code=$_POST['secret_code'];


    $sql_query="INSERT INTO my_data (email,secret_code) VALUES ('$email','$secret_code')";

    if(mysqli_query($con, $sql_query))
    {
        header ("location:verification.html");
    }
    else
    {
        echo "Error:" .$sql. "" .mysqli_error($con);
    }
    mysqli_close($con);


}
?>