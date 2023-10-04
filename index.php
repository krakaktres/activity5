<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title> Database operation </title>
</head>
<body>
    <center>
<h1> Storing Form data to the database</h1>
<form action="insertrec.php" method="post">
    <label>Student Id:</label>
    <input type="text" name="sid" id="sid">
    <label>Student Name:</label>
    <input type="text" name="sname" id="sname">
    <label>Gender:</label>
    <input type="text" name="gender" id="gender">
    <input type="submit" value="Add record"><br><br>
    <label> Search Name :</label>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder ="Search for name.." title ="Type in here">

</form>

<?php
$servername= "localhost";
$username = "root";
$password = "";
$database = "dbact1";

$conn = mysqli_connect($servername,$username,$password,$database);

if($conn === false){
    die("ERROR");
}

$sql = "SELECT * FROM tblusers";
$result = $conn->query($sql);

if($result->num_rows > 0){
    echo "<table id='myTable' border=1><thead><tr><td> Student ID </td><td> Student Name </td><td> Gender</td><td colspan=2> Action</td></tr></thead>";
    while($row = $result->fetch_assoc()){
        echo "<tr><td>" . $row["sid"] . "</td><td> " . $row["sname"] . " </td><td> " . $row["gender"] . "</td>
         <td><a href='editrec.php?sid=".$row["sid"]."&sname=".$row["sname"]. "&gender=".$row["gender"]."'>edit</a></td>
          <td><a href='deleterec.php?sid=".$row["sid"]."'> delete</a></td></tr>";
    }
}else {
    echo "<p> no record </p>";
}
echo "</table>";
?>
<script>
function myFunction(){
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i=0; i <tr.length; i++){
        td = tr[i].getElementsByTagName("td")[1];
        if(td){
            txtValue = td.textContent ||  td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1){
                tr[i].style.display = "";
             
            }else {
                tr[i].style.display = "none";
            }
        }
    }
}

</script>
</center>
</body>
</html>