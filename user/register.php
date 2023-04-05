<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form action="./registrationHandler.php" method="post">
        <label for="fname">First Name:</label><br/>
        <input type="text" name="fname"/>
        <br><br/>
        <label for="lname">Last Name:</label><br/>
        <input type="text" name="lname"/>
        <br><br/>
        <label for="email">Email:</label><br/>
        <input type="email" name="email"/>
        <br><br/>
        <label for="password">Choose Password:</label><br/>
        <input type="password" name="password"/>
        <br><br/>
        <input type="submit" value="Register" />

        
        <br></br>
        <a href="/QANDA/user/login.php">LogIn</a>
    </form>
</body>
</html>