<?php 

    class Message extends CommunicationSystem{
        private $readNotification;
        private $responseAcceptance;
        public static $rington = "VV-VV";
        public static $color_led = "Red";

        public function __construct($sender, $recipient, $object, $contents, $readNotification, $responseAcceptance){
            parent::__construct($sender, $recipient, $object, $contents);
            $this->readNotification = $readNotification;
            $this->responseAcceptance = $responseAcceptance;
        }

        public function getRingtone(){
           return self::$rington;
       }

        public function getColorLed(){
            return self::$color_led;
        }

       public function getRead(){
            return $this->readNotification;
       }

        public function getResponse(){
            return $this->responseAcceptance;
        }

        public function getSend(){
            return "Messagge sent";
        }


        public function getAnswer(){
            return "Answer sent";
        }
    }
?>