<?php 

    class PushNotification extends CommunicationSystem{
        private $visibility;
        private $icon;

        public function __construct($sender, $recipient, $object, $contents, $visibility, $icon){
            parent::__construct($sender, $recipient, $object, $contents);
            $this->visibility = $visibility;
            $this->icon = $icon;
        }
    }
?>