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

                <li class="list-group-item"><strong>Nome: </strong><?=$data['name']['contatonome'];?>
                  <a href="#" class="btn btn-default pull-right">
                    <span class="glyphicon glyphicon-trash pull-right"></span>
                  </a>
                  <a href="#" class="btn btn-default pull-right">
                    <span class="glyphicon glyphicon-pencil pull-right"></span>
                  </a>
                </li>

                <?php foreach($data['mail'] as $user_mail):?>
                  <li class="list-group-item"><strong>Email: </strong><?=$user_mail['email'];?>
                    <a href="#" class="btn btn-default pull-right">
                      <span class="glyphicon glyphicon-trash pull-right"></span>
                    </a>
                    <a href="#" class="btn btn-default pull-right">
                      <span class="glyphicon glyphicon-pencil pull-right"></span>
                    </a>
                  </li>
                  <li class="list-group-item"><strong>Tipo de email: </strong><?=$user_mail['emailtiponome'];?>
                    <a href="#" class="btn btn-default pull-right">
                      <span class="glyphicon glyphicon-trash pull-right"></span>
                    </a>
                    <a href="#" class="btn btn-default pull-right">
                        <span class="glyphicon glyphicon-pencil pull-right"></span>
                    </a>
                  </li>
                  <?php if (empty($user_mail)): ?>
                    <li class="list-group-item"><strong>Sem resultados</strong></li>
                  <?php endif;?>
                <?php endforeach; ?>

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
                  <li class="list-group-item"><strong>Telefone: </strong><?=$user_phone['telefone'];?>
                    <a href="#" class="btn btn-default pull-right">
                      <span class="glyphicon glyphicon-trash pull-right"></span>
                    </a>
                    <a href="#" class="btn btn-default pull-right">
                      <span class="glyphicon glyphicon-pencil pull-right"></span>
                    </a>
                  </li>

                  <li class="list-group-item"><strong>DDD: </strong><?=$user_phone['ddd'];?>
                    <a href="#" class="btn btn-default pull-right">
                      <span class="glyphicon glyphicon-trash pull-right"></span>
                    </a>
                    <a href="#" class="btn btn-default pull-right">
                      <span class="glyphicon glyphicon-pencil pull-right"></span>
                    </a>
                  </li>

                  <li class="list-group-item"><strong>Tipo de telefone: </strong><?=$user_phone['phonetiponome'];?>
                    <a href="#" class="btn btn-default pull-right">
                      <span class="glyphicon glyphicon-trash pull-right"></span>
                    </a>
                    <a href="#" class="btn btn-default pull-right">
                      <span class="glyphicon glyphicon-pencil pull-right"></span>
                    </a>
                  </li>
                <?php endforeach; ?>
                <?php if (empty($user_phone)): ?>
                    <li class="list-group-item"><strong>Sem resultados</strong></li>
                <?php endif;?>

              </ul>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<!-- /.content-section-a -->

    <a  name="contact"></a>
    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2>&lt;Jose Roberto&gt; &lt;/Oliveira&gt;</h2>
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

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->