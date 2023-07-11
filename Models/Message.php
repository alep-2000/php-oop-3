<?php 

    class Message extends CommunicationSystem{
        private $visibility;

        public function __construct($sender, $recipient, $object, $contents, $visibility){
            parent::__construct($sender, $recipient, $object, $contents);
            $this->visibility = $visibility;
        }
    }
?>