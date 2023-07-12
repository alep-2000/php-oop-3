<?php 
    class Attached{
        private $name;
        private $type;
        private $dimension;

        public function __construct($name, $type, $dimension){
            $this->name = $name;
            $this->type = $type;
            $this->dimension = $dimension;
        }

        public function getName(){
            return $this->name;
        }

        public function getType(){
            return $this->type;
        }

        public function getDimension(){
            return $this->dimension;
        }
    }

    
?>