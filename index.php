<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<style>
    body {
        background-color: blue;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
    }
    
    center {
        margin-top: 20%;
    }
</style>

<body>
    <center>
        <h2>Login Page</h2><br>
        <div class="login">
            <form id="login" method="get" action="login.php">
                <label><b>User Name     
        </b>    
        </label>
                <input type="text" name="Uname" id="Uname" placeholder="Username">
                <br><br>
                <label><b>Password     
        </b>    
        </label>
                <input type="Password" name="Pass" id="Pass" placeholder="Password">
                <br><br>
                <input type="button" name="log" id="log" value="Log In Here">
                <br><br>
                <input type="checkbox" id="check">
                <span>Remember me</span>
                <br><br> Forgot <a href="#">Password</a>
            </form>
        </div>
    </center>
</body>

</html>
