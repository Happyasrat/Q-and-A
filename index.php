

<?php
require_once('helpers/init.php');


// print "<pre>";
// print_r($_POST);
// print_r($_SESSION);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <H1>Home page</H1>

    
    <?php if (isset($_SESSION['uHash'])): ?>
        <a href="/QANDA/user/login.php">Sign Out</a>
        <!-- <h2>visible only when logged in</h2> -->
        <?php  endif; ?>
        
        <?php if (!isset($_SESSION['uHash'])): ?>
     <!-- <h2>visible only when logged out</h2> -->
    <?php  endif; ?>
   
</body>
</html>