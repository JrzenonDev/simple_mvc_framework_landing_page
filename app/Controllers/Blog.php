<?php


namespace Controllers;

use Core\View;
use Core\Controller;
use Helpers\Request;
use Helpers\Hooks;

class Blog extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->contatos = new \Models\PainelContatoUsuario();
    }

    public function GetPost() {

    }


}