<?php
namespace Models;

use Core\Model;
use Helpers\Database;

class Authenticator extends Model {

    public $loggedIn = false;
    public $errors = [];

    function __construct() {
        parent::__construct();
        $this->db = Database::get();
    }

    public function login($user) {

        $query = $this->db->select("SELECT user, password
                                    FROM admin_login
                                    WHERE user = :user;",
                                    [':user' => $user]);

        $count = count($query);

        if ($count == 0) {
            $this->addError('invalid_login');
            return false;
        }

        $password_id = $query[0]['login_id'];
        $password_hash = $query[0]['password'];

        if (!Password::verify($password, $password_hash)) {
            $this->addError('invalid_password');
            return false;
        }

        session_start();

        return true;

    }

    private function addError($code) {
        $error_string;

        switch ($code) {

            case 'already_logged':
                $error_string = "Você já está logado no sistema.";
                break;

            case 'invalid_login':
                $error_string = "Login não existente.";
                break;

            case 'invalid_password':
                $error_string = "Senha incorreta.";
                break;

            case 'not_logged':
                $error_string = "Você não está logado no sistema.";
                break;
        }

        if ($error_string) {
            $this->errors[] = $error_string;
        }
    }

}
