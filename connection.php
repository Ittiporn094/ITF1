<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'ann123.mysql.database.azure.com', 'Ittiporn@ann123', 'OWUlhm78', 'itflab', 3306);

if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
