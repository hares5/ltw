<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Gruppo</title>
        <link rel="stylesheet" href="login-page.css">
       <!-- <script defer src="login-page.js"></script> -->
    </head>

    <body>
        <main id="main-holder">
            <h1 id="login-header">LOGIN</h1>
            
            <div id="login-error-msg-holder">
                <p id="login-error-msg">Invalid username <span id="error-msg-second-line">and/or password</span></p>
            </div>

            <form id="login-form" action="login_gruppo.php" method="POST">
                <input type="text" name="gruppo" id="email" class="login-form-field" placeholder="Nome gruppo" ><br>
                <input type="password" name ="password" id="password-field" class="login-form-field" placeholder="Password" ><br>
                <input type="submit" value="Login" id="login-form-submit"> <br>
                Non sei registrato?
                <A HREF="signup.html">REGISTRATI</A>
            </form>
        </main>
    </body>
</html>