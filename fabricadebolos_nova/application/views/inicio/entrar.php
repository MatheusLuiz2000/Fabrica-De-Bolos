<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Fabrica de Bolos - Entrar</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="<?= base_url() ?>assets/images/favicon.ico">

        <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url() ?>assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url() ?>assets/plugins/toast/toastr.min.css" rel="stylesheet" type="text/css">

    </head>

    <input type="hidden" id="base_url" value="<?= base_url()?>">
    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div class="accountbg" style="background-image:none !important;">
            
            <div class="content-center">
                <div class="content-desc-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5 col-md-8">
                                <div class="card">
                                    <div class="card-body">
                
                                        <h4 class="text-muted text-center font-18"><b>Entrar</b></h4>
                
                                        <div class="p-2">
                                            <form class="form-horizontal m-t-20" action="index.html">
                
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                    <input  class="form-control" type="text" class="input" name="login" id="login" placeholder="Login">
                                                    </div>
                                                </div>
                
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <input type="password" class="form-control" maxlength="6" minlength="6" name="senha" id="senha" placeholder="Senha">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <select type="password" class="form-control" maxlength="6" minlength="6" name="franquia" id="franquia">
                                                            <option value="">Selecione uma franquia</option>
                                                            <?php foreach ($franquias as $key => $cada): ?>
                                                                <option value="<?= $cada->codigo_franquias; ?>"><?= $cada->nome_franquias; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group text-center row m-t-20">
                                                    <div class="col-12">
                                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="button" onclick="entrar();">Log In</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery  -->
        <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
        <script src="<?= base_url() ?>assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url() ?>assets/js/modernizr.min.js"></script>
        <script src="<?= base_url() ?>assets/js/detect.js"></script>
        <script src="<?= base_url() ?>assets/js/fastclick.js"></script>
        <script src="<?= base_url() ?>assets/js/jquery.slimscroll.js"></script>
        <script src="<?= base_url() ?>assets/js/jquery.blockUI.js"></script>
        <script src="<?= base_url() ?>assets/js/waves.js"></script>
        <script src="<?= base_url() ?>assets/js/jquery.nicescroll.js"></script>
        <script src="<?= base_url() ?>assets/js/jquery.scrollTo.min.js"></script>
        <script src="<?= base_url() ?>assets/js/funcoes.js"></script>
        <script src="<?= base_url() ?>assets/js/mascaras.js"></script>
        <script src="<?= base_url() ?>assets/plugins/toast/toastr.min.js"></script>
        <script src="<?= base_url() ?>assets/js/login.js"></script>
        <!-- App js -->
        <script src="<?= base_url() ?>assets/js/app.js"></script>
    </body>
</html>