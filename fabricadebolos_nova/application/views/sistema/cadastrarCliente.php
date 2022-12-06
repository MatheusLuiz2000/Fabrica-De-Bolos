<div class="page-content-wrapper ">

<div class="container-fluid">

    <div class="row">
        <div class="col-sm-12">
            <div class="float-right page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url()?>inicio">Fabrica de Bolos</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>inicio/cadastrarVenda">Cadastrar Cliente</a></li>
                </ol>
            </div>
            <h5 class="page-title">Cadastrar Cliente</h5>
        </div>
    </div>
    <!-- end row -->
    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">

                    <h4 class="mt-0 header-title">Cadastrar Cliente</h4>

                    <div class="form-group row">
                        <label for="example-search-input" class="col-sm-2 col-form-label">Nome do Cliente</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text"  name="nome" id="nome" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-email-input" class="col-sm-2 col-form-label">CPF</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="cpf_nome" name="cpf_nome">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-url-input" class="col-sm-2 col-form-label">Data de Nascimento</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="datanascimento_cadastro" name="datanascimento_cadastro" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-tel-input" class="col-sm-2 col-form-label">Telefone</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="telefone" id="telefone">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-password-input" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="email" id="email" name="email"  autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Franquia</label>
                        <div class="col-sm-10">
                            <select class="custom-select" id="franquia" name="franquia">
                                <option value="" selected>Selecione uma opção</option>
                                <?php foreach ($franquias as $key => $cada): ?>
                                   <option id="tipo_bolo" name="tipo_bolo" value="<?= $cada->codigo_franquias ?>"><?= $cada->nome_franquias; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-password-input" class="col-sm-2 col-form-label">Observações</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" type="email" id="obs" name="obs"  autocomplete="off"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12" style="text-align: right;margin-top: 50px;padding-right: 0px !important;">
                        <button type="button" onclick="cadastrarCliente()" class="btn btn-primary waves-effect waves-light">Cadastrar Cliente</button>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

</div><!-- container fluid -->

</div> <!-- Page content Wrapper -->

</div> <!-- content -->