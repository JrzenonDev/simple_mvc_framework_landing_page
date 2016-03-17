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

      if (empty($name)) {
        return  [
          [
            'type' => 'danger',
            'text' => 'Nome não pode ser vazio!'
          ]
        ];
      }
      //var_dump($name); die();

      $query = $this->db->update("contato",
                                  ['nome' => $name],
                                  ['id_contato' => $id_contato]);

      if ($query) {
        return [
          [
            'type' => 'success',
            'text' => 'Nome atualizado com sucesso'
          ]
        ];
      } else {
        return [
          [
            'type' => 'danger',
            'text' => 'Erro nome'
          ]
        ];
      }

    }

    function updateOneMail($id_contato_email, $email, $tipo_email) {

      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //$emailErr = "Invalid email format";
        return  [
          [
            'type' => 'danger',
            'text' => 'Formato inválido!'
          ]
        ];
      }

      if (empty($email_validate) && empty($tipo_email)) {
        return  [
          [
            'type' => 'danger',
            'text' => 'Favor preencher os campos de email!'
          ]
        ];
      }

      $query = $this->db->update("contato_email",
                                ['email' => $email, 'id_contato_email_tipo' => $tipo_email],
                                ['id_contato_email' => $id_contato_email]);

      if ($query) {
        return [
          [
            'type' => 'success',
            'text' => 'Email atualizado com sucesso'
          ]
        ];
      } else {
        return [
          [
            'type' => 'danger',
            'text' => 'Erro email'
          ]
        ];
      }


      //return $query;

    }

    function updateOnePhone($id_contato_telefone, $phone, $phone_type, $ddd) {

      if (empty($phone) && empty($phone_type) && empty($ddd)) {
        return  [
          [
            'type' => 'danger',
            'text' => 'Favor preencher os campos de telefone!'
          ]
        ];
      }

      $query = $this->db->update("contato_telefone",
                                  ['telefone' => $phone, 'ddd' => $ddd, 'id_contato_telefone_tipo' => $phone_type],
                                  ['id_contato_telefone' => $id_contato_telefone]);

      if ($query) {
        return [
          [
            'type' => 'success',
            'text' => 'Telefone atualizado com sucesso'
          ]
        ];
      } else {
        return [
          [
            'type' => 'danger',
            'text' => 'Erro telefone'
          ]
        ];
      }

      //return $query;

    }

    public function deletar($id) {
        $result = [
            'success' => false,
            'messages' => []
        ];

        $this->db->beginTransaction();

        try {
            $delete_count = $this->db->delete('blog_post', ['post_id' => $id]);

            if (!$delete_count) {
                $result['messages'][] = ['type' => "danger", 'text' => "Erro ao deletar post da base de dados."];
                $this->db->rollBack();
                return $result;
            } else {
                $result['success'] = true;
            }

        } catch (\Exception $Exception) {
            $result['messages'][] = ['type' => "danger", 'text' => "Erro ao deletar post."];
            switch ($Exception->getCode()) {
                default:
                    $result['messages'][] = ['type' => "danger", 'text' => $Exception->getCode()." - ".$Exception->getMessage()];
                    break;
            }
            $this->db->rollBack();
            return $result;
        }

        $this->db->commit();
        return $result;
    }





    public function insertPost($name, $email, $phone) {

    }

}