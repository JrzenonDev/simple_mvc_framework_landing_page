<div class="intro-header-pages">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">

            <h1>Inserir novo contato</h1>

                <form method="POST" action="" enctype="multipart/form-data">
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
                                        type="text" value="<?=$data['name']['contatonome'];?>"></li>
                                </form>

                                <form action="" method="POST">
                                    <input type="hidden" name="tipo_update" value="mail" />
                                    <input type="hidden" name="id" value="<?=$user_mail['id_contato_email']?>" />
                                    <li class="list-group-item"><strong>Email: </strong><input name="email" type="text" value="<?=$user_mail['email'];?>"></li>
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
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="panel panel-primary">
                            <!-- Default panel contents -->
                            <div class="panel-heading">Telefones</div>

                                <!-- List group -->
                                <ul class="list-group">


                                    <form action="" method="POST">
                                        <input type="hidden" name="tipo_update" value="phone" />
                                        <input type="hidden" name="id" value="<?=$user_phone['id_contato_telefone']?>" />
                                        <li class="list-group-item"><strong>Telefone: </strong><input name="telefone" type="text" value="<?=$user_phone['telefone'];?>"></li>

                                        <li class="list-group-item"><strong>DDD: </strong><input name="ddd" type="text" value="<?=$user_phone['ddd'];?>"></li>

                                        <li class="list-group-item"><strong>Tipo de telefone: </strong>

                                            <select name="id_contato_telefone_tipo">
                                                <?php foreach($data['phone_type'] as $phone_type):?>
                                                    <option
                                                        value="<?=$phone_type['id_contato_telefone_tipo'];?>"
                                                        <?php if($phone_type['id_contato_telefone_tipo'] == $user_phone['id_contato_tipo']): ?>
                                                            selected
                                                        <?php endif; ?>
                                                        >
                                                        <?=$phone_type['phone_tipo_nome'];?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </li>
                                    </form>
                                </ul>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>