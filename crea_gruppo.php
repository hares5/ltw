<!DOCTYPE html>

<html>
    
 <head>
     <meta charset="ISO-8859-1">
     <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>REGISTRAZIONE</title>
     <link rel="stylesheet" href="signuppage.css">
    <!-- <script defer src="signuppage.js"></script> -->
    
    </head>
    <body>
        <main id="mainholder">
        <h1 id="signupheader">CREA IL GRUPPO</h1>
        <form id="formheader" action="creazione_gruppo.php" method="POST">        
            <input type="text" id="name-field" name="name" class="signup-form-field" placeholder="Nome gruppo" required ><br>
            <input type="password" id="password-field" name="password" class="signup-form-field" placeholder="Password" required > <br>
            <input type="submit" value="Registrati" id="balena" >
        </form>
        Sei gia registrato?
        <a HREF="login-page.html">LOGIN</a>
        
        </main>
    </body>
</html>