<?php 
    require_once __DIR__ ."/Models/CommunicationSystems.php";
    require_once __DIR__ ."/Models/Email.php";
    require_once __DIR__ ."/Models/Message.php";
    require_once __DIR__ ."/Models/PushNotification.php";

    $communicationSystem = new CommunicationSystem("alessio.piras64@gmail.com", "francesco.leone81@libero.it", "Campo da calcio", "Ciao, il campo da calcio da lei richiesto è disponibile.");

    $email = new Email("alessio.piras64@gmail.com", "francesco.leone81@libero.it", "Campo da calcio", "Ciao, il campo da calcio da lei richiesto è disponibile.", true);
   
    $message = new Message("alessio.piras64@gmail.com", "francesco.leone81@libero.it", "Campo da calcio", "Ciao, il campo da calcio da lei richiesto è disponibile.", false);

    $pushNotification = new PushNotification("alessio.piras64@gmail.com", "francesco.leone81@libero.it", "Campo da calcio", "Ciao, il campo da calcio da lei richiesto è disponibile.", true);

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