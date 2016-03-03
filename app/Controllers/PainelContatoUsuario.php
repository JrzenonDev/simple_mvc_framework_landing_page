<?php
/**
 * Welcome controller
 */

namespace Controllers;

use Core\View;
use Core\Controller;
use Helpers\Request;

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

        $data['name'] = $this->contatos->getOneName($id_contato);
        $data['mail'] = $this->contatos->getOneMail($id_contato);
        $data['mail_type'] = $this->contatos->getMailType();
        $data['phone'] = $this->contatos->getOnePhone($id_contato);
        $data['phone_type'] = $this->contatos->getPhoneType();

            // var_dump($data['mail_type']);
            // var_dump('aaa');
            // die();

        View::renderTemplate('header', $data);
        View::render('painel_contato_usuario/edit_contato_usuario', $data);
        View::renderTemplate('footer', $data);
    }

    public function PostUser($id_contato) {

        $tipo = Request::post('tipo_update');
        $id = Request::post('id');


        switch ($tipo) {
            case 'name':
                $name = Request::post('name');
                $this->contatos->updateName($id_contato, $name);
                break;

            case 'mail' :
                $email = Request::post('email');
                $tipo = Request::post('emailtiponome');
                $this->contatos->updateOneMail($id_contato, $email, $tipo);
                break;

            case 'phone':
                $phone = Request::post('telefone');
                $phone_type = Request::post('phonetiponome');
                $ddd = Request::post('ddd');
                $this->contatos->updateOnePhone($id_contato, $phone, $phone_type);
                break;
        }

        $this->getUser($id_contato);
    }
}