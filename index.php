<?php 
    require_once __DIR__ ."/Models/CommunicationSystems.php";
    require_once __DIR__ ."/Models/Email.php";
    require_once __DIR__ ."/Models/Attached.php";
    require_once __DIR__ ."/Models/Message.php";
    require_once __DIR__ ."/Models/PushNotification.php";

    

    $attached = new Attached("Attached_1", "Video", date('Y-m-d'));

    $email = new Email ("alessio.piras64@gmail.com", "francesco.leone81@libero.it", "Campo da calcio", "Ciao, il campo da calcio da lei richiesto è disponibile.", true, $attached);

    
    
    // echo "<br/>" .$email->getSend() ."<br/>" .$email->getForwarding() ."<br/>" .$email->getPress() ."<br/>";

    // $message = new Message("alessio.piras64@gmail.com", "francesco.leone81@libero.it", "Campo da calcio", "Ciao, il campo da calcio da lei richiesto è disponibile.", false, true);

    // echo $message->getSend() ."<br/>" . $message->getAnswer();

    // $pushNotification = new PushNotification("alessio.piras64@gmail.com", "francesco.leone81@libero.it", "Campo da calcio", "Ciao, il campo da calcio da lei richiesto è disponibile.", true, "fa-brands fa-whatsapp");

    // echo $pushNotification->getSend() ."<br/>" .$pushNotification->getClick();
    


    // var_dump($communicationSystem);
    // var_dump($email);
    // var_dump($message);
    // var_dump($pushNotification);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <header class="bg-dark">
        <h1 class="text-light py-3 text-center">Communication System</h1>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <p><?php echo $email->getSender() ?></p>
                        <p><?php echo $email->recipient ?></p>
                        <p><?php echo $email->object ?></p>
                        <p><?php echo $email->contents ?></p>
                        <p><?php echo $email->messageNotification ?></p>
                        <p><?php echo $email->attached ?></p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>