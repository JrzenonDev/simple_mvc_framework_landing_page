<?php
namespace Models;

use Core\Model;
use Helpers\Database;

class PainelContatoUsuario extends Model {

    function __construct() {
        parent::__construct();
        $this->db = Database::get();
    }

    function getUserList() {

      $query = $this->db->select("SELECT c.id_contato, c.nome AS contatonome
                                  FROM contato c");
      return $query;

    }

    function getOneName($id_contato) {

      $name_list = $this->db->select("SELECT c.id_contato, c.nome AS contatonome
                                      FROM contato c
                                      WHERE c.id_contato = :id_contato",
                                      [':id_contato' => $id_contato]);
      return $name_list[0];
    }

    function getOneMail($id_contato) {

      $mail_list = $this->db->select("SELECT cemail.id_contato_email,  cemail.id_contato, cemail.email,
                                             cemail.id_contato_email_tipo AS email_id_tipo
                                       FROM contato_email cemail
                                       WHERE cemail.id_contato = :id_contato",
                                       [':id_contato' => $id_contato]);


      return $mail_list;

    }

    function getMailType() {

      $mail_type = $this->db->select("SELECT cemailtipo.id_contato_email_tipo,
                                                  cemailtipo.nome
                                           AS email_tipo_nome
                                           FROM contato_email_tipo cemailtipo");
      return $mail_type;

    }

    function getOnePhone($id_contato) {

      $phone_list = $this->db->select("SELECT cphone.id_contato_telefone, cphone.id_contato, cphone.ddd, cphone.telefone, cphone.id_contato_telefone_tipo AS id_contato_tipo
                                       FROM contato_telefone cphone
                                       WHERE cphone.id_contato = :id_contato",
                                       [':id_contato' => $id_contato]);
      return $phone_list;

    }

    function getPhoneType() {

      $phone_type = $this->db->select("SELECT cphonetipo.id_contato_telefone_tipo,
                                                  cphonetipo.nome AS phone_tipo_nome
                                           FROM contato_telefone_tipo cphonetipo");
      return $phone_type;

    }

    function updateName($id_contato, $name) {

      $query = $this->db->update("contato",
                                  ['nome' => $name],
                                  ['id_contato' => $id_contato]);

      if ($query) {
        return [
          [
            'type' => 'success',
            'text' => 'Atualizado com sucesso'
          ]
        ];
      } else {
        return [
          [
            'type' => 'danger',
            'text' => 'Erro'
          ]
        ];
      }

    }

    function updateOneMail($id_contato_email, $email, $tipo_email) {
      $query = $this->db->update("contato_email",
                                ['email' => $email, 'id_contato_email_tipo' => $tipo_email],
                                ['id_contato_email' => $id_contato_email]);


      return $query;

    }

    function updateOnePhone($id_contato_telefone, $phone, $phone_type, $ddd) {

      $query = $this->db->update("contato_telefone",
                                  ['telefone' => $phone, 'ddd' => $ddd, 'id_contato_telefone_tipo' => $phone_type],
                                  ['id_contato_telefone' => $id_contato_telefone]);

      return $query;

    }

}