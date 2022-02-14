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

    $comment=$_POST['comment'];


    $sql_query="INSERT INTO my_data (comment) VALUES ('$comment')";

    if(mysqli_query($con, $sql_query))
    {
        echo "your comment submit sucessfully";
    }
    else
    {
        echo "Error:" .$sql. "" .mysqli_error($con);
    }
    mysqli_close($con);


}
?>