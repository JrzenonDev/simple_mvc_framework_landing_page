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
        $data['contatos'] = $this->contatos->getUsuarioList();

        View::renderTemplate('header', $data);
        View::render('painel_contato_usuario/painel_contato_usuario', $data);
        View::renderTemplate('footer', $data);
    }

    public function EditUser($id_contato) {
        $data['contatos'] = $this->contatos->editUsuarioList($id_contato);

        View::renderTemplate('header', $data);
        View::render('painel_contato_usuario/edit_contato_usuario', $data);
        View::renderTemplate('footer', $data);
    }


}
