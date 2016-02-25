<?php
namespace Models;

use Core\Model;
use Helpers\Database;

class PainelContatoUsuario extends Model {

    function __construct() {
        parent::__construct();
        $this->db = Database::get();
    }

    function getUsuarioList() {

      $query = $this->db->select("SELECT c.id_contato, c.nome AS contatonome, cemail.email,
                                         cemailtipo.nome, ctel.ddd,
                                         ctel.telefone, cteltipo.nome AS telnome
                                  FROM contato c
                                  LEFT JOIN contato_email cemail ON c.id_contato = cemail.id_contato
                                  LEFT JOIN contato_email_tipo cemailtipo ON cemailtipo.id_contato_email_tipo = cemail.id_contato_email_tipo
                                  LEFT JOIN contato_telefone ctel ON ctel.id_contato = c.id_contato
                                  LEFT JOIN contato_telefone_tipo cteltipo ON cteltipo.id_contato_telefone_tipo = ctel.id_contato_telefone_tipo");

      return $query;

    }

    function editUsuarioList($id_contato) {

      if (!isset($_POST['id_contato'])) {
        $id_contato_user = $_POST['id_contato'];
      }

      $query = $this->db->select("SELECT c.id_contato, c.nome AS contatonome, cemail.email,
                                         cemailtipo.nome, ctel.ddd,
                                         ctel.telefone, cteltipo.nome AS telnome
                                  FROM contato c
                                  LEFT JOIN contato_email cemail ON c.id_contato = cemail.id_contato
                                  LEFT JOIN contato_email_tipo cemailtipo ON cemailtipo.id_contato_email_tipo = cemail.id_contato_email_tipo
                                  LEFT JOIN contato_telefone ctel ON ctel.id_contato = c.id_contato
                                  LEFT JOIN contato_telefone_tipo cteltipo ON cteltipo.id_contato_telefone_tipo = ctel.id_contato_telefone_tipo
                                  WHERE c.id_contato = :id_contato",
                                  [':id_contato' => $id_contato]);

      return $query;
    }

}