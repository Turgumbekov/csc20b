<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap');
    body {
        background-image: url('https://www.pixelstalk.net/wp-content/uploads/2016/08/Background-Images-Full-HD-Wallpapers-Free-Download.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
        font-family: 'Oswald', sans-serif;
        font-size: 3 0px;
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
