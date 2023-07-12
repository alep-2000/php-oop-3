<?php 
    require_once __DIR__ ."/Models/CommunicationSystems.php";
    require_once __DIR__ ."/Models/Email.php";
    require_once __DIR__ ."/Models/Attached.php";
    require_once __DIR__ ."/Models/Message.php";
    require_once __DIR__ ."/Models/PushNotification.php";

    

    $systems = [
        new Email("alessio.piras64@gmail.com", "francesco.leone81@libero.it", "Campo da calcio", "Ciao, il campo da calcio da lei richiesto è disponibile.", true),
        new Email("lorenzo.86@outlook.com", "sara.perra6@gmail.com", "Macchina Usata", "La macchina usata può essere ritirata.", true),
        new Message("Alessio Piras", "Giuseppe Leone", "Vacanza", "Ciao Giuseppe, ecco il preventivo per la vacanza di 10 giorni a Malaga", false, true),
        new Message("Vanessa Fais", "Lorenzo Lai", "Partita", "Sei pronto per la partita di domani?", false, true),
        new PushNotification("Laura", "Francesco", "Messaggio", "Apri il messaggio", true, "fa-brands fa-whatsapp"),
        new PushNotification("Sara", "Matteo", "Video", "Apri il video", true, "fa-brands fa-whatsapp")
    ];

    $attached = new Attached('Allegato_1', 'Video', "2Mb");

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
                <?php foreach($systems as $system){ ?>
                <div class="col-4">
                    <div class="card mb-2 text-center">
                        <p><?php echo $system->getSender() ?></p>
                        <p><?php echo $system->getRecipient() ?></p>
                        <p><?php echo $system->getObject() ?></p>
                        <p><?php echo $system->getContents() ?></p>
                        <?php if(get_class($system) === 'Email'){ ?>
                        <p><?php echo $system->getMessageNotification() ?  "Email consegnata" :  "Email non consegnata"; ?></p>
                        <p><?php echo $attached->getName() ." " .$attached->getType() ." " .$attached->getDimension() ?></p>
                        <p><?php echo $system->getRingtone() ?></p>
                        <p><?php echo $system->getColorLed() ?></p>
                        <p><?php echo $system->getSend() ?></p>
                        <p><?php echo $system->getForwarding() ?></p>
                        <p><?php echo $system->getPress() ?></p>
                        <?php } ?>
                        <?php if(get_class($system) === 'Message'){ ?>
                        <p><?php echo $system->getRead() ? "Messaggio letto" : "Messaggio non letto"; ?></p>
                        <p><?php echo $system->getResponse() ? "Il messaggio accetta risposte" : "Il messaggio non accetta risposte"; ?></p>
                        <p><?php echo $system->getRingtone() ?></p>
                        <p><?php echo $system->getColorLed() ?></p>
                        <p><?php echo $system->getSend() ?></p>
                        <p><?php echo $system->getAnswer() ?></p>
                        <?php } ?>
                        <?php if(get_class($system) === 'PushNotification'){ ?>
                        <p><?php echo $system->getVisibility() ? "La notifica push è visibile" : "La notifica push non è visibile"; ?></p>
                        <p><?php echo $system->getIcon() ?></p>
                        <p><?php echo $system->getRingtone() ?></p>
                        <p><?php echo $system->getColorLed() ?></p>
                        <p><?php echo $system->getSend() ?></p>
                        <p><?php echo $system->getClick() ?></p>
                        <?php } ?>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>
</html>