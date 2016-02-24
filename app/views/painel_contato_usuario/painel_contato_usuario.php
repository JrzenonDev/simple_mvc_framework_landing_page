<?php
use Core\Language;
?>
<div class="intro-header-pages">

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <section class="page-header">
          <a class="pull-right btn btn-default" href="/logout" role="button">Logout</a>
          <h1>Dados do usuário</h1>

          <table dw-loading="manifestacoes" class="table table-bordered">
            <thead>
              <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefeone</th>
                <th></th>
              </tr>
            </thead>

            <tbody>
              <?php foreach($data['contatos'] as $contato): var_dump($data['contatos'])?>
              <tr>
                <td><?=$contato['nome'];?></td>
                <td><?=$contato['email'];?></td>
                <td><?=$contato['telefone'];?></td>
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
              <?php endforeach; ?>
            </tbody>
          </table>

        </section>
      </div>
    </div>
  </div>
</div>