<?php

    /**
    * The home page controller
    */
    class CookiesController
    {
        private $model;

        function __construct($model)
        {
            $this->model = $model;
        }

        public function sayWelcome()
        {
            return $this->model->welcomeMessage();
        }

        

    }