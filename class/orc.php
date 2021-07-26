<?php
class Orc extends Character
    {
        public function __construct()
        {
            $this->health = 1000;
        }
        // useHammer()
        function useHammer()
        {
            return FALSE;
        }
        // useSword()
        function useSword()
        {
            return FALSE;
        }
        /**
         * Méthode magique permettant d'accéder aux valeurs des attributs de l'objet. Ceci est un getter.
         * 
         * @param string $name
         * @return void
         */
        public function __get( string $name) { 
            return $this->$name;
        }
        /**
         * Méthode magique permettant de modifier une valeur d'un attribut de l'objet. Ceci est un setter.
         *
         * Nom de l'attribut
         * @param string $name 
         * Nouvelle valeur
         * @param mixed $value
         */
        public function __set( string $name, $value) 
        { 
            $this->$name = $value;
        }
    }