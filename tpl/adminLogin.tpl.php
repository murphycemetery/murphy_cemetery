<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../tpl/css/adminLogin.css">

</head>
<body>
    <div id="displayArea">
        <h1>Administrator Login</h1>

        <div class="formStyle">
            <form method="POST" name="loginForm" action="../public/adminLogin.php">
                <label class="col-25">Username:</label>
                <input type="text" name="username" value=""/>
                <br />  <br>
                <label class="col-25">Password:</label>
                <input type="password" name="password" />
                <br />  <br>
                <input id="loginSubmit" type="submit" name="login" value="Login" />
                <br><br>
                
            </form>
        </div>
    </div>
</body>
</html>