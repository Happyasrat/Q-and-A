<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>
<body>
    <h1>Log in</h1>

     <form action="/QANDA/discussions" method="post">
       
        <label for="email">Email:</label><br/>
        <input type="email" name="email"/>
        <br><br/>
        <label for="password">Password:</label><br/>
        <input type="password" name="password"/>
        <br><br/>
        <input type="submit" value="Log in" />

        <br>
        <br>
        <a href="/QANDA/user/register.php">Sign Up</a>
    </form>
</body>
</html>