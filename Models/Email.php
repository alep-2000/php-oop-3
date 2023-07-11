<?php 

    class Email extends CommunicationSystem{
        private $messageNotification;
        public $attached;

        public function __construct($sender, $recipient, $object, $contents, $messageNotification){
            parent::__construct($sender, $recipient, $object, $contents);
            $this->messageNotification = $messageNotification;
        }

        public function getSend(){
            return "Email sent";
        }

        public function getForwarding(){
            return "Email forwarded";
        }

        public function getPress(){
            return "Email printed";
        }
    }

?>