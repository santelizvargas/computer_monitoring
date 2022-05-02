<?php
class Computer {
    
    public function __construct(
        public $name = "",
        public $ip = ""
    ){}

    public function __destruct(){}
}