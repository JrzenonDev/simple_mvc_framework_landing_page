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

              <tr>
                <td><input type="text" name="FirstName" value="<?=$contato['contatonome'];?>"></td>
                <td><input type="text" name="FirstName" value="<?=$contato['email'];?>"></td>
                <td><input type="text" name="FirstName" value="<?=$contato['telefone'];?>"></td>
                <td><input type="text" name="FirstName" value="<?=$contato['telnome'];?>"></td>
                <td>
                  <div class="coluna-options">
                    <a href="#" class="btn btn-default">
                      <span class="glyphicon glyphicon-info-sign"></span>
                    </a>
                    <a href="#" class="btn btn-default">
                      <span class="glyphicon glyphicon-trash"></span>
                    </a>
                  </div>
                </td>
              </tr>

            </tbody>
          </table>

        </section>
      </div>
    </div>
  </div>
</div>