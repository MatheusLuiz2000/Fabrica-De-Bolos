<div class="page-content-wrapper ">

<div class="container-fluid">

    <div class="row">
        <div class="col-sm-12">
            <div class="float-right page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Fabrica de Bolos</a></li>
                    <li class="breadcrumb-item active">Clientes</li>
                </ol>
            </div>
            <h5 class="page-title">Clientes</h5>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">

                    <h4 class="mt-0 header-title">Clientes</h4>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>E-mail</th>
                            <th>Data de Nascimento</th>
                            <th>CPF</th>
                            <th>Telefone</th>
                            <th>Data de Cadastro</th>
                            <th>Observações</th>
                            <th>Ações</th>
                        </tr>
                        </thead>


                        <tbody>
                            <?php foreach ($clientes as $key => $cada):?>
                               <tr>
                                    <td>
                                        <?= $cada->nome_cliente ?>
                                    </td>
                                    <td>
                                        <?= $cada->email_cliente ?>
                                    </td>
                                    <td>
                                        <?= Mysql_to_Data($cada->datanascimento_cliente); ?>
                                    </td>
                                    <td>
                                        <?= $cada->cpf_cliente ?>
                                    </td>
                                    <td>
                                        <?= $cada->telefone_cliente ?>
                                    </td>
                                    <td>
                                        <?= Mysql_to_DataHora($cada->datacadastro_cliente) ?>
                                    </td>
                                    <td>
                                        <?= $cada->observacoes_cliente ?>
                                    </td>
                                    <td>
                                        <div class="flex-itens">
                                            <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Editar Cliente" href="<?= base_url(); ?>inicio/editarCliente?id=<?= $cada->codigo_cliente;?>"><i class="mdi mdi-lead-pencil"></i></a>
                                            <i class="mdi mdi-account-remove" onclick="removerCliente(<?= $cada->codigo_cliente; ?>);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remover Cliente"></i>
                                        </div>
                                    </td>
                               </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

</div><!-- container fluid -->

</div> <!-- Page content Wrapper -->

</div> <!-- content -->