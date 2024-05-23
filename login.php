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

$username = $_REQUEST['username'];
$pas1 = $_REQUEST['pas1'];

$query_sql = "SELECT * FROM regist
WHERE username = '$username' AND pas1 = '$pas1'";

$result = mysqli_query($conn, $query_sql);

if(mysqli_num_rows($result) > 0) {
  include 'beranda.html';

} else{
    echo "<center><h1>Email atau Password anda salah. Silahkan coba kembali</h1>
    <button><strong><a href ='regist.php'>Login</a></strong></button></center>";
}
mysqli_close($conn);
?>
</body>
</html>