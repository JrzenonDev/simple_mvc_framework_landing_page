<?php
use Core\Language;
?>
<div class="intro-header-pages">

  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <section class="page-header">
          <a class="pull-right btn btn-default" href="/insert-blog" role="button">Novo Contato</a>
          <h1>Lista de usuários</h1>

          <table dw-loading="manifestacoes" class="table table-bordered">
            <thead>
              <tr>
                <th>ID Contato</th>
                <th>Nome</th>
                <th></th>
              </tr>
            </thead>

            <tbody>
              <?php foreach($data['contatos'] as $contato):?>
              <tr>
                <td><?=$contato['id_contato'];?></td>
                <td><?=$contato['contatonome'];?></td>
                <td>
                  <div class="coluna-options">
                    <a href="/edit_contato_usuario/<?=$contato['id_contato']?>" class="btn btn-default">
                      <span class="glyphicon glyphicon-edit"></span>
                    </a>
                    <a href="/edit_contato_usuario/<?=$contato['id_contato']?>" class="btn btn-default">
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

<!--     </div> -->
    <!-- /.banner -->