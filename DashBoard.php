<?php
session_start();
?>
<?php
if (!isset($_SESSION['name'])) {
    header('location:index.php');
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include_once 'Component/link.php' ?>
    <title> DashBoard - Krida</title>
</head>

<body style="background:#131313; margin: 0; padding: 0; overflow-x: hidden;">

<!-- navbar -->
<?php include_once 'Component/NavBar.php'; ?>
<?php include_once 'Component/MobileNavBar.php' ?>




<!-- Optional JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<script src="js/Script.js"></script>
<script src="js/Weather.js"></script>
</body>

</html>