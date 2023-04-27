<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <link rel="stylesheet" href="login-page.css">
       <!-- <script defer src="login-page.js"></script> -->
    </head>

    <body>
        <main id="main-holder">
            <h1 id="login-header">LOGIN</h1>
            
            <div id="errorDiv" style="display: none; color: red;"></div>

            <form id="login-form">
                <input type="text" name="email" id="email" class="login-form-field" placeholder="Email o Username" ><br>
                <input type="password" name ="password" id="password-field" class="login-form-field" placeholder="Password" ><br>
                <input type="submit" value="Login" id="login-form-submit"> <br>
                Non sei registrato?
                <A HREF="signup.html">REGISTRATI</A>
            </form>
        </main>
        <script>
            $(document).ready(function() {
    // quando il form viene inviato
    $("#login-form-submit").click(function(event) {
        // previene l'invio del form
        event.preventDefault();

        // recupera i valori dei campi username e password
        var username = $("#email").val();
        var password = $("#password-field").val();

        // invia i valori tramite AJAX al file PHP che verifica le credenziali
        $.ajax({
            url: "login.php",
            type: "POST",
            data: {username:username,password:password},
            success: function(response) {
                
                // se le credenziali sono corrette, reindirizza l'utente alla pagina successiva
                if (response == "login effettuato") {
                    
                    window.location.href = "gruppi.php";
                } else {
                    //alert(response),
                    // se le credenziali sono errate, mostra un messaggio di errore
                    $("#errorDiv").text("Username o password errati.");
                    $("#errorDiv").show();
                }
            },
            error: function() {
                // se si è verificato un errore durante l'invio del form, mostra un messaggio di errore generico
                $("#errorDiv").text("Si è verificato un errore.");
                $("#errorDiv").show();
            }
        });
    });
});
</script>
    </body>
</html>
