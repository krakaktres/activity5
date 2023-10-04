<html><head><title> Database operation </title></head>
<body>
    <center>
<h1> Storing Form data to the database</h1>
<form action="saverec.php" method="post">
    <label>Student Id:</label>
    <input type="text" name="sid" id="sid" value =<?php echo $_REQUEST["sid"]; ?>>
    <label>Student Name:</label>
    <input type="text" name="sname" id="sname" value ='<?php echo $_REQUEST["sname"]; ?>'>
    <label>Gender:</label>
    <input type="text" name="gender" id="gender" value ='<?php echo $_REQUEST["gender"]; ?>'>
    <input type="submit" value="Update record">
</form>

</body>
</html>