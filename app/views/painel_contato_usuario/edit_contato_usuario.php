<?php
use Core\Language;
?>
<div class="intro-header-pages">

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

        <h1>Editar dados do usuário</h1>
        <div class="col-sm-12">
          <div class="panel panel-primary">
            <!-- Default panel contents -->
            <div class="panel-heading">Dados do usuário</div>
              <!-- List group -->
              <ul class="list-group">
                <li class="list-group-item"><strong>Nome: </strong><?=$data['name']['contatonome'];?></li>
                <?php foreach($data['mail'] as $user_mail):?>
                <li class="list-group-item"><strong>Email: </strong><?=$user_mail['email'];?></li>
                <?php if (!$user_name['mail']): ?>
                  <li class="list-group-item"><strong>Email: </strong>Sem dados</li>
                <?php endif; ?>
              <?php endforeach; ?>
                <li class="list-group-item">
                  <strong>Arquivo usuário:</strong><br>
                  <a ng-click="openLightbox(imagemUsuario)">
                    <img class="img-detalhes" alt="..." src="/assets/image/img-teste-detalhes/22.jpg">
                  </a>
                </li>
              </ul>
          </div>
        </div>

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
                <td>
                  <input type="text" name="FirstName" value="<?=$data['name']['contatonome'];?>">
                </td>

                <?php if (!$data['name']): ?>
                  <td>
                    <input type="text" name="FirstName" value="Sem resultados">
                  </td>
                <?php endif; ?>

                <?php foreach($data['mail'] as $user_mail):?>
                <td>
                  <input type="text" name="FirstName" value="<?=$user_mail['email'];?>">
                </td>
                <?php if (!$user_name['mail']): ?>
                  <td>
                    <input type="text" name="FirstName" value="Sem resultados">
                  </td>
                <?php endif; ?>

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