<?php 
    require_once __DIR__ ."/Models/CommunicationSystems.php";
    require_once __DIR__ ."/Models/Email.php";
    require_once __DIR__ ."/Models/Attached.php";
    require_once __DIR__ ."/Models/Message.php";
    require_once __DIR__ ."/Models/PushNotification.php";

    $communicationSystem = new CommunicationSystem("alessio.piras64@gmail.com", "francesco.leone81@libero.it", "Campo da calcio", "Ciao, il campo da calcio da lei richiesto è disponibile.");

    echo $communicationSystem->getSend();

    $attached = new Attached("Attached_1", "Video", date('Y-m-d'));

    $email = new Email ("alessio.piras64@gmail.com", "francesco.leone81@libero.it", "Campo da calcio", "Ciao, il campo da calcio da lei richiesto è disponibile.", true, $attached);
    
    echo "<br/>" .$email->getSend() ."<br/>" .$email->getForwarding() ."<br/>" .$email->getPress() ."<br/>";

    $message = new Message("alessio.piras64@gmail.com", "francesco.leone81@libero.it", "Campo da calcio", "Ciao, il campo da calcio da lei richiesto è disponibile.", false, true);

    echo $message->getSend();

    $pushNotification = new PushNotification("alessio.piras64@gmail.com", "francesco.leone81@libero.it", "Campo da calcio", "Ciao, il campo da calcio da lei richiesto è disponibile.", true, "fa-brands fa-whatsapp");

    echo $pushNotification->getSend();


    var_dump($communicationSystem);
    var_dump($email);
    var_dump($message);
    var_dump($pushNotification);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 3</title>
</head>
<body>
    
</body>
</html>