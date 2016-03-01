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

      $mail_list = $this->db->select("SELECT cemail.id_contato, cemail.email, cemailtipo.nome AS emailtiponome
                                       FROM contato_email cemail
                                       JOIN contato_email_tipo cemailtipo
                                       ON cemail.id_contato_email_tipo = cemailtipo.id_contato_email_tipo
                                       WHERE cemail.id_contato = :id_contato",
                                       [':id_contato' => $id_contato]);
      return $mail_list;

    }

    function getOnePhone($id_contato) {

      $phone_list = $this->db->select("SELECT cphone.id_contato, cphone.ddd, cphone.telefone, cphonetipo.nome AS phonetiponome
                                       FROM contato_telefone cphone
                                       JOIN contato_telefone_tipo cphonetipo ON cphone.id_contato_telefone_tipo = cphonetipo.id_contato_telefone_tipo
                                       WHERE cphone.id_contato = :id_contato",
                                       [':id_contato' => $id_contato]);
      return $phone_list;

    }

}