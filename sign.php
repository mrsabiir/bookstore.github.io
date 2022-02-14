<?php
$email=$_POST["email"];
$password=$_POST["password"];


///data base  connenction here


$con=new mysqli("localhost","root","","zoho");


if($con->connect_error)
{
    die("Failed to connect:" .$con->connect_error);

}
else{
    $stmt=$con->prepare("select * from my_data where email =?");
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt_result=$stmt->get_result();
    if($stmt_result->num_rows>0)
    {
        $data=$stmt_result->fetch_assoc();
        if($data['password']===$password)
           {
            header ("location:welcome.html");
           }
         else{
            header ("location:welcome.html");
        }
    }
    else{
        echo "envallid email or password";
    }
}
?>

