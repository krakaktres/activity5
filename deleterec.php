<html><head><title> Database operation </title></head>
<body>

<?php
$servername= "localhost";
$username = "root";
$password = "";
$database = "dbactivity6";

$conn = mysqli_connect($servername,$username,$password,$database);

if($conn === false){
    die("ERROR");
}



$sql ="DELETE FROM tblusers WHERE sid =". $_REQUEST["sid"] ;

if($conn->query($sql) === TRUE){
    echo "<h3> data deleted successfully </h3>";
}
else{
    echo "ERROR:";
}
mysqli_close($conn);
header("Location:index.php");

?>



</body>
</html>