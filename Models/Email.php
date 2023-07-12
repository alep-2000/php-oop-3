<?php 

    class Email extends CommunicationSystem{
        private $messageNotification;
        public $attached;
        public static $rington = "TR-TR";
        public static $color_led = "Yellow";
        

        public function __construct($sender, $recipient, $object, $contents, $messageNotification, Attached $attached){
            parent::__construct($sender, $recipient, $object, $contents);
            $this->messageNotification = $messageNotification;
            $this->attached = $attached;
        }

        // public function getAttached(){
        //     implode(",", $this->$attached);
        //     return $this->attached;
        // }

        public function getMessageNotification(){
            return $this->messageNotification;
        }

        public function getRingtone(){
            return self::$rington;
        }
        
        public function getColorLed(){
            return self::$color_led;
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