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

$sid=$_REQUEST['sid'];
$sname=$_REQUEST['sname'];
$gender=$_REQUEST['gender'];

$sql ="INSERT INTO tblusers VALUES ('$sid', '$sname', '$gender')";

if(mysqli_query($conn, $sql)){
    echo "<h3> data stored successfully </h3>";
}
else{
    echo "ERROR:";
}
mysqli_close($conn);
header("Location:index.php");

?>



</body>
</html>