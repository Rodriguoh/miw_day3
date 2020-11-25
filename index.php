<?php
    // Boilerplate for exercice DAY 3 at university MIW 05
    // Code is bad and poor... but just enough for skills students :-)

    // Redirect to script to send email
    if (!empty($_POST['email'])) {

        // Sending invitation by email
        header('Location: send_email.php?email='.$_POST['email']);
        exit;

    }

    $form_class = "";
    $body_class = "";

    // Display delivery status, (tips anti-refreshing)
    if (!empty($_GET['delivery']) and $_GET['delivery'] === "sent") {

        // Sending invitation by email
        // echo "OK c'est envoyé..";
        $form_class = "form_remove";
        $body_class = "delivery_sent";

    }
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="Description" content="Inscris toi a la soirée de Noel de l'AMU">
        <title>Inscription soirée étudiante</title>
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <style type="text/css">

            .form_remove{
                display: none;
            }
            .delivery_sent{
                display: block;
                width: 500px;
                height: 300px;
                background: url("img/sent-mail.svg") no-repeat, rgba(255,255,255,0.5);
                background-position-x: 60%;
                background-position-y: 40%;
                border-radius: 20px;
            }
            html{
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background: url("img/background-mobile.png") no-repeat center;
                background-size: cover;
            }
            form{
                display: flex;
                flex-direction: column;
            }
            .form_elem{
                font-size: 20px;
                padding: 10px;
                margin: 5px;
                font-weight: bold;
                text-align: left;
                border-radius: 5px;
            }
            form > #email{
                height: 45px;
            }
            form > #send{
                background: url("img/email-icone.svg") no-repeat right,#C30078;
                background-size: 40px 40px;
                background-position-x: 85%;
                color: white;
                height: 70px;
                padding-left: 20px;
                border: none;
            }
            @media screen and (min-width: 769px){
                html{
                    background-image: url("img/background-desktop.png");
                    background-position: top;
                }
                form{
                    flex-direction: row;
                }
                form > #email{
                    width: 400px;
                }
                form > #send{
                    width: 250px;
                    border-radius: 0 5px 5px 0;
                }
            }
        </style>
    </head>

    <body class="<?= $body_class ?>">
        <form action="#" method="post" class="<?php echo $form_class ?>">
            <input type="email" name="email" id="email" placeholder="Ton email de star..." class="form_elem"  pattern="^(([^\.]+)|([^\.]+\.[^\.]+))@[^\.]+\.[a-zA-Z0-9]{2,4}$" required/>
            <input type="submit" id="send" value="Inscris-toi !" class="form_elem"/>
        </form>
    </body>

</html>