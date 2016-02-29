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
                <th>Email Tipo</th>
                <th>DDD</th>
                <th>Telefone</th>
                <th>Telefone Tipo</th>
                <th></th>
              </tr>
            </thead>

            <tbody>

              <tr>
                <?php foreach($data['name'] as $user_name): ?>
                <td>
                  <input type="text" name="FirstName" value="<?=$user_name['contatonome'];?>">
                </td>
                <?php endforeach; ?>

                <?php if (!$user_name['name']): ?>
                  <p>Sem resultados</p>
                <?php endif; ?>

                <?php foreach($data['mail'] as $user_mail):?>
                <td>
                  <input type="text" name="FirstName" value="<?=$user_mail['email'];?>">
                </td>

                <td>
                  <input type="text" name="FirstName" value="<?=$user_mail['emailtiponome'];?>">
                </td>
                <?php endforeach; ?>

                <?php if (!$user_mail['mail']): ?>
                  <p>Sem resultados</p>
                <?php endif; ?>


                <?php foreach($data['phone'] as $user_phone):?>
                <td>
                  <input type="text" name="FirstName" value="<?=$user_phone['phone'];?>">
                </td>

                <td>
                  <input type="text" name="FirstName" value="<?=$user_phone['phonetiponome'];?>">
                </td>

                <td>
                  <input type="text" name="FirstName" value="<?=$user_phone['ddd'];?>">
                </td>
                <?php endforeach; ?>

                <?php if (!$user_phone['phone']): ?>
                  <p>Sem resultados</p>
                <?php endif; ?>

                <td>
                  <div class="coluna-options">
                    <a href="#" class="btn btn-default">
                      <span class="glyphicon glyphicon-pencil"></span>
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