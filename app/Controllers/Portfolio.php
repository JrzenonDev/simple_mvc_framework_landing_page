<?php

    namespace Controllers;

    use Core\View;
    use Core\Controller;

    class Portfolio extends Controller
    {

        /**
         * Call the parent construct
         */
        public function __construct()
        {
            parent::__construct();
            $this->language->load('Welcome');
        }

        /**
         * Define Index page title and load template files
         */
        public function index()
        {
            $data['title'] = $this->language->get('JR - Portfolio');
            $data['welcome_message'] = $this->language->get('welcome_message');

            View::renderTemplate('header', $data);
            View::render('portfolio/portfolio', $data);
            View::renderTemplate('footer', $data);
        }


    }
