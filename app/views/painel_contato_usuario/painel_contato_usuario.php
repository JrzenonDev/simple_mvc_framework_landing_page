<?php
use Core\Language;
?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <section class="page-header">
        <a class="pull-right btn btn-default" href="/logout" role="button">Logout</a>
        <h1>Manifestações</h1>

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
            <tr ng-repeat="manifestacao in manifestacoes"
                ng-class="{danger: manifestacao.status_id == 1,
                           warning: manifestacao.status_id == 2,
                           success: manifestacao.status_id == 3}">
              <td>{{manifestacao.protocolo || 'Sem Número'}}</td>
              <td>{{manifestacao.rodovia_nome}}</td>
              <td>{{manifestacao.sentido_descricao}}</td>
              <td>
                <div class="coluna-options">
                  <a href="/manifestacoes/{{manifestacao.manifestacao_id}}" class="btn btn-default" uib-tooltip="Detalhes" tooltip-placement="top" tooltip-append-to-body="true">
                    <span class="glyphicon glyphicon-info-sign"></span>
                  </a>
                  <a artesp-only ng-click="deleteManifestacao(manifestacao.manifestacao_id)" confirm="Os dados não poderão ser recuperados. Deseja realmente prosseguir ?" confirm-title="Excluir manifestação" confirm-ok="Sim" confirm-cancel="Cancelar" class="btn btn-default" uib-tooltip="Excluir manifestação" tooltip-placement="top" tooltip-append-to-body="true">
                    <span class="glyphicon glyphicon-trash"></span>
                  </a>
                </div>
              </td>
            </tr>
          </tbody>
        </table>

        <uib-pagination items-per-page="searchData.results_per_page"
                        total-items="searchData.entry_count"
                        ng-model="searchData.pg"
                        ng-change="updateList(searchData.pg)"
                        ng-disabled="loading"
                        previous-text="<"
                        next-text=">"
                        max-size="20"
                        force-ellipses="true">
        </uib-pagination>
      </section>
    </div>
  </div>
</div>