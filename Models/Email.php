<?php 

    class Email extends CommunicationSystem{
        private $messageNotification;

        public function __construct($sender, $recipient, $object, $contents, $messageNotification){
            parent::__construct($sender, $recipient, $object, $contents);
            $this->messageNotification = $messageNotification;
        }
    }

?>