<!DOCTYPE html>
<html>

<head>
    <title>Temirlan turgumbekov</title>
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
        font-size: 60px;
        height: 100vh;
        padding: 0;
        margin: 0;
    }
    
    center {
        margin-top: 20%;
    }
    
    .k {
        height: 45px;
    }
</style>
<body>
    <center>
        <h2>Login Page</h2><br>
        <input type="text" name="username" id="username"><br>
       <input type="password" name="password" id="password"><br>
       <input type="submit" value="Submit" onclick="login()"><br>
                <br><br> Forgot <a href="#">Password</a>
            </form>
        </div>
    </center>
    <script>
        function login(){
          console.log("Submit")
          username = document.getElementById("username");
          password = document.getElementById('password');
          if(username.value == "tima" && password.value == "12345"){
            console.log("Correct username and password");
            window.location.replace("nn.html");
          }
        }
      </script>
</body>
</html>
