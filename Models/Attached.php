<?php 
    class Attached{
        private $name;
        private $type;
        private $date;

        public function __construct($name, $type, $date){
            $this->name = $name;
            $this->type = $type;
            $this->date = $date;
        }

        // public function getAttached(){
        //     return $this->name ." " . $this->type . " " .$this->date;
        // }
    }

    
?>