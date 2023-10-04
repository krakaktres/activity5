
<?php
$servername= "localhost";
$username = "root";
$password = "";
$database = "dbactivity6";

$conn = mysqli_connect($servername,$username,$password,$database);

if($conn === false){
    die("ERROR");
}
$sid = $_REQUEST['sid'];
$sname = $_REQUEST['sname'];
$gender = $_REQUEST['gender'];

$sql = "UPDATE tblusers SET sname='$sname', gender='$gender' WHERE sid=$sid" ;
if($conn->query($sql) === TRUE){
    echo "record updated";
}

header("Location:index.php");
?>