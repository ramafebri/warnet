<?php
include "./koneksi.php";
session_start();
if (!empty($_POST)) {
if (isset($_POST['username']) && isset($_POST['password'])
&& !empty($_POST['username']) && !empty($_POST['password'])) {
$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

$query = "SELECT * FROM user WHERE user.username=\"" . $username . "\" AND user.password=\"" . $password . "\"";
$result = "";
if (mysqli_error($link)) {
echo(mysqli_error($link));
die("Connection Error!");
}
$result = mysqli_query($link, $query);

$rows = mysqli_fetch_array($result);
$rowlen = count($rows);
if ($rowlen>0) {
$_SESSION['user_id'] = $rows['id'];
if ($rows['status'] == "member") {
$_SESSION['nama'] = $rows['nama'];
$_SESSION['status'] = "member";
$_SESSION['id_user'] = $rows['id'];
} else {
$_SESSION['id_user'] = $rows['id'];
$_SESSION['nama'] = $rows['nama'];
$_SESSION['status'] = "admin";
}
} else {
$_SESSION['errorMessage'] = "Data Not Found";
}
} else {
$_SESSION['errorMessage'] = "Incorrect your username/password";
}
}
else {
$_SESSION['errorMessage'] = "Incorrect your username/password";
}
header("Location: ../index.php");