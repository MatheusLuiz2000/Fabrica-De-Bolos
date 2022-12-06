<div class="page-content-wrapper ">
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="float-right page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Fábrica de Bolos</a></li>
                        <li class="breadcrumb-item active">Cliente</li>
                    </ol>
                </div>
                <h5 class="page-title">Cliente : <?= $cliente[0]->nome_cliente; ?></h5>

            </div>
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="row" style="justify-content: space-between;">
                            <div class="col-xl-2 col-md-6">
                                <div class="card mini-stat m-b-30">
                                    <div class="p-3 bg-primary text-white">
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi mdi-cake float-right mb-0"></i>
                                        </div>
                                        <h6 class="text-uppercase mb-0">Bolo de Pote</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="mt-4 text-muted">
                                            <h5 class="m-0 bolo_pote"><?= $dados_bolos[0]->bolo_pote; ?><i class="mdi mdi-arrow-up text-success ml-2"></i></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="card mini-stat m-b-30">
                                    <div class="p-3 bg-primary text-white">
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi mdi-cake float-right mb-0"></i>
                                        </div>
                                        <h6 class="text-uppercase mb-0">Bolo de Festa</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="mt-4 text-muted">
                                            <h5 class="m-0 bolo_festa"><?= $dados_bolos[0]->bolo_festa; ?><i class="mdi mdi-arrow-up text-success ml-2"></i></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="card mini-stat m-b-30">
                                    <div class="p-3 bg-primary text-white">
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi mdi-cake float-right mb-0"></i>
                                        </div>
                                        <h6 class="text-uppercase mb-0">Bolo Pequeno</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="mt-4 text-muted">
                                            <h5 class="m-0 bolo_pequeno"><?= $dados_bolos[0]->bolo_pequeno; ?><i class="mdi mdi-arrow-up text-success ml-2"></i></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="card mini-stat m-b-30">
                                    <div class="p-3 bg-primary text-white">
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi mdi-cake float-right mb-0"></i>
                                        </div>
                                        <h6 class="text-uppercase mb-0">Bolo Grande</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="mt-4 text-muted">
                                            <h5 class="m-0 bolo_grande"><?= $dados_bolos[0]->bolo_grande; ?><i class="mdi mdi-arrow-up text-success ml-2"></i></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="card mini-stat m-b-30">
                                    <div class="p-3 bg-primary text-white">
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi mdi-cake float-right mb-0"></i>
                                        </div>
                                        <h6 class="text-uppercase mb-0">Bolo Recheado</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="mt-4 text-muted">
                                            <h5 class="m-0 bolo_recheado"><?= $dados_bolos[0]->bolo_recheado; ?><i class="mdi mdi-arrow-up text-success ml-2"></i></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills nav-justified" role="tablist">
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link active" data-toggle="tab" href="#home-1" role="tab">Geral</a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link" data-toggle="tab" href="#profile-1" role="tab">Cadastrar Fidelidade</a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link" data-toggle="tab" href="#messages-1" role="tab">Fidelidade Pendente</a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link" data-toggle="tab" href="#settings-1" role="tab">Histórico Fidelidade Resgatado</a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link" data-toggle="tab" href="#settings-2" role="tab">Histórico Cupons Utilizados</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active p-3" id="home-1" role="tabpanel">
                                <h6><strong style="color:red;">Cliente</strong> : <?= $cliente[0]->nome_cliente; ?></h6>
                                <h6><strong style="color:red;">CPF</strong> : <?= $cliente[0]->cpf_cliente; ?></h6>
                                <h6><strong style="color:red;">Data Nascimento</strong> : <?= Mysql_to_Data($cliente[0]->datanascimento_cliente); ?></h6>
                                <h6><strong style="color:red;">Telefone</strong> : <?= $cliente[0]->telefone_cliente; ?></h6>
                                <h6><strong style="color:red;">Email</strong> : <?= $cliente[0]->email_cliente; ?></h6>
                                <h6><strong style="color:red;">Data de Cadastro</strong> : <?= Mysql_to_DataHora($cliente[0]->datacadastro_cliente); ?></h6>
                            </div>
                            <div class="tab-pane p-3" style="margin-top:50px;" id="profile-1" role="tabpanel">
                                <div class="form-group row">
                                    <label for="example-search-input" class="col-sm-2 col-form-label">CPF</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="<?= $cliente[0]->cpf_cliente; ?>" name="cpf" id="cpf" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tipo de Bolo</label>
                                    <div class="col-sm-10">
                                        <select class="custom-select" id="tipo" name="tipo">
                                            <option value="" selected>Selecione uma opção</option>
                                            <?php foreach ($tipos_bolos as $key => $cada) :?>
                                                    <option value="<?= $cada->codigo_tipo_bolos?>"><?= $cada->nome_tipo_bolos; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-sm-2 col-form-label">Data(USAR PADRAO DD/MM/YYYY)</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" id="data_cartao_fidelidade" name="data_cartao_fidelidade" value="<?php echo date("d/m/Y"); ?>" maxlength="16">
                                    </div>
                                </div>
                                <input type="hidden" id="codigo_cliente" value="<?= $cliente[0]->codigo_cliente?>">
                                <div class="col-lg-12" style="text-align: right;margin-top: 50px;padding-right: 0px !important;">
                                    <button type="button" onclick="cadastrarFidelidadeAction()" class="btn btn-primary waves-effect waves-light">Cadastrar Fidelidade</button>
                                </div>
                            </div>
                            <div class="tab-pane p-3" id="messages-1" role="tabpanel">
                                <?php if($fidelidade_pendente == false): ?>
                                    <p>Não possui nenhuma fidelidade a ser resgatada</p>
                                <?php else: ?>
                                        <table id="datatable-buttons" style="margin-top:50px;" class="table table-striped table-bordered dt-responsive nowrap">
                                            <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>Tipo Fidelidade</th>
                                                <th>Data Cadastro do Resgate</th>
                                                <th>Data Efetivação do Resgate</th>
                                                <th>Status</th>
                                                <th style="width: 130px;">Resgatar Agora</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($fidelidade_pendente as $key => $cada): ?>
                                                    <tr>
                                                        <td>
                                                            <?= $cliente[0]->nome_cliente; ?>
                                                        </td>
                                                        <td>
                                                            <?= $cada->nome_tipo_bolos; ?>
                                                        </td>
                                                        <td>
                                                            <?= Mysql_to_DataHora($cada->datacadastro_resgate); ?>
                                                        </td>
                                                        <td>
                                                            
                                                        </td>
                                                        <td>
                                                            Pendente
                                                        </td>
                                                        <td style="text-align: center;">
                                                            <a onclick="resgatarPromo(<?= $cada->codigo_resgate ?>)"><i style="font-size: 50px;" class="mdi mdi-replay"></i></a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table> 
                                <?php endif; ?>
                            </div>
                            <div class="tab-pane p-3" id="settings-1" role="tabpanel">
                                <?php if($resgate_historico == false): ?>
                                    <p>Não possui nada resgatado ainda!</p>
                                <?php else: ?>
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                                            <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>Tipo Fidelidade</th>
                                                <th>Data Cadastro do Resgate</th>
                                                <th>Data Efetivação do Resgate</th>
                                                <th>Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($resgate_historico as $key => $cada): ?>
                                                    <tr>
                                                        <td>
                                                            <?= $cliente[0]->nome_cliente; ?>
                                                        </td>
                                                        <td>
                                                            <?= $cada->nome_tipo_bolos; ?>
                                                        </td>
                                                        <td>
                                                            <?= Mysql_to_DataHora($cada->datacadastro_resgate); ?>
                                                        </td>
                                                        <td>
                                                            <?= Mysql_to_DataHora($cada->dataefetivado_resgate); ?>
                                                        </td>
                                                        <td>
                                                            Resgatado
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                <?php endif; ?>
                            </div>
                            <div class="tab-pane p-3" id="settings-2" role="tabpanel">
                                <?php if($fidelidade_historico == false): ?>
                                    <p>Não possui nada registrado.</p>
                                <?php else: ?>
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                                            <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>Tipo Fidelidade</th>
                                                <th>Data Cadastro da Fidelidade</th>
                                                <th>Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($fidelidade_historico as $key => $cada): ?>
                                                    <tr>
                                                        <td>
                                                            <?= $cliente[0]->nome_cliente; ?>
                                                        </td>
                                                        <td>
                                                            <?= $cada->nome_tipo_bolos; ?>
                                                        </td>
                                                        <td>
                                                            <?= Mysql_to_DataHora($cada->datacadastro_fidelidade); ?>
                                                        </td>
                                                        <td>
                                                            Utilizado
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                <?php endif; ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div><!-- container fluid -->

</div> <!-- Page content Wrapper -->

</div> <!-- content -->

<div class="modal fade premio-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0">Prêmio</h5>
                <h5>Tipo do bolo : <strong class='tipo-bolo'></strong></h5>
            </div>
            <div class="modal-body">
                <p>A cliente atingiu o limite minimo de bolos para ativar a promoção!</p>
                <h5>Escolha uma das opções para continuar</h5>
                <div class="form-group">
                    <div>
                        <div class="custom-control custom-checkbox">
                            <input type="radio" class="custom-control-input" id="customCheck1" name="opcao" value="1">
                            <label class="custom-control-label" for="customCheck1">Ativar Promoção agora</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="radio" class="custom-control-input" id="customCheck2" name="opcao" value="2">
                            <label class="custom-control-label" for="customCheck2">Deixar para resgatar depois</label>
                        </div>
                    </div>
                </div>
                <input type="hidden" id="codigo_resgate">
                <button type="button" onclick="finalizaPromocao();" class="btn btn-primary btn-lg btn-block">Finalizar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->