<?php 

    class CommunicationSystem {
        private $sender;
        private $recipient;
        private $object;
        private $contents;
        public static $rington = "DRIIIN";
        
       public function __construct($sender, $recipient, $object, $contents){
            $this->sender = $sender;
            $this->recipient = $recipient;
            $this->object = $object;
            $this->contents = $contents;
        }

        public function getSender(){
            return $this->sender;
        }

        public function getRecipient(){
            return $this->recipient;
        }
        
        public function getObject(){
            return $this->object;
        }

        public function getContents(){
            return $this->contents;
        }

        public function getSend(){
            return "Sending done";
        }
    }
    
?>