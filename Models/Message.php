<?php 

    class Message extends CommunicationSystem{
        private $readNotification;
        private $responseAcceptance;

        public function __construct($sender, $recipient, $object, $contents, $readNotification, $responseAcceptance){
            parent::__construct($sender, $recipient, $object, $contents);
            $this->readNotification = $readNotification;
            $this->responseAcceptance = $responseAcceptance;
        }

        public function getSend(){
            return "Messagge sent";
        }
    }
?>