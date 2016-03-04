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


    function getMailType() {

      $mail_type = $this->db->select("SELECT cemailtipo.id_contato_email_tipo,
                                                  cemailtipo.nome
                                           AS email_tipo_nome
                                           FROM contato_email_tipo cemailtipo");
      return $mail_type;

    }

    function getOneMail($id_contato) {

      $mail_list = $this->db->select("SELECT cemail.id_contato, cemail.email,
                                             cemail.id_contato_email_tipo AS email_id_tipo
                                       FROM contato_email cemail
                                       WHERE cemail.id_contato = :id_contato",
                                       [':id_contato' => $id_contato]);


      return $mail_list;

    }

    function getOnePhone($id_contato) {

      $phone_list = $this->db->select("SELECT cphone.id_contato, cphone.ddd, cphone.telefone, cphone.id_contato_telefone_tipo
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

      return $query;

    }

    // function updateOneMail($id_contato, $email, $tipo) {

    //   $mail = $this->db->update("contato_email",
    //                             ['email' => $email],
    //                             ['id_contato' => $id_contato]);

    //   $mail_tipo = $this->db->update("contato_email_tipo",
    //                                    ['nome' => $tipo],
    //                                    ['id_contato' => $id_contato]);
    //   $query = [
    //     'Dados do email' => $mail,
    //     'Dados de tipo de email' => $mail_tipo

    //   ];

    //   return $query;

    // }

    function updateOnePhone($id_contato, $phone, $phone_type, $ddd) {

      $phone = $this->db->update("contato_telefone",
                                  ['ddd' => $ddd, 'telefone' => $phone],
                                  ['id_contato' => $id_contato]);

      $phone_type = $this->db->update("contato_telefone_tipo",
                                       ['nome' => $phone_type],
                                       ['id_contato' => $id_contato]);
      $query = [
        'Dados do telefone' => $phone,
        'Dados de tipo de telefone' => $phone_tipo

      ];

      return $query;

    }

}