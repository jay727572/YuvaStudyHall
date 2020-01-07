<?php

include_once '../source/session.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    <?php if(!isset($_SESSION['email'])): header("location: logout.php");?>

    <?php else: ?>

    <?php endif ?>

    <?php echo "<h1> Welcome ".$_SESSION['email']." To Dashboard </h1>" ?>

    <h2><a href="logout.php">Logout</a></h2>

</body>
</html>