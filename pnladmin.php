<!DOCTYPE html>

<html lang="en">
    <head>

        <?php

            session_start();

            if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['password']) == true)) {
                unset($_SESSION['email']);
                unset($_SESSION['password']);
                header('location:index.html');
            }

            $login = $_SESSION['email'];
        ?>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="icon" type="image/icon" href="favicon.ico" />
        <link rel="stylesheet" href="pnladm.css">
        <title>Painel Administrativo - Chat-Video</title>
    </head>

    <body>
        <div id="header">
            <a id="logotipe" href="index.html" title="Chat-Video">Chat-Video</a>
        </div>
    </body>
</html>