<html>
    <head>
        <title>Beauty Ecommerce</title>
    </head>

<body>
<?php
$conn = mysqli_connect ("localhost", "root", "", "db_beauty");

if ($conn === false ) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = $_REQUEST['name'];
$username = $_REQUEST['username'];
$email = $_REQUEST['email'];
$pas1 = $_REQUEST['pas1'];

$sql = "INSERT INTO regist VALUES ('$name', '$username', '$email', '$pas1')";

if(mysqli_query($conn, $sql)) {
    include 'index.php';
    echo "";

} else{
    echo "Error: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
</body>
</html>