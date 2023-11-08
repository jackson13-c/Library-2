<!DOCTYPE html>
<html>
    <head>
        <h1>Insert data into table
</head>
<body>
    <center>
    <?php
        require"dbconnect.php";


include('dbconnect.php');

$firstname=$_REQUEST['first_name'];
$lastname=$_REQUEST['last_name'];
$gender=$_REQUEST['gender'];
$address=$_REQUEST['address'];


    $sql = "insert into staff values ('$first_name','$last_name','$gender'.'$address')";

    if ($conn->query($sql) === TRUE) {
        echo "New book added successfully";
    } else {
        echo "Error: ";
    }
?>
</center>
</body>
</html>
