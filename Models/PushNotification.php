<?php 

    class PushNotification extends CommunicationSystem{
        private $visibility;
        private $icon;
        public static $rington = "DRUNNNNN";
        public static $color_led = "Green";


        public function __construct($sender, $recipient, $object, $contents, $visibility, $icon){
            parent::__construct($sender, $recipient, $object, $contents);
            $this->visibility = $visibility;
            $this->icon = $icon;
        }

        public function getVisibility(){
            return $this->visibility;
        }

        public function getIcon(){
            return $this->icon;
        }

        public function getRingtone(){
            return self::$rington;
        }

        public function getColorLed(){
            return self::$color_led;
        }

        public function getSend(){
            return "Notification Push sent";
        }

         public function getClick(){
            return "I open the message";
        }
    }
?>