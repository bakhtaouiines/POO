<?php
    class Character 
    {
        protected $health = 0;
        protected $mana = 0;
        private $stuff = null;
        // constructor()
        function __construct() 
        {
            $this->stuff = new stuff();
        }
        // destructor()
        function __destruct()
        {
        }
        // Chat
        function chat( string $charac = "") : string
        {
            return "chat() returns a string";
        }
    }
// pour PHP --> pas de 'fin de PHP'