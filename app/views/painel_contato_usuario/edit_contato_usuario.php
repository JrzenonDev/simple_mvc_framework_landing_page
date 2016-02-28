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
                <?php if (empty($user_name[])) { echo "Sem dados para este campo";
                        foreach($user_name[] as $user_name_1):?>
                <td>
                  <input type="text" name="FirstName" value="<?=$user_name_1['contatonome'];?>">
                </td>
                <?php endforeach; ?>
                <?php endif; ?>

                <?php if (empty($user_mail[])) { echo "Sem dados para este campo";
                        foreach($user_mail[] as $user_name_1):?>
                <td>
                  <input type="text" name="FirstName" value="<?=$user_mail_1['email'];?>">
                </td>

                <td>
                  <input type="text" name="FirstName" value="<?=$user_mail_1['emailtiponome'];?>">
                </td>
                <?php endforeach; ?>
                <?php endif; ?>

                <?php if (empty($user_phone[])) { echo "Sem dados para este campo";
                        foreach($user_phone[] as $user_phone_1):?>
                <td>
                  <input type="text" name="FirstName" value="<?=$user_phone_1['phone'];?>">
                </td>

                <td>
                  <input type="text" name="FirstName" value="<?=$user_phone_1['phonetiponome'];?>">
                </td>

                <td>
                  <input type="text" name="FirstName" value="<?=$user_phone_1['ddd'];?>">
                </td>
                <?php endforeach; ?>
                <?php endif; ?>

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

              </tr>

            </tbody>
          </table>

        </section>
      </div>
    </div>
  </div>
</div>