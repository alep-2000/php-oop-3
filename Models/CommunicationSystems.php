<?php 

    class CommunicationSystem {
        private $sender;
        private $recipient;
        private $object;
        private $contents;
        
       public function __construct($sender, $recipient, $object, $contents){
            $this->sender = $sender;
            $this->recipient = $recipient;
            $this->object = $object;
            $this->contents = $contents;
        }

        public function getSend(){
            return "Sending done";
        }
    }
    
?>