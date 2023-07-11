<?php 

    class PushNotification extends CommunicationSystem{
        private $readNotification;

        public function __construct($sender, $recipient, $object, $contents, $readNotification){
            parent::__construct($sender, $recipient, $object, $contents);
            $this->readNotification = $readNotification;
        }
    }
?>