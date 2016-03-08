<?php
/**
 * Welcome controller
 */

namespace Controllers;

use Core\View;
use Core\Controller;
use Helpers\Request;
use Helpers\Hooks;

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

    public function GetUser($id_contato, $messages = []) {

        $data['name'] = $this->contatos->getOneName($id_contato);
        $data['mail'] = $this->contatos->getOneMail($id_contato);
        $data['mail_type'] = $this->contatos->getMailType();
        $data['phone'] = $this->contatos->getOnePhone($id_contato);
        $data['phone_type'] = $this->contatos->getPhoneType();
        $data['messages'] = $messages;
        Hooks::addHook('js', '\Controllers\PainelContatoUsuario@scripts');

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
        $messages = [];

        switch ($tipo) {
            case 'name':
                $name = Request::post('name');
                $messages = $this->contatos->updateName($id_contato, $name);
                break;

            case 'mail' :
                $email = Request::post('email');
                $tipo_email = Request::post('id_contato_email_tipo');
                $messages = $this->contatos->updateOneMail($id, $email, $tipo_email);
                break;

            case 'phone':
                $phone = Request::post('telefone');
                $ddd = Request::post('ddd');
                $phone_type = Request::post('id_contato_telefone_tipo');
                $messages = $this->contatos->updateOnePhone($id, $phone, $phone_type, $ddd);
                break;
        }

        $this->getUser($id_contato, $messages);
    }

    public function scripts() {
      echo '<script src="/www/assets/js/edit_contact_user.js" type="text/javascript"></script>';
    }
}