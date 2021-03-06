<?php
/**
 * Welcome controller
 */

namespace Controllers;

use Core\View;
use Core\Controller;

/**
 * Sample controller showing a construct and 2 methods and their typical usage.
 */
class Contact extends Controller
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
        $data['title'] = $this->language->get('welcome_text');
        $data['welcome_message'] = $this->language->get('welcome_message');

        View::renderTemplate('header', $data);
        View::render('contact/contact', $data);
        View::renderTemplate('footer', $data);
    }


}
