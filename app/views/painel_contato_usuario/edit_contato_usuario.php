<?php
use Core\Language;
?>
<div class="intro-header-pages">

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

        <!-- <a class="pull-right btn btn-default btn-logout" href="/logout" role="button">Logout</a> -->
        <a href="/painel_contato_usuario" class="pull-right btn btn-default btn-sm btn-logout">
          <span class="glyphicon glyphicon-arrow-left"></span> Back
        </a>
        <section class="page-header">
        </section>
        <h1>Editar dados do usuário</h1>

        <div class="col-sm-6">
          <div class="panel panel-primary default-jr">
            <!-- Default panel contents -->
            <div class="panel-heading default-jr">Dados do usuário (nome, emails)</div>


              <!-- List group -->
              <ul class="list-group">

              <form action="" method="POST">
              <input type="hidden" name="tipo_update" value="name" />
              <input type="hidden" name="id" value="<?=$user_email['id_contato']?>" />
                <li class="list-group-item"><strong>Nome: </strong><input name="name"
                    type="text" value="<?=$data['name']['contatonome'];?>">
                  <button type="submit" class="btn btn-default pull-right">
                    <span class="glyphicon glyphicon-trash pull-right"></span>
                  </button>
                  <button type="submit" class="btn btn-default pull-right">
                    <span class="glyphicon glyphicon-pencil pull-right"></span>
                  </button>
                </li>
               </form>

                  <?php foreach($data['mail'] as $user_mail):?>
                    <form action="" method="POST">
                      <input type="hidden" name="tipo_update" value="mail" />
                      <input type="hidden" name="id" value="<?=$user_mail['id_contato_email']?>" />
                      <li class="list-group-item"><strong>Email: </strong><input name="email" type="text" value="<?=$user_mail['email'];?>">
                        <button type="submit" class="btn btn-default pull-right">
                          <span class="glyphicon glyphicon-trash pull-right"></span>
                        </button>
                        <button type="submit" class="btn btn-default pull-right">
                            <span class="glyphicon glyphicon-pencil pull-right"></span>
                        </button>
                      </li>
                      <li class="list-group-item"><strong>Tipo de email: </strong>
                        <select name="id_contato_email_tipo">
                          <?php foreach($data['mail_type'] as $mail_type):?>
                          <option
                            value="<?=$mail_type['id_contato_email_tipo'];?>"
                          <?php if($mail_type['id_contato_email_tipo'] == $user_mail['email_id_tipo']): ?>
                            selected
                          <?php endif; ?>
                          >
                            <?=$mail_type['email_tipo_nome'];?>
                          </option>
                        <?php endforeach; ?>
                        </select>
                      </li>
                    </form>
                  <?php endforeach; ?>
                  <?php if (empty($user_mail)): ?>
                    <li class="list-group-item"><strong>Sem resultados de emails</strong></li>
                  <?php endif;?>

              </ul>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="panel panel-primary">
            <!-- Default panel contents -->
            <div class="panel-heading">Telefones</div>
              <!-- List group -->

                <ul class="list-group">
                  <?php foreach ($data['phone'] as $user_phone): ?>
                    <form action="" method="POST">
                      <input type="hidden" name="tipo_update" value="phone" />
                      <input type="hidden" name="id" value="<?=$user_email['id_contato_telefone']?>" />
                      <li class="list-group-item"><strong>Telefone: </strong><input name="telefone" type="text" value="<?=$user_phone['telefone'];?>">
                        <button type="submit" class="btn btn-default pull-right">
                          <span class="glyphicon glyphicon-trash pull-right"></span>
                        </button>
                        <button type="submit" class="btn btn-default pull-right">
                          <span class="glyphicon glyphicon-pencil pull-right"></span>
                        </button>
                      </li>

                      <li class="list-group-item"><strong>DDD: </strong><input name="ddd" type="text" value="<?=$user_phone['ddd'];?>">
                      </li>

                      <li class="list-group-item"><strong>Tipo de telefone: </strong>
                      <select name="phonetiponome">
                          <?php foreach($data['phone_type'] as $phone_type):?>
                          <option value="<?=$user_phone['phonetiponome'];?>">
                            <?=$phone_type['phone_tipo_nome'];?>
                          </option>
                        <?php endforeach; ?>
                        </select>
                      </li>
                    </form>
                    <?php endforeach; ?>
                    <?php if (empty($user_phone)): ?>
                        <li class="list-group-item"><strong>Sem resultados de telefones</strong></li>
                    <?php endif;?>
                </ul>

          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<!-- /.content-section-a -->

    <!-- <a  name="contact"></a>
    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2>&lt;h2&gt;Jose Roberto Oliveira&lt;/h2&gt;</h2>
                </div>
                <div class="col-lg-6">
                    <ul class="list-inline banner-social-buttons">
                        <li>
                            <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                        </li>
                        <li>
                            <a href="https://github.com/JrzenonDev/" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div> -->
        <!-- /.container -->

    <!-- </div> -->
    <!-- /.banner -->