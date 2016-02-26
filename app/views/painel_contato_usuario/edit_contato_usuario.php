<?php
use Core\Language;
?>
<div class="intro-header-pages">

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <section class="page-header">
          <a class="pull-right btn btn-default" href="/logout" role="button">Logout</a>
          <h1>Editar dados do usuário</h1>

          <table dw-loading="manifestacoes" class="table table-bordered">
            <thead>
              <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Telefone Tipo</th>
                <th></th>
              </tr>
            </thead>

            <tbody>
              <?php foreach($data['contatos'] as $contato):?>
              <tr>
                <td><input type="text" name="FirstName" value="<?=$contato['contatonome'];?>"></td>
                <td><input type="text" name="FirstName" value="<?=$contato['email'];?>"></td>
                <td><input type="text" name="FirstName" value="<?=$contato['telefone'];?>"></td>
                <td><input type="text" name="FirstName" value="<?=$contato['phonetiponome'];?>"></td>
                <td>
                  <div class="coluna-options">
                    <a href="/edit_contato_usuario/<?=$contato['id_contato']?>" class="btn btn-default">
                      <span class="glyphicon glyphicon-pencil"></span>
                    </a>
                    <a href="/edit_contato_usuario/<?=$contato['id_contato']?>" class="btn btn-default">
                      <span class="glyphicon glyphicon-trash"></span>
                    </a>
                  </div>
                </td>
              <?php endforeach; ?>
              </tr>

            </tbody>
          </table>

        </section>
      </div>
    </div>
  </div>
</div>