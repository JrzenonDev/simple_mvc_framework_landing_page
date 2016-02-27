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
class PainelContatoUsuario extends Controller
{

    /**
     * Call the parent construct
     */
    public function __construct()
    {
        parent::__construct();
        $this->language->load('Welcome');
        $this->contatos = new \Models\PainelContatoUsuario();
    }

    /**
     * Define Index page title and load template files
     */
    public function index()
    {
        $data['title'] = $this->language->get('welcome_text');
        $data['welcome_message'] = $this->language->get('welcome_message');

        View::renderTemplate('header', $data);
        View::render('painel_contato_usuario/painel_contato_usuario', $data);
        View::renderTemplate('footer', $data);
    }

    public function ListUser() {
        $data['contatos'] = $this->contatos->getUserList();

        View::renderTemplate('header', $data);
        View::render('painel_contato_usuario/painel_contato_usuario', $data);
        View::renderTemplate('footer', $data);
    }

    public function GetUser($id_contato) {
        //$data['contatos'] = $this->contatos->getUser($id_contato);

        $user_name = $this->contatos->getOneName($id_contato);
        $user_mail = $this->contatos->getOneMail($id_contato);
        $user_phone = $this->contatos->getOnePhone($id_contato);

            var_dump($user_mail);
            var_dump('aaa');
            die();
        $data['user'] = $user_data['user'];
        $data['email'] = $user_data['email'];
        $data['phone'] = $user_data['phone'];

        View::renderTemplate('header', $data);
        View::render('painel_contato_usuario/edit_contato_usuario', $data, $user_name, $user_mail, $user_phone);
        View::renderTemplate('footer', $data);
    }




}
