<?php
    class Person {

        public $name;
        public $position;
        public $info;
        public $link_facebook;
        public $link_twitter;
        public $link_git;
        public $link_email;
        public $person_image;

        public function __construct($name, $position, $info, $link_facebook, $link_twitter, $link_git, $link_email, $person_image){
            $this->name = $name;
            $this->position = $position;
            $this->info = $info;
            $this->link_facebook = $link_facebook;
            $this->link_twitter = $link_twitter;
            $this->link_git = $link_git;
            $this->link_email = $link_email;
            $this->person_image = $person_image;
        }
    }
?>